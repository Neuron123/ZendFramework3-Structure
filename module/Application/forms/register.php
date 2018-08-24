<?php

class Application_Form_Register extends Zend_Form

{

	public function init(){
		$this->addElement('text','email');
		$this->addElement('text','login');
		$this->addElement('password','password');
		$this->addElement('submit','Save');
	}
	/**
	<form action="page.php" method="post">
	<input type="text" name="blah"/>
	</form>
	**/
}

?>