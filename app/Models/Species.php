<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    public static function getAll() {
        return [
            [
                'id' => 1,
                'name' => 'Aysha',
                'description' => 'Fun-loving little thing.',
            ],
            [
                'id' => 2,
                'name' => 'Brodley',
                'description' => 'Looks mean, but isn\'t.',
            ]
            ];
    }

    public static function find($id) {
        $species = self::getAll();

        foreach($species as $specie) {
            if($specie['id'] == $id) {
                return $specie;
            }
        }
    }
}
