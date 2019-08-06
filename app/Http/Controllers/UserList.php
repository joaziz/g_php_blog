<?php

namespace App\Http\Controllers;


class UserList extends Controller
{


    public function any()
    {
        $users = [
            [
                "name" => "mohamed",
                "id" => "1",
                "age" => "30",
            ],
            [
                "name" => "ahmed",
                "id" => "1",
                "age" => "30",
            ],
            [
                "name" => "sara",
                "id" => "1",
                "age" => "30",
            ],
            [
                "name" => "fady",
                "id" => "1",
                "age" => "30",
            ]
        ];
        return view("users", ["users" => $users]);
    }
}




