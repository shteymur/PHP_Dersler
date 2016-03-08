

<?php

class site {

private $header;
private $footer;


public function addheader($header){
	$this->header=$header;
}	

public function addfooter($footer){
	$this->footer=$footer;
}
public function display($content, $title){
	global $page;

	include $this->header;
	   $page->display($content);
	include $this->footer;
}
}

?>