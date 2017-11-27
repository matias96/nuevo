<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExamensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExamensTable Test Case
 */
class ExamensTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ExamensTable
     */
    public $Examens;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.examens',
        'app.materias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Examens') ? [] : ['className' => ExamensTable::class];
        $this->Examens = TableRegistry::get('Examens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Examens);

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
