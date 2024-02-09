<?php
// Declare Controller
namespace App\Controllers;
// Use CharactersModel 
use App\Models\CharactersModel;

// This is my Character Controller 
class Character extends BaseController
{
    // Get all characters from  characters table 
    public function getCharactersList()
    {
        $Character = new CharactersModel();
        $data = $Character->getCharacters();
        $response = session('response');
        $values = [
                        "data" => $data,
                        "response" => $response
                  ];
        return view('home',$values);
    }

    // Create a new character
    public function createCharacter(){
        $values = [
                "name" => $_POST['name'],
                "thumbnailPath" => $_POST['thumbnailPath']
        ];
        $Character = new CharactersModel();
        $response = $Character->insertCharacter($values);

        // Validate the insertCharacter response
        if ($response > 0) {
            return redirect()->to(base_url('/'))->with('response','created');
        }else{
            return redirect()->to(base_url('/'))->with('response','error');
        }
    }
 
    // Update character by id
    public function updateCharacterById(){
        $values = [
            "name" => $_POST['name'],
            "thumbnailPath" => $_POST['thumbnailPath']
        ];
        $id = $_POST['id'];
        $Character = new CharactersModel();
        $response = $Character->updateCharacterById($values,$id);
        // Validate the insertCharacter response
        if ($response) {
            return redirect()->to(base_url('/'))->with('response','updated');
        }else{
            return redirect()->to(base_url('/'))->with('response','error');
        }
    }

    // Get character by id
    public function getCharacterById($characterId){
        $id = ["id" => $characterId];
        $Character = new CharactersModel();
        $response = $Character->getCharacterById($id);

        $values  = ["values" => $response];
        return view('update',$values);
    }

    // Delete character by id
    public function deleteCharacterById($characterId){
        $Character = new CharactersModel();
        $id = ["id" => $characterId];
        $response = $Character->deleteCharacterById($id);
        if ($response) {
            return redirect()->to(base_url('/'))->with('response','deleted');
        }else{
            return redirect()->to(base_url('/'))->with('response','error');
        }
    }

    // Navigate to create view 
    public function createForm(){
        return view('create');
    }

    // Get characters and filter by name 
    public function getCharactersByString(){
        $string = $_POST['search'];
        $Character = new CharactersModel();
        $data = $Character->getCharactersByString($string);
        $response = session('response');
        $values = [
                        "data" => $data,
                        "response" => $response
                  ];
        return view('home',$values);  
    }
    
}
