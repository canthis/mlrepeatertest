<?php namespace CanThis\MLRepeaterTest\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCanthisMlrepeatertestProducts extends Migration
{
    public function up()
    {
        Schema::create('canthis_mlrepeatertest_products', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->text('description_repeater')->nullable();
            $table->text('description_standalone')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('canthis_mlrepeatertest_products');
    }
}