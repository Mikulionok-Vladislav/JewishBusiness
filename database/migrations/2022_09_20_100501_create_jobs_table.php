<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();


            $table->string('job_name', '255')->nullable(false);
            $table->string('company_name', '255')->nullable(false);
            $table->string('location', '255')->nullable(false);
            $table->string('name_employer', '255')->nullable(false);
            $table->string('schedule')->nullable(false);
            $table->integer('salary',)->nullable(false);
            $table->text('job_description')->nullable(false);
            $table->string('skills_for_this_job','255')->nullable(false);
            $table->text('how_to_apply')->nullable(false);
            $table->timestamp('when_add')->nullable(false);
            $table->string('job_photo')->nullable(true);
            $table->integer('employer_id')->nullable(false);
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
        Schema::dropIfExists('jobs');
    }
};
