<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\CharactersModel;

class Character extends Seeder
{   
    // Consume Marverl API - Characters 
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
