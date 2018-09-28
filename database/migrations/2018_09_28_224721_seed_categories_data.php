<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $categories = [
            [
                'name'        => '离散数学',
                'description' => '掌握处理离散结构的描述工具和方法',
            ],
            [
                'name'        => '数据结构',
                'description' => '品味算法之美',
            ],
            [
                'name'        => '线性代数',
                'description' => '向量、矩阵、行列式',
            ],
            [
                'name'        => '计算机网络',
                'description' => '物理层、数据链路层、网络层、运输层、应用层',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('categories')->truncate();
    }
}
