<?php

namespace App\Models;

use CodeIgniter\Model;

class ExpensesModel extends Model
{
    protected $table      = 'expenses';
    protected $primaryKey = 'id';
    

    public function read()
    {
        return $this->findAll(); 
    }
 /*    public function read()
    {
        $db      = \Config\Database::connect();
        $query = $db->query("SELECT expenses.id, epenses_categories.name, expenses.name, expenses.value, expenses.created_date, expenses.planed, expenses.edition_date FROM expenses JOIN epenses_categories ON epenses_categories.id = expenses.category_id;");

        return $query->;
 
    } */
    public function create($params)
    {
        return $this->findAll(); 
    }
}
