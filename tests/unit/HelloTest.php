<?php

require_once(__DIR__ . '/../../app/models/HelloModel.php');

class HelloTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    public function testMe()
    {
        $helloModel = new \App\Models\HelloModel();
        $added = $helloModel->add(0.2,0.2);
        $this->assertTrue($added === 0.4);
        $this->assertFalse($helloModel->add(0.1, 0.7) === 0.8);

    }

}