<?php

use App\Models\User;
use App\Models\Sector;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
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
            $table->foreignId('manager_id')->constrained('users')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });

        $managerId = User::create([
            'name' => 'Benja',
            'email' => 'benjhito112@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'manager',
        ])->id;

        Sector::insert([
            [
                'name' => 'Electricidad',
                'description' => 'Sector de Electricidad',
                'manager_id' => $managerId,
            ],
            [
                'name' => 'Mantenimiento',
                'description' => 'Sector de Mantenimiento',
                'manager_id' => $managerId,
            ],
            [
                'name' => 'Instalación Sanitaria',
                'description' => 'Sector de Instalación Sanitaria',
                'manager_id' => $managerId,
            ],
            [
                'name' => 'Tecnología de la Información (TI)',
                'description' => 'Sector de Tecnología de la Información (TI)',
                'manager_id' => $managerId,
            ],
            [
                'name' => 'Recursos Humanos',
                'description' => 'Sector de Recursos Humanos',
                'manager_id' => $managerId,
            ],
            [
                'name' => 'Marketing',
                'description' => 'Sector de Marketing',
                'manager_id' => $managerId,
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
