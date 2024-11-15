<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeDatabaseNotificationIdTypeInConsultationFormsTable extends Migration
{
    public function up()
    {
        Schema::table('consultation_forms', function (Blueprint $table) {
            $table->char('database_notification_id', 36)->nullable()->change(); // Change to CHAR(36) for UUIDs
        });
    }

    public function down()
    {
        Schema::table('consultation_forms', function (Blueprint $table) {
            $table->bigInteger('database_notification_id')->unsigned()->nullable()->change(); // Revert to bigint if necessary
        });
    }
}
