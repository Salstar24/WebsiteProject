<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of Bananas
 *
 * @author getintotech
 */

class BananasController {
    /**
     * @Route("/bananas")
     */
    public function bananaAction() {
        $number = mt_rand(0, 100);
        
        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
    
}
