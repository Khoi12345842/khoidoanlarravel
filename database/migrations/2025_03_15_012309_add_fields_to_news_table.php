<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('news', function (Blueprint $table) {
        $table->string('thumbnail')->nullable(); // Thêm ảnh đại diện
        $table->text('short_description')->nullable(); // Mô tả ngắn
        $table->string('slug')->unique(); // Thêm slug SEO
    });
}

public function down()
{
    Schema::table('news', function (Blueprint $table) {
        $table->dropColumn(['thumbnail', 'short_description', 'slug']);
    });
}

};
