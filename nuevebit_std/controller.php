<?php 

class NuevebitStdStartingPointPackage extends StartingPointPackage {

	protected $pkgHandle = 'nuevebit_std';
	
	public function getPackageName() {
		return t('9Bit Standard Starting Point');
	}
	
	public function getPackageDescription() {
		return t("Default starting point used in our sites. Includes standard page types (full, left_sidebar, right_sidebar), the 'Tags' attribute, the 'Greek Yogurth' theme and only a Home page without any content (text/images).");
	}

}
