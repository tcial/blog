<?php
class Blog {
	public function run() {
		$this->loadConfig();
	}
}

$blog = new Blog();
$blog->run();
