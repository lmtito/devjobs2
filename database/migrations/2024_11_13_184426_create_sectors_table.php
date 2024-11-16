<?php

use App\Models\Sector;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sectors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Sector::insert([
            [
                'name' => 'Electricidad',
                'description' => 'Sector de Electricidad',
            ],
            [
                'name' => 'Mantenimiento',
                'description' => 'Sector de Mantenimiento',
            ],
            [
                'name' => 'Instalación Sanitaria',
                'description' => 'Sector de Instalación Sanitaria',
            ],
            [
                'name' => 'Sistemas',
                'description' => 'Sector de Sistemas',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sectors');
    }
};
