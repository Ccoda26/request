<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PagesController
{
    /**
     * @Route("/prenom", name="page_name")
     */

    public function name(Request $request){
       var_dump ($request->query->get('name'));
       var_dump ($request->query->get('age'));
       var_dump ($request->query->get('adress'));
        die;
    }

}