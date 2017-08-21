<?php 
defined('_JEXEC') or die;

class com_bulletin_boardInstallerScript{
	
	// Constructor
	
	public function __construct(JAdapterInstance $adapter);
	
	
	//public function preflight($route, JAdapterInstance $adapter);
	
	
	//public function postflight($route, JAdapterInstance $adapter);
	
	
	public function install(JAdapterInstance $adapter){
		echo "install extension";
	}
	
	
	//public function update(JAdapterInstance $adapter);
	
	//public function uninstall(JAdapterInstance $adapter);
}
?>