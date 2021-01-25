<?php

namespace App\Models;
use Carbon\Carbon;
use DateTime;

Class Model {

    public $createdat;
    public $updatedat;

    public function setCreated()
    {

        if (!$this->createdat instanceof DateTime) {
            return new DateTime();
        }
        return $this->createdat;
    }

    public function createdat(){

        return $this->createdat;
    }

    public function setUpdated()
    {
        $this->updatedat = Carbon::parse($this->updatedat, 'Europe/Paris')->locale('fr_FR')->diffForHumans();

    }

    public function updatedat(){

        return $this->updatedat;
    }
}