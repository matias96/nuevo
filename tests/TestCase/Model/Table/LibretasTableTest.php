<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LibretasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LibretasTable Test Case
 */
class LibretasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LibretasTable
     */
    public $Libretas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.libretas',
        'app.carreras',
        'app.materias',
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
        $config = TableRegistry::exists('Libretas') ? [] : ['className' => LibretasTable::class];
        $this->Libretas = TableRegistry::get('Libretas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Libretas);

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
