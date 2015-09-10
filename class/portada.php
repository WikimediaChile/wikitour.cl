<?php

class portada{

    public static function now(\Base $fat){
        echo self::contest($fat->get('YEAR'));
        return $fat;
    }

    public static function year(\Base $fat){
        $year = (int)$fat->get('PARAMS.year');
        if(!in_array($year, $fat->get('YEARS'))){
            $year = $fat->get('YEAR');
        }
        echo self::contest($year);
    }

    private static function contest($year){
        return \template::instance()->render($year.'/index.html');
    }



}
