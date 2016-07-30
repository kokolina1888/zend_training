<?php 

class a {
	public static function test(){
		static::foo();
		static::bar();
	}
	public static function foo(){
		echo __METHOD__ . ' called ' . PHP_EOL;
	}

	private static function bar(){
		echo __METHOD__ . ' called ' .PHP_EOL;
	}
}

class b extends a {

}

class c extends a {
	public static function foo(){
		echo __METHOD__ . ' called ' . PHP_EOL;
	}
}

a::test();

b::test();

c::test();