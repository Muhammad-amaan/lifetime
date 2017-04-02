<?php

namespace Life;

use Time;

class Life extends Time  {

    public function now()
    {
        return date('Y-m-d H:i:s');
    }

}