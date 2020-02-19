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
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('firstname');
            $table->string('middle');
            $table->string('lastname');
            $table->string('address');
            $table->bigInteger('zone_id');
            $table->string('city');
            $table->bigInteger('phonenumber')->unique();
            $table->string('email', 100)->unique();
            $table->timestamp('dateofbirth');
            $table->string('gender');
            $table->string('maritalstatus');
            $table->bigInteger('department_id');
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
