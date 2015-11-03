<?php

namespace scipper\Nerdyknife;

/**
 * 
 * @author Steffen Kowalski <sk@traiwi.de>
 *
 * @since 03.11.2015
 * @namespace scipper\Nerdyknife
 * @package scipper\Nerdyknife
 *
 */
class MathFeature {

	/**
	 * 
	 * @param float $value
	 * @param float $min
	 * @param float $max
	 * @return float
	 */
	public static function getPercentFromRange($value, $min, $max) {
		return (float) 100 - ((100 / ($max - $min)) * ($max - $value));
	}
	
}

?>