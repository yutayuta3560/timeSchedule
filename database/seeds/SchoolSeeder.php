<?php

use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\School::create(array(
            'name' => 'ECCコンピュータ専門学校',
            'kana' => 'いーしーしーこんぴゅーたせんもんがっこう',
        ));

        \App\School::create(array(
            'name' => '縄手北中学校',
            'kana' => 'なわてきたちゅうがっこう',
        ));
    }
}
