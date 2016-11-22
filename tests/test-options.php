<?php

class WPJSONSD_Options_Test extends WP_UnitTestCase {

	function test_sample() {
		// replace this with some actual testing code
		$this->assertTrue( true );
	}

	function test_class_exists() {
		$this->assertTrue( class_exists( 'WPJSONSD_Options') );
	}

	function test_class_access() {
		$this->assertTrue( wpjsonsd()->options instanceof WPJSONSD_Options );
	}
}
