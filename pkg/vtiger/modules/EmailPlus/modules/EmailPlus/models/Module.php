<?php
class EmailPlus_Module_Model extends Vtiger_Module_Model {

	public function isQuickCreateSupported() {

		return false;
	}

	public function isQuickSearchEnabled() {

		return false;
	}

	public function checkIonCubeLoaded(){

		return extension_loaded('ionCube Loader');
	}

}
