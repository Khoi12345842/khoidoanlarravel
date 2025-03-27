<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorMenuTable extends Migration
{


    public function up()
	{
		Schema::create('hor_menus', function(Blueprint $table)
		{
			$table->boolean('active')->default(1);
			$table->timestamps();
			$table->integer('id', true);
			$table->boolean('mtype')->comment('1: Tin bài, 2: Sản phẩm, 3: Link');
			$table->boolean('new_tab')->default(0);
			$table->integer('no')->default(0);
			$table->integer('parent_id')->nullable()->index('parent_id');
			$table->integer('relate_id');
			$table->string('title');
			$table->string('router')->nullable(); // Tên route
            $table->json('params')->nullable(); // Tham số truyền vào route
		});
	}
    public function down()
    {
        Schema::dropIfExists('menus');
    }
	public function parent()
    {
        return $this->belongsTo(HorMenu::class, 'parent_id');
    }

    // Quan hệ con
    public function children()
    {
        return $this->hasMany(HorMenu::class, 'parent_id')->orderBy('no', 'asc');
    }
}