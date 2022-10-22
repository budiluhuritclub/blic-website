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
        Schema::table('projects', function (Blueprint $table) {
            $table->foreign('category_project_id', 'fk_projects_to_category_projects')->references('id')->on('category_projects')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('user_id', 'fk_projects_to_users')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign('fk_projects_to_category_projects');
            $table->dropForeign('fk_projects_to_users');
        });
    }
};
