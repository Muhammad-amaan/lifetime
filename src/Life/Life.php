<?php

namespace Life;


use DateTime;

class Life {

    public function now()
    {
        return date('Y-m-d H:i:s');
    }

    /*
     * =================================================================================
     * 0) IT WILL RETURN TIME DIFFERENCE BETWEEN TWO TIME
     * 1) START DATE
     * 2) END DATE
     * 3) OUTPUT ------------------ IT WILL RETURN TIME DIFFERENCE LIKE CALL DURATION
     *    03:22:00
     * =================================================================================
     */
    public function TimeDifference($start_date, $end_date, $format)
    {
        $start = $start_date;
        $end   = $end_date;

        $dateStart = new \DateTime($start);
        $dateEnd   = new \DateTime($end);

        $diff = $dateStart->diff($dateEnd);
        echo $diff->format($format);
        /* OUTPUT 03:22:00  */
    }

    /*
     * TIME PERIODS
     */
    public function DateRange()
    {
        $collection = [];

        $begin = new \DateTime( '2012-08-01' );
        $end = new \DateTime( '2012-08-31' );
        $end = $end->modify( '+1 day' );

        $interval = new \DateInterval('P1D');
        $daterange = new \DatePeriod($begin, $interval ,$end);

        foreach($daterange as $date){
            array_push($collection, $date->format("Y-m-d"));
        }
        return $collection;
    }

    /*===================================*
    | SET TIME                           |
    |===================================*/

    public function setTime($date, $timeString)
    {
        $date = new DateTime($date);

        $date->setTime($timeString, $date = null);
        return $date->format('Y-m-d H:i:s');
    }

}