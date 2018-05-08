<?php 

class YourClassTest extends PHPUnit_Framework_TestCase{
	

  public function testIsThereAnySyntaxError(){
  	$var = new Redaced\Datomn\YourClass;
  	$this->assertTrue(is_object($var));
  	unset($var);
  }

  public function testMethod1(){
  	$var = new Redaced\Datomn\YourClass;
  	$this->assertTrue($var->method1("hey") == 'Hello World');
  	unset($var);
  }
  
}
