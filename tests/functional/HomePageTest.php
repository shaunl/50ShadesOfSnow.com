<?php
/**
 * @author shaunl
 * @created 28/02/2015 11:16
 * @copyright 2014 Shaun Lawless
 */

use Silex\WebTestCase;

class HomePageTest extends WebTestCase
{
    /**
     * Creates the application.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    public function createApplication()
    {
        $app          = require __DIR__ . '/../../app/app.php';
        $app['debug'] = true;
        $app['exception_handler']->disable();

        return $app;
    }

    /**
     * @test
     */
    public function index()
    {
        $client  = $this->createClient();
        $client->request('GET', '/');

        $this->assertTrue($client->getResponse()->isOk());
    }
}
