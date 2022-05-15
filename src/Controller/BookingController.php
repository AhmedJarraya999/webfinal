<?php

namespace App\Controller;

use App\Entity\Booking;
use App\Entity\Stay;
use App\Form\BookingType;
use App\Repository\BookingRepository;
use App\Repository\StayRepository;
use App\Repository\UserRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/booking")
 */
class BookingController extends AbstractController
{

    const ATTRIBUTES_TO_SERIALIZE = ['id', 'stayId', 'userId', 'bookingDate', 'firstDate', 'endDate'];
    /**
     * @Route("/", name="app_booking_index", methods={"GET"})
     */
    public function index(BookingRepository $bookingRepository): Response
    {
        return $this->render('booking/index.html.twig', [
            'bookings' => $bookingRepository->findAll(),
        ]);
    }

    /**
     * @Route("/", name="MyBookings", methods={"GET"})
     */
    public function MyBookings(BookingRepository $bookingRepository): Response
    {
        //todo implement a function in the booking repository that lists the booking where booking.user.id is equal to the id of the user conneceted

        return $this->render('booking/index.html.twig', [
            'bookings' => $bookingRepository->findAll(),
        ]);
    }


    /**
     * @Route("/print", name="printBooking")
     */
    public function ImprimerCommande()
    {
        $repository = $this->getDoctrine()->getRepository(Booking::class);
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $commande = $repository->findAll();


        // Retrieve the HTML generated in our twig file
        $html = $this->renderView(
            'booking/show.html.twig',
            ['booking' => $commande]
        );

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("Commande_finale.pdf", [
            "Attachment" => true
        ]);
    }

    /**
     * @Route("/{stay}/book", name="app_booking_stay", methods={"GET", "POST"})
     */
    public function create(
        Request $request,
        Stay $stay,
        BookingRepository $bookingRepository,
        StayRepository $stayRepository,
        MailerInterface $mailer
    ): Response {
        $booking = new Booking();
        $booking->setStay($stay);
        $booking->setBookingDate(new DateTime());

        $user = $this->getUser();
        $booking->setUser($user);

        $form = $this->createForm(BookingType::class, $booking);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $booking->setUser($user);
            $bookingRepository->add($booking);

            $stay->updateNbBooked();
            $stayRepository->add($stay);

            // Instantiate Dompdf with our options
            $dompdf = new Dompdf();
            $dompdf->setPaper('A4', 'portrait');

            // Retrieve the HTML generated in our twig file
            $html = $this->renderView(
                // templates/emails/registration.html.twig
                'emails/booking.html.twig',
                ['stay' => $booking->getStay(), 'booking' => $booking, 'user' => $user]
            );

            // Load HTML to Dompdf
            $dompdf->loadHtml($html);
            // Render the HTML as PDF
            $dompdf->render();

            $email = (new TemplatedEmail())
                ->from(new Address('mailersendj1@gmail.com', 'Trips.com'))
                ->to($booking->getStay()->getUsers()->getEmail())
                #$user->getEmail()
                ->subject('Your booking at Trips.com saved successfully')
                ->htmlTemplate('emails/booking.html.twig')
                ->context([
                    'stay' => $booking->getStay(),
                    'booking' => $booking,
                    'user' => $user
                ]);

            $mailer->send($email);

            // Output the generated PDF to Browser (force download)
            $dompdf->stream("booking.pdf", [
                "Attachment" => true
            ]);
        }

