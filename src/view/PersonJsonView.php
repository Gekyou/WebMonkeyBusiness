<?php namespace view;

/**
 * Created by PhpStorm.
 * User: Cédric
 * Date: 08/04/2017
 * Time: 21:07
 */

use \model\Person;

class PersonJsonView
{

    public  function render(array $data) {
        $output = [];

        if(isset($data['Person'])){
            $person  = $data['Person'];
            $output = [
                'id' => $person->getId(),
                'naam' => $person->getGebruikerNaam(),
                'acheternaam' => $person->getGebruikerVoornaam()
            ];
        }

        return $output;
    }

}


