<?php
namespace inaden\web;

use Inaden;
use inaden\test\TestCase;

class ApplicationTest extends TestCase
{

  protected function setUp()
  {
    parent::setUp();
  }

  protected function tearDown()
  {
    parent::tearDown();
  }

  // tests
  public function testInstance()
  {
    $this->assertTrue(class_exists('Inaden'));
    $this->assertInstanceOf('inaden\web\Application',Inaden::$app);
  }
  /**
   * @test
   */
  public function testDbInstance() {
    $this->assertInstanceOf('yii\db\Connection',Inaden::$app->db);
  }
}
