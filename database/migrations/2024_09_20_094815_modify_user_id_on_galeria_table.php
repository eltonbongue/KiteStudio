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
        Schema::table('galeria', function (Blueprint $table) {
           
                // Remove a chave estrangeira existente primeiro
                $table->dropForeign(['user_id']);
    
                // Recria a chave estrangeira com onDelete('cascade') ou onDelete('set null')
                $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade'); // ou onDelete('set null') se quiser deixar o campo nulo
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('galeria', function (Blueprint $table) {
            // Reverter a mudança caso o rollback seja executado
            $table->dropForeign(['user_id']);

            // Recriar a chave estrangeira original (sem onDelete)
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }
};
