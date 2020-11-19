<?php

namespace App\Tests\Controller;

use App\Controller\DefaultController;
use PHPUnit\Framework\TestCase;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;

class DefaultControllerTest extends TestCase
{
    public function testIndexExist()
    {
        $defaultController = new DefaultController();
        $indexExists = method_exists($defaultController,'index');

        $this->assertEquals(true, $indexExists);
    }
}