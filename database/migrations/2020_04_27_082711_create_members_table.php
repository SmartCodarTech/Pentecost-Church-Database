<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('prefix');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename');
            $table->integer('age');
            $table->date('birthdate');
            $table->string('language');
            $table->string('gender');
            $table->string('nationality');
            $table->string('region');
            $table->string('hometown');
            $table->string('city');
            $table->string('marital_status');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('relative');
            $table->string('relative_contact');
            $table->string('role_in_church');
            $table->string('home_cell');
            $table->string('church_group');
            $table->string('church_session');
            $table->string('occupation');
            $table->string('photo');
            $table->boolean('status')->default(0);
            $table->softDeletes();

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
        Schema::dropIfExists('members');
    }
}
