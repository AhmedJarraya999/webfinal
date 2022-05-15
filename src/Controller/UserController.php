<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\User;
use App\Form\SearchFormType;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;






/**
 * @Route("admin/user")
 */
class UserController extends AbstractController
{
    
  const ATTRIBUTES_TO_SERIALIZE = ['id', 'username', 'roles','firstname','password', 'lastname', 'email','phone','introduction'];
    /**
     * @Route("/", name="app_user_index", methods={"GET"})
     */
    public function index(UserRepository $userRepository, Request $request): Response
    {
        $data = new SearchData();
        $form = $this->createForm(SearchFormType::class, $data);
        $form->handleRequest($request);
        $users = $userRepository->findSearch($data);

        return  $this->render('user/index.html.twig', [
            'users' => $users,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/search", name="app_user_search", methods={"POST"})
     */
    public function search(UserRepository $userRepository, Request $request)
    {
        $users = $userRepository->findByFullName($request->request->get('text', ''));

        return new JsonResponse($users);
    }

    /**
     * @Route("/new", name="app_user_new", methods={"GET", "POST"})
     */
    public function new(Request $request, UserRepository $userRepository, UserPasswordEncoderInterface $encoder): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($plainPassword = $request->request->get('plainPassword')) {
                $hash = $encoder->encodePassword($user, $plainPassword);
                $user->setPassword($hash);
            }

            $userRepository->add($user);
            return $this->redirectToRoute('app_user_index');
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_user_show", methods={"GET"})
     */
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_user_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, User $user, UserRepository $userRepository, UserPasswordEncoderInterface $encoder): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($plainPassword = $request->request->get('plainPassword')) {
                $hash = $encoder->encodePassword($user, $plainPassword);
                $user->setPassword($hash);
            }

            $userRepository->add($user);
            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{user}", name="app_user_remove", methods={"GET"})
     */
    public function remove(Request $request, User $user, UserRepository $userRepository): Response
    {
        $userRepository->remove($user);

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/{id}", name="app_user_delete", methods={"POST"})
     */
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user);
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
   * @Route("/user/list")
   */
  public function getList(UserRepository $repo, SerializerInterface $serializer): Response
  {

    $users = $repo->findAll();
    $json = $serializer->serialize($users, 'json', ['groups' => ['user']]);


    return $this->json(['user' => $users], Response::HTTP_OK, [], [
      'attributes' => self::ATTRIBUTES_TO_SERIALIZE
    ]);
  }


  /**
   * @Route("/user/ajouter" , name="user_ajouter" ,  methods={"GET", "POST"}, requirements={"id":"\d+"})
   */
  public function ajouter(Request $request,SerializerInterface $serializer)
  {

    $user = new User();
    $username = $request->query->get('username');
    $password = $request->query->get('password');
    $firstname = $request->query->get('firstname');
    $lastname = $request->query->get('lastname');
    $email = $request->query->get('email');
    $phone = $request->query->get('phone');
    $introduction = $request->query->get('introduction');
    //  $datedebut=$request->query->get('dateDebut');
    // $datefin=$request->query->get('dateFin');
    $em = $this->getDoctrine()->getManager();
    $user->setUsername($username);
    $user->setFirstname($firstname);
    $user->setLastname($lastname);
    $user->setEmail($email);
    $user->setPhone($phone);
    $user->setPassword($password);
    $user->setIntroduction($introduction);
    
    $em->persist($user);
    $em->flush();
    // $serializer = new Serializer([new ObjectNormalizer()]);
    // $formatted = $serializer->normalize($user);
    // return new JsonResponse($formatted);
    $json = $serializer->serialize(
        $user,
        'json', ['groups' => ['user' /* if you add "user_detail" here you get circular reference */]]
    );
    return new JsonResponse($json);
  }

    /**
   * @Route("/utilisateur/supprimer", name="supprimer_user")
   */
  public function supprimer(Request $request, UserRepository $repo): Response
  {

    $id = $request->get("id");
    $em = $this->getDoctrine()->getManager();

    $id =   $repo->find($id);

    if ($id != null) {
      $em->remove($id);
      $em->flush();
      $serializer = new Serializer([new ObjectNormalizer()]);
      $formatted = $serializer->normalize("votre utilisateur a été annulé avec succes  ");
      return new JsonResponse($formatted);
    }

    return  new JsonResponse("Id Invalide");
  }



  /**
   * @Route("/user/modifier/{id}" , name="user_modifier" ,  methods={"GET", "POST"}, requirements={"id":"\d+"})
   */
  public function modifier(Request $request,UserRepository $repo,$id,SerializerInterface $serializer)
  {

    $user =$repo->findOneById($id) ;
    $username = $request->query->get('username');
    $password = $request->query->get('password');
    $firstname = $request->query->get('firstname');
    $lastname = $request->query->get('lastname');
    $email = $request->query->get('email');
    $phone = $request->query->get('phone');
    $introduction = $request->query->get('introduction');
    //  $datedebut=$request->query->get('dateDebut');
    // $datefin=$request->query->get('dateFin');
    $em = $this->getDoctrine()->getManager();
    $user->setUsername($username);
    $user->setFirstname($firstname);
    $user->setLastname($lastname);
    $user->setEmail($email);
    $user->setPhone($phone);
    $user->setPassword($password);
    $user->setIntroduction($introduction);
    
    $em->persist($user);
    $em->flush();
    // $serializer = new Serializer([new ObjectNormalizer()]);
    // $formatted = $serializer->normalize($user);
    // return new JsonResponse($formatted);
    $json = $serializer->serialize(
        $user,
        'json', ['groups' => ['user' /* if you add "user_detail" here you get circular reference */]]
    );
    return new JsonResponse($json);
  }

}
