<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->date("date");
            $table->time("start_time");
            $table->time("end_time");
            $table->unsignedBigInteger("id_room");
            $table->foreign("id_room")->references("id")->on("rooms");
            $table->unsignedBigInteger("id_user");
            $table->foreign("id_user")->references("id")->on("users");
            $table->integer("id")->unique("id");
            $table->primary(["id_room", "id_user", "date"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
