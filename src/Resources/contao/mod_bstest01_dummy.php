<?php

namespace LeadingSystems\Bstest01;

class mod_bstest01_dummy extends \Module {
	public function generate() {
		if (TL_MODE == 'BE') {
			$objTemplate = new \BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### BSTEST01 DUMMY MODULE ###';
			return $objTemplate->parse();
		}
		return parent::generate();
	}
	
	public function compile() {
        $this->strTemplate = 'mod_bstest01_dummy';
        $this->Template = new \FrontendTemplate($this->strTemplate);
	}
}