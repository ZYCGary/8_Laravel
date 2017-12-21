<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    public function up()
    {
        $categories = [
            [
                'name'        => 'Share',
                'description' => 'Share creation，share ideas',
            ],
            [
                'name'        => 'Tutorial',
                'description' => 'Knowledge and skills',
            ],
            [
                'name'        => 'Q&A',
                'description' => 'Be friendly, help each other',
            ],
            [
                'name'        => 'Announcement',
                'description' => 'Site announcement',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    public function down()
    {
        DB::table('categories')->truncate();
    }
}