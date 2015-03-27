<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }


    /* A */
    /**
    * @Route("/Actions.html", name="Actions")
    */
    public function  ActionsAction()
    {
        return $this->render('default/Actions.html.twig');
    }

    /* B */

    /* C */

    /* D */

    /* E */

    /* F */

    /* G */

    /* H */

    /* I */

    /* J */

    /* K */

    /* L */

    /* M */

    /* N */

    /* O */

    /* P */

    /* Q */

    /* R */

    /* S */

    /* T */

    /* U */

    /* V */

    /* W */

    /* X */

    /* Y */

    /* Z */

}
