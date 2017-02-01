<?php

namespace tests\Lib;

use Lib\stringFormatter;

class stringFormatterTest extends \PHPUnit_Framework_TestCase{
	
	
	// Tests de prefix

	public function testPrefix(){

		//Initialise un nouvel objet StringFormatter
		$stringFormatter = new StringFormatter();

		//Éxécution de la fonction prefix avec les arguments 'abc' et 'def'
		$result = $stringFormatter->prefix('abc','def');

		//Vérification du résultat
		$this->assertSame($result,'abcdef');
	}

	public function testPrefixFull(){

		//Initialise un nouvel objet StringFormatter
		$stringFormatter = new StringFormatter();

		//Éxécution de la fonction prefix avec les arguments 'abc','def' et true
		$result = $stringFormatter->prefix('abc','def',true);

		//Vérification du résultat
		$this->assertSame($result,'abcDef');
	}


	//Tests de suffix

	public function testSuffix(){

		//initialise un nouvel objet StringFormatter
		$stringFormatter = new StringFormatter();

		//Éxécution de la fonction suffix avec les arguments 'abc' et 'def'
		$result = $stringFormatter->suffix('abc','def');

		//Vérification du résultat
		$this->assertSame($result,'defabc');
	}

	public function testSuffixFull(){

		//initialise un nouvel objet StringFormatter
		$stringFormatter = new StringFormatter();

		//Éxécution de la fonction suffix avec les arguments 'abc','def' et true
		$result = $stringFormatter->suffix('abc','def',true);

		//Vérification du résultat
		$this->assertSame($result,'defAbc');
	}


	//Test de toCamelCase

	public function testToCamelCase(){

		//initialise un nouvel objet StringFormatter
		$stringFormatter = new StringFormatter();

		//Éxécution de la fonction toCamelCase avec les arguments 'abc' et 'def'
		$result = $stringFormatter->toCamelCase('abc','def');

		//Vérification du résultat
		$this->assertSame($result,'abcDef');
	}


	//Test de concatString

	public function testConcatString(){

		//initialise un nouvel objet StringFormatter
		$stringFormatter = new StringFormatter();

		//Éxécution de la fonction concatString avec les arguments 'abc' et 'def'
		$result = $stringFormatter->concatString('abc','def');

		//Vérification du résultat
		$this->assertSame($result,'abcdef');
	}

}