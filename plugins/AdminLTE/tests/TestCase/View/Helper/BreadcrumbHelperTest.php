<?php
namespace AdminLTE\Test\TestCase\View\Helper;

use AdminLTE\View\Helper\BreadcrumbHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * AdminLTE\View\Helper\BreadcrumbHelper Test Case
 */
class BreadcrumbHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \AdminLTE\View\Helper\BreadcrumbHelper
     */
    public $Breadcrumb;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->Breadcrumb = new BreadcrumbHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Breadcrumb);

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
