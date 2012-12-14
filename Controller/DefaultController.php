<?php

namespace NewMail\CalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
    		
    	//test
        	
        return $this->render('NewMailCalendarBundle:Default:index.html.twig', array('name' => $name));
    }
}
