<?php

/**
 * @author shaunl
 * @created 28/02/2015 17:51
 * @copyright 2014 Shaun Lawless
 */
class BaseTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers Shaunl\FiftyShades\Controller\Base::index
     */
    public function index()
    {
        $baseController = new Shaunl\FiftyShades\Controller\Base;

        $this->assertSame('Under Construction', $baseController->index());
    }
}
