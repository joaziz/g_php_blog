<?php

use App\Models\Article;
use Illuminate\Database\Seeder;

class Articles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//        $table->string("title");
//        $table->text("body");
//        $table->text("image")->nullable();
//        $table->string("tag")->nullable();
//        $table->date("date")->nullable();
//        $table->integer("user_id");

        $data = [];
        $facker = \Faker\Factory::create();
        for ($I = 0; $I < 2000; $I++) {
            $data[] = [
                "title" => $facker->realText(100),
                "body" => $facker->realText(1500),
                "image" => $facker->imageUrl(),
                "tag" => $facker->randomElement(["sport","tech","politc","zoology"]),
                "date" => date("Y-m-d"),
                "user_id" => 1,
            ];
        }


        Article::insert($data);


    }
}
