<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HostFamiliesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HostFamiliesTable Test Case
 */
class HostFamiliesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HostFamiliesTable
     */
    public $HostFamilies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.host_families',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('HostFamilies') ? [] : ['className' => 'App\Model\Table\HostFamiliesTable'];
        $this->HostFamilies = TableRegistry::get('HostFamilies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HostFamilies);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
