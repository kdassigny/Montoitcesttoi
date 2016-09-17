<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EspecesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EspecesTable Test Case
 */
class EspecesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EspecesTable
     */
    public $Especes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.especes',
        'app.animals',
        'app.categories',
        'app.addresses',
        'app.partners',
        'app.users',
        'app.images'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Especes') ? [] : ['className' => 'App\Model\Table\EspecesTable'];
        $this->Especes = TableRegistry::get('Especes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Especes);

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
}
