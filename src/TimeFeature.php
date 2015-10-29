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
class TimeFeature {

	/**
	 * Sums up the amount of minutes of a given timestring 
	 * in H:i:s format
	 * 
	 * @param string $time
	 * @return float
	 */
	public static function sumMinutes($time) {
		$minutes = 0.0;
		list($hour, $minute, $second) = explode(':', (string) $time);
		$minutes += $hour * 60;
		$minutes += $minute;
		$minutes += 100 / ((100 / 60) * $second);
		
		return (float) $minutes;
	}
	
}

?>