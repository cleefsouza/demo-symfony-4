<?php

namespace App\Controller;

use App\Entity\Carro;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ExemploController extends AbstractController {

    /**
     * @return Response
     * @Route("page-exemplo")
     */
    public function index() {
        return new Response(
            "<html><body><h3>Exemplo de Controller</h3></body></html>"
        );
    }

    /**
     * @return Response
     * @Route("page-twig")
     */
    public function pageTwig() {
        return $this->render("exemplo/exemplo.html.twig", [
            "alerta" => "Eu sou um alerta!"
        ]);
    }

    /**
     * @return Response
     * @Route("cadastro-carro")
     */
    public function addCarro () {
        $ge = $this->getDoctrine()->getManager(); // Chamando gerenciador de entidades do Doctrine
        $carro = new Carro();
        $carro->setModelo("Hyundai")->setNome("HB20");

        $ge->persist($carro); // Persistindo dados na base
        $ge->flush(); // Limpar e jogar para base

        return new Response($carro->getNome() . " salvo com sucesso!");
    }
}
