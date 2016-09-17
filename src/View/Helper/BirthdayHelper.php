<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\I18n\Time;

class BirthdayHelper extends Helper
{
    public function birthdayEdit($date)
    {
        $then = Time($date);
        $diff = $then->diff(Time::now());

        echo $diff->format("%y year %m month %d day\n");
    }
}