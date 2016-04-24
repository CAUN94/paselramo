<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateUnisTable extends Migration
{
/**
* @return void
*/
public function up()
{
Schema::create('unis', function (Blueprint $table) {

$table->increments('id');
$table->text('Nombre');
$table->text('Foto');
$table->timestamps();

});
}
/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::drop('unis');
}
}