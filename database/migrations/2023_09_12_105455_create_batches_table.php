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
        Schema::create( 'batches', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'batchNo', 30 );
            $table->bigInteger( 'teacher_id' )->unsigned();
            $table->foreign( 'teacher_id' )->references( 'id' )->on( 'teachers' );
            $table->timestamps();
            // DB::statement( 'ALTER TABLE batches AUTO_INCREMENT = 3300' );
        } );

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batches');
    }
};
