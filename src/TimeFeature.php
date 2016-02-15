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
		if($second > 0) {
			$minutes += 100 / ((100 / 60) * $second);
		}
		
		return (float) $minutes;
	}

	/**
	 * 
	 * @param \DateTime $date1
	 * @param \DateTime $date2
	 */
	public static function datediffInWeeks(\DateTime $date1, \DateTime $date2) {
	    if($date1->getTimestamp() > $date2->getTimestamp()) {
	    	return self::datediffInWeeks($date2, $date1);
	    }
	    
	    return floor($date1->diff($date2)->days / 7);
	}
	
	/**
	 * 
	 * @param string $week
	 * @param string $year
	 * @return NULL[]|\DateTime[]
	 */
	public function getStartAndEndDate($week, $year) {
		$range = array(
			"start" => NULL,
			"end" => NULL
		);
		
		$date = new \DateTime();
		$date->setISODate($year, $week);
		
		$range["start"] = new \DateTime($date->format("d.m.Y"));
		$date->modify("+6 days");
		$range["end"] = new \DateTime($date->format("d.m.Y"));
		
		return $range;
	}
	
}

?>