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
                'name'        => '线性代数',
                'description' => '向量、矩阵、行列式',
            ],
            [
                'name'        => '离散数学',
                'description' => '掌握处理离散结构的描述工具和方法',
            ],
            [
                'name'        => '数据结构',
                'description' => '算法是程序的灵魂',
            ],
            [
                'name'        => '计算机网络',
                'description' => '物理层、数据链路层、网络层、运输层、应用层',
            ],
            [
                'name'        => '编程语言',
                'description' => '好记性不如烂键盘',
            ],
            [
                'name'        => '数据库',
                'description' => 'MySQL 、SQL Server、Oracle、Redis...',
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
