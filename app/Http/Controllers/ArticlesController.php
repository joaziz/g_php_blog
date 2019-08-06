<?php


namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\Customer;

class ArticlesController extends Controller
{

    public function create()
    {


        $cities = Customer::select("City")->pluck("City")->unique();


        $users = Customer::where("CustomerName", "like", "%" . request()->get("CustomerName") . "%");

        if (request()->get("City") != "")
            $users = $users->where("City", request()->get("City"));

        $users = $users->get();


        return view("customers", ["users" => $users, "cities" => $cities]);


    }

}
