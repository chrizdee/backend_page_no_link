<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

// change the palette
$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] = str_replace
(
	'type', 
	'type,no_link', 
	$GLOBALS['TL_DCA']['tl_page']['palettes']['regular']
);
$GLOBALS['TL_DCA']['tl_page']['palettes']['forward'] = str_replace
(
	'type', 
	'type,no_link', 
	$GLOBALS['TL_DCA']['tl_page']['palettes']['forward']
);
$GLOBALS['TL_DCA']['tl_page']['palettes']['redirect'] = str_replace
(
	'type', 
	'type,no_link', 
	$GLOBALS['TL_DCA']['tl_page']['palettes']['redirect']
);

// Add field configuration
$GLOBALS['TL_DCA']['tl_page']['fields']['no_link'] = array(
   'label'      => &$GLOBALS['TL_LANG']['tl_page']['no_link'],
   'exclude'   => true,
   'inputType'   => 'checkbox',
   'eval'   => array('tl_class'=>'w50')
);

?>