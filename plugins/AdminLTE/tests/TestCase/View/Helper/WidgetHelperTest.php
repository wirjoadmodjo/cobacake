<?php
namespace AdminLTE\Test\TestCase\View\Helper;

use AdminLTE\View\Helper\WidgetHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * AdminLTE\View\Helper\WidgetHelper Test Case
 */
class WidgetHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \AdminLTE\View\Helper\WidgetHelper
     */
    public $Widget;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->Widget = new WidgetHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Widget);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
