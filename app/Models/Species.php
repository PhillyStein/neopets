<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Species
{
    public static function all() {
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
        $species = self::all();

        foreach($species as $specie) {
            if($specie['id'] == $id) {
                return $specie;
            }
        }
    }
}
