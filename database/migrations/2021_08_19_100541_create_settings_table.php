<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('privacy_policy')->nullable();
            $table->string('app_fcm_key')->nullable();
            $table->string('status_approve')->nullable();
            $table->string('allow_users_vdo')->nullable();
            $table->string('allow_users_img')->nullable();
            $table->string('allow_users_gif')->nullable();
            $table->string('allow_users_ytb')->nullable();
            $table->string('allow_users_qts')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
