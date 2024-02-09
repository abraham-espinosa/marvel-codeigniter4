<?php
// CharactersModel

// Declare Model
namespace App\Models;

// Call Model Class from CodeIgniter
use CodeIgniter\Model;

// Extends Model Class into CharactersModel 
class CharactersModel extends Model {

    // Declaration values for DB
    protected $table      = 'characters';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['name', 'thumbnailPath'];

    // Get all fields from characters table
    public function getCharacters(){
        $Characters = $this->db->query("SELECT * FROM characters");
        return $Characters->getResult();
    }

    // Insert character into characters table
    public function insertCharacter($values){
        $Character = $this->db->table('characters');
        $Character->insert($values);
        return $this->db->insertID();
    }

    // Get a character by id
    public function getCharacterById($id){
        $Character = $this->db->table('characters');
        $Character->where('id',$id);
        return $Character->get()->getResultArray();
    }

    // Update a character by id
    public function updateCharacterById($values, $id){
        $Character = $this->db->table('characters');
        $Character->set($values);
        $Character->where('id',$id);
        return $Character->update();
    }

    // Delete a character by id
    public function deleteCharacterById($id){
        $Character = $this->db->table('characters');
        $Character->where('id',$id);
        return $Character->delete();
    }

    // Get all characters and filter them by name
    public function getCharactersByString($string){
        $Characters = $this->db->query("SELECT * FROM characters WHERE name LIKE '%$string%'");
        return $Characters->getResult();
    }

}