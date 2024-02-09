<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\CharactersModel;

class Character extends Seeder
{   
    // Consume Marverl API - Characters 
    /*
        Seed to pupulate the character table with an initial set of data from the Marvel API.
        -Sign up at https://developer.marvel.com/documentation/getting_started to get an API key. 
        -See README.md file to learn more about the endpoint.
        -Replace the environment variables with your own.
            * $_ENV['MARVEL_TS'] (I used 1000)
            * $_ENV['MARVEL_API_KEY']
            * $_ENV['MARVEL_HASH']
    */ 
    public function run()
    {
        $json = file_get_contents("https://gateway.marvel.com/v1/public/characters?ts=".$_ENV['MARVEL_TS']."&apikey=".$_ENV['MARVEL_API_KEY']."&hash=".$_ENV['MARVEL_HASH']);
        $characters = json_decode($json);

        foreach ($characters->data->results as $value) {
            $object = new CharactersModel;
            $object->insert([
                "name" => $value->name,
                "thumbnailPath" => $value->thumbnail->path.'.jpg'
            ]);
            $this->db->insertID();
        }       
    }
}
