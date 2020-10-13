<?php


namespace App\Controller;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;



class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function homeAction(){
        $results = $this->getDoctrine()->getRepository(Post::class)->testQuery();

        return $this->render('home/home.html.twig', [
            'results' => $results,
        ]);
    }
}