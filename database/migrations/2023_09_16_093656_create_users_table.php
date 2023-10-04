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
        Schema::create( 'users', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'name', 100 )->notnull();
            $table->string( 'email', 100 )->notnull()->unique();
            $table->string( 'phone', 50 )->notnull()->unique();
            $table->date( 'dob' )->notnull();
            $table->string( 'gender', 30 );
            $table->bigInteger( 'role_id' )->unsigned();
            $table->foreign( 'role_id' )->references( 'id' )->on( 'roles' );
            $table->timestamp( 'email_verified_at' )->nullable();
            $table->string( 'password' );
            $table->rememberToken();
            $table->timestamps();
        } );

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
