<?php

namespace tests\Lib;

use Lib\stringFormatter;

class stringFormatterTest extends \PHPUnit_Framework_TestCase{
	
	public function testPrefix(){
		$stringFormatter = new StringFormatter();
		$result = $stringFormatter->prefix('abc','def');

		$this->assertSame($result,'abcdef');
	}

	public function testSuffix(){
		$stringFormatter = new StringFormatter();
		$result = $stringFormatter->suffix('abc','def');

		$this->assertSame($result,'defabc');
	}

	public function testToCamelCase(){
		$stringFormatter = new StringFormatter();
		$result = $stringFormatter->toCamelCase('abc','def');

		$this->assertSame($result,'abcDef');
	}

	public function testConcatString(){
		$stringFormatter = new StringFormatter();
		$result = $stringFormatter->concatString('abc','def');

		$this->assertSame($result,'abcdef');
	}

	public function testPrefixFull(){
		$stringFormatter = new StringFormatter();
		$result = $stringFormatter->prefix('abc','def',true);

		$this->assertSame($result,'abcDef');
	}

	public function testSuffixFull(){
		$stringFormatter = new StringFormatter();
		$result = $stringFormatter->suffix('abc','def',true);

		$this->assertSame($result,'defAbc');
	}
}