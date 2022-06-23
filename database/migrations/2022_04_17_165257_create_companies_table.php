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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->unique(); //nombre empresa
            $table->string('company_email')->nullable(); //email empresa
            $table->string('company_number')->nullable(); //email empresa
            $table->string('company_address')->unique()->nullable(); //direccion empresa
            $table->string('company_address_two')->nullable(); //direccion 2 empresa
            $table->string('company_code')->unique()->nullable(); //codigo postal empresa
            $table->string('company_country')->nullable(); //email empresa
            $table->string('company_state')->nullable(); //email empresa
            $table->string('company_city')->nullable(); //email empresa
            $table->string('company_web')->unique()->nullable(); //pagina web empresa
            $table->string('company_url_logo')->nullable(); //nombre empresa
            $table->string('company_nid')->nullable(); //Rut o numero unico de identificacion empresa
            $table->string('company_politics')->nullable()->nullable(); //aceptacion politicas empresa
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
        Schema::dropIfExists('companies');
    }
};