        return $this->render('booking/new.html.twig', [
            'booking' => $booking,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/new", name="app_booking_new", methods={"GET", "POST"})
     */
    public function new(Request $request, BookingRepository $bookingRepository, StayRepository $stayRepository): Response
    {
        $booking = new Booking();
        $form = $this->createForm(BookingType::class, $booking);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $bookingRepository->add($booking);
            $booking->getStay()->updateNbBooked();
            $stayRepository->add($booking->getStay());
            return $this->redirectToRoute('app_booking_index', [], Response::HTTP_SEE_OTHER);
            # todo this should redirect to  mybookings page
        }

        return $this->render('booking/new.html.twig', [
            'booking' => $booking,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_booking_show", methods={"GET"})
     */
    public function show(Booking $booking): Response
    {
        return $this->render('booking/show.html.twig', [
            'booking' => $booking,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_booking_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Booking $booking, BookingRepository $bookingRepository, StayRepository $stayRepository): Response
    {
        $form = $this->createForm(BookingType::class, $booking);
        $form->handleRequest($request);
        $previousStay = $bookingRepository->find($booking->getId())->getStay();

        if ($form->isSubmitted() && $form->isValid()) {
            $bookingRepository->add($booking);
            $stayRepository->add($previousStay);
            if ($previousStay->getId() !== $booking->getStay()->getId()) {
                $stayRepository->add($booking->getStay());
            }

            return $this->redirectToRoute('account_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('booking/edit.html.twig', [
            'booking' => $booking,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_booking_delete", methods={"POST"})
     */
    public function delete(
        Request $request,
        Booking $booking,
        BookingRepository $bookingRepository,
        StayRepository $stayRepository
    ): Response {
        if ($this->isCsrfTokenValid('delete' . $booking->getId(), $request->request->get('_token'))) {
            $stay = $booking->getStay();
            $bookingRepository->remove($booking);
            $stayRepository->add($stay);
        }

        return $this->redirectToRoute('account_index', [], Response::HTTP_SEE_OTHER);
    }



    /**
     * @Route("/booking/list")
     * @param BookingRepository $repo
     */
    public function getList(BookingRepository $repo, SerializerInterface $serializer): Response
    {

        $bookings = $repo->findAll();
        $json = $serializer->serialize(['booking' => $bookings], 'json', ['groups' => ['bookings1']]);


        //return new JsonResponse($json);

        return $this->json(['booking' => $bookings], Response::HTTP_OK, [], [
            'groups' => ['bookings1']
        ]);
    }


    /**
     * @Route("/booking/ajouter" , name="booking_ajouter" ,  methods={"GET", "POST"}, requirements={"id":"\d+"})
     */
    public function ajouter(SerializerInterface $serializer, Request $request, StayRepository $stayRepository, UserRepository $userRepository)
    {

        $booking = new Booking();
        $bookingDate = $request->query->get('bookingDate');
        $firstDate = $request->query->get('firstDate');
        $endDate = $request->query->get('endDate');
        $stayId = $request->query->get('stayId');
        $usersId = $request->query->get('usersId');
        $stay = $stayRepository->findOneById($stayId);
        //dd($stay);
        //  $datedebut=$request->query->get('dateDebut');
        // $datefin=$request->query->get('dateFin');
        $em = $this->getDoctrine()->getManager();
        $booking->setBookingDate(new \DateTime($bookingDate));
        $booking->setFirstDate(new \DateTime($firstDate));
        $booking->setEndDate(new \DateTime($endDate));
        $booking->setStay($stay);
        $booking->setUser($userRepository->findOneById($usersId));


        $em->persist($booking);
        $em->flush();
        // $serializer = new Serializer([new ObjectNormalizer()]);
        // $formatted = $serializer->normalize($booking, 'json', ['groups' => ['bookings1']]);
        // return new JsonResponse($formatted);
        return $this->json(['booking' => $booking], Response::HTTP_OK, [], [
            'groups' => ['bookings1']
        ]);
        // $json = $serializer->serialize(
        //     $booking,
        //     'json',
        //     ['groups' => ['bookings1' /* if you add "user_detail" here you get circular reference */]]
        // );
        // return new JsonResponse($json);
    }

    /**
     * @Route("/booking/supprimer", name="supprimer_booking")
     */
    public function supprimer(Request $request, BookingRepository $repo): Response
    {

        $id = $request->get("id");
        $em = $this->getDoctrine()->getManager();

        $id =   $repo->find($id);

        if ($id != null) {
            $em->remove($id);
            $em->flush();
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize("votre reservation a été annulé avec succes  ");
            return new JsonResponse($formatted);
        }

        return  new JsonResponse("Id Invalide");
    }

    /**
     * @Route("/booking/modifier/{id}" , name="booking_modifier" ,  methods={"GET", "POST"}, requirements={"id":"\d+"})
     */
    public function modifier(SerializerInterface $serializer, Request $request, StayRepository $stayRepository, UserRepository $userRepository, BookingRepository $repo, $id)
    {

        $booking = $repo->findOneById($id);
        $bookingDate = $request->query->get('bookingDate');
        $firstDate = $request->query->get('firstDate');
        $endDate = $request->query->get('endDate');
        $stayId = $request->query->get('stayId');
        $usersId = $request->query->get('usersId');

        //  $datedebut=$request->query->get('dateDebut');
        // $datefin=$request->query->get('dateFin');
        $em = $this->getDoctrine()->getManager();
        $booking->setBookingDate(new \DateTime($bookingDate));
        $booking->setFirstDate(new \DateTime($firstDate));
        $booking->setEndDate(new \DateTime($endDate));
        $booking->setStay($stayRepository->findOneById($stayId));
        $booking->setUser($userRepository->findOneById($usersId));


        $em->persist($booking);
        $em->flush();
        $json = $serializer->serialize(
            $booking,
            'json',
            ['groups' => ['booking' /* if you add "user_detail" here you get circular reference */]]
        );
        return new JsonResponse($json);
    }
}
