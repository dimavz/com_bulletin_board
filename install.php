<?php 
defined('_JEXEC') or die;

class com_bulletin_boardInstallerScript{
	
	// Constructor
	
	//public function __construct(JAdapterInstance $adapter);
	
	
	public function preflight($route, JAdapterInstance $adapter){
		echo JText::_('COM_BULLETINBOARD_PREFLIGHT_STR');
	}
	
	public function postflight($route, JAdapterInstance $adapter){
		echo JText::_('COM_BULLETINBOARD_POSTFLIGHT_STR');
	}
	
	public function install(JAdapterInstance $adapter){
		echo JText::_('COM_BULLETINBOARD_INSTALL_STR');
	}
	
	public function update(JAdapterInstance $adapter){
		echo JText::_('COM_BULLETINBOARD_UPDATE_STR');
	}
	
	public function uninstall(JAdapterInstance $adapter){
		echo JText::_('COM_BULLETINBOARD_UNINSTALL_STR');
	}
}
?>