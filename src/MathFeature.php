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
	public static function getPercentFromRange($value, $min, $max, $decimals = 2) {
		if($min < $max) {
			$base = 100;
			$diff = $max - $min;
			$correction = 1;
		} else {
			$base = 0;
			$diff = $min - $max;
			$max = $min;
			$correction = -1;
		}
		if($diff <= 0) {
			return 0;
		}
		
		$v = $base - ((100 / $diff) * ($max - $value));
		return (float) number_format($v * $correction, $decimals);
	}
	
}

?>