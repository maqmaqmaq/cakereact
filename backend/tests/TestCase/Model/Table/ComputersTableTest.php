<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComputersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComputersTable Test Case
 */
class ComputersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ComputersTable
     */
    public $Computers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.computers',
        'app.stores',
        'app.accounts',
        'app.distribiutors',
        'app.licenses',
        'app.new_licenses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Computers') ? [] : ['className' => 'App\Model\Table\ComputersTable'];
        $this->Computers = TableRegistry::get('Computers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Computers);

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
