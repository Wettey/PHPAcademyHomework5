<?php

namespace Extra;

class Prefix
{
    private $date;

    /**
     * @param mixed $date
     */
    public function setDate(): void
    {
        $this->date = date('d/m/Y');
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }
}

