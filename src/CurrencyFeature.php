<?php

namespace scipper\Nerdyknife;

/**
 * 
 * @author Steffen Kowalski <sk@traiwi.de>
 * 
 * @since 29.10.2015
 * @namespace scipper\Nerdyknife
 * @package scipper\Nerdyknife
 *
 */
class CurrencyFeature {
	
	public static function toEuro($number) {
		$return = " €";
		if(!is_integer($number) && !is_float($number)) {
			return "--,--" . $return;
		}
	}
	
}

?>