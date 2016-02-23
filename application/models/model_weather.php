<?php

require '/util/simple_html_dom.php';

define('ZP', 'http://gismeteo.ua/city/daily/5093/');

class Model_Weather extends Model
{
    function get_data()
    {
        $html = file_get_html(ZP);

        $html->find('.higher');

        $header = $html->find('.header')[0]->plaintext;                // Погода
        $city = $html->find('.typeM')[0]->plaintext;                   // Город
        $temp = $html->find('.temp dd')[0]->plaintext;                 // Темпертура
        $cloudness = $html->find('.cloudness td')[0]->plaintext;       // Облачность
        $wind = $html->find('.wind dd')[0]->plaintext;                 // Ветер
        $bar = $html->find('div[title=Давление] dd')[0]->plaintext;    // Давление

        return array(
            'header' => $header,
            'city' => $city,
            'temp' => $temp,
            'cloudness' => $cloudness,
            'wind' => $wind,
            'bar' =>$bar);
    }
}