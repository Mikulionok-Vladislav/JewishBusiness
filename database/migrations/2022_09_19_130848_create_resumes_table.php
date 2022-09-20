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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('name', '255')->nullable(false);
            $table->string('email', '255')->nullable(false);
            $table->string('profession_title', '255')->nullable(false);
            $table->string('location', '255')->nullable(false);
            $table->string('web')->nullable(true);
            $table->string('pre_hour', '255')->nullable(true);
            $table->integer('age')->nullable(false);
            $table->string('personal_photo')->nullable(true);
            $table->string('degree', '255')->nullable(true);
            $table->string('field_of_study', '255')->nullable(true);
            $table->string('school', '255')->nullable(true);
            $table->timestamp('go_to_school_at')->nullable(true);
            $table->timestamp('entered_the_school_at')->nullable(true);
            $table->text('description_school')->nullable(true);
            $table->string('school_logo')->nullable(true);
            $table->string('company_name', '255')->nullable(true);
            $table->string('title', '255')->nullable(true);
            $table->timestamp('go_to_job_at')->nullable(true);
            $table->timestamp('leave_the_job_at')->nullable(true);
            $table->text('description_job')->nullable(true);
            $table->string('job_logo')->nullable(true);
            $table->string('skill_name', '255')->nullable(true);
            $table->string('percents', '255')->nullable(true);
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
        Schema::dropIfExists('resumes');
    }
};
