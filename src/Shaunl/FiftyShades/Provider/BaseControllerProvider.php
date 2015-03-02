<?php
/**
 * @author shaunl
 * @created 28/02/2015 17:47
 * @copyright 2014 Shaun Lawless
 */

namespace Shaunl\FiftyShades\Provider;

use Shaunl\FiftyShades\Controller\Base;
use Silex\Application;
use Silex\ControllerCollection;
use Silex\ControllerProviderInterface;
use Silex\ServiceProviderInterface;
use Symfony\Component\HttpFoundation\Response;

class BaseControllerProvider implements ServiceProviderInterface, ControllerProviderInterface
{
    /**
     * @param Application $app An Application instance
     *
     * @return ControllerCollection A ControllerCollection instance
     */
    public function connect(Application $app)
    {
        $this->register($app);
        $controller = $app['controllers_factory'];

        $controller->get('/', function() use ($app) {
            return new Response($app['base.controller']->index(), 200);
        });

        return $controller;
    }

    /**
     * @param Application $app An Application instance
     */
    public function register(Application $app)
    {
        $app['base.controller'] = new Base;
    }

    /**
     * @param Application $app An Application instance
     */
    public function boot(Application $app)
    {

    }
}
