<?php

namespace Life;


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
        return $diff;
        /* OUTPUT 03:22:00  */
    }

}