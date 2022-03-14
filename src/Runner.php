<?php

namespace src;

class Runner
{
    public static function run()
    {
        $pref = Preferences::getInstance();
        $pref->setProperty("name", "grin");

        unset($pref); // remove the reference

        $pref2 = Preferences::getInstance();
        print $pref2->getProperty("name") . "\n";
    }
}
