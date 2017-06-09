<?php
class SampleTest extends WP_UnitTestCase {
	function testSample() {
		$this->assertTrue( 'B4ST' == wp_get_theme() );
		//$this->assertTrue( is_plugin_active('your-plugin/your-plugin.php') );
	}
}