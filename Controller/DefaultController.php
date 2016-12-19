<?php

namespace Elephantly\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Elephantly\UserBundle\Entity\User;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ElephantlyUserBundle:Default:index.html.twig', array('name' => $name));
    }

    public function editAction()
    {
        $user = new User();

        $factory = $this->get('security.encoder_factory');
        $encoder = $factory->getEncoder($user);
        $password = $encoder->encodePassword('babar', $user->getSalt());
        $user->setPassword($password);
        $user->setEmail('babar@babar.com');
        $user->setUsername('babar');
        $user->setRoles(array('ROLE_SUPER_ADMIN'));

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        // \Doctrine\Common\Util\Debug::dump($user);exit;
        $em->flush();
        exit;
    }
}
