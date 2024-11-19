<?php

use App\Models\Requirement;
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
        Schema::create('requirements', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->boolean('requires_document')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });

        Requirement::insert([
            [
                'description' => 'Mínimo 3 años de experiencia en diseño eléctrico.',
                'requires_document' => true,
            ],
            [
                'description' => 'Conocimiento en software de diseño (AutoCAD, ETAP).',
                'requires_document' => true,
            ],
            [
                'description' => 'Capacidad para trabajar en equipo y bajo presión.',
                'requires_document' => false,
            ],

            [
                'description' => 'Título técnico en Mantenimiento Industrial, Electricidad o similar.',
                'requires_document' => true,
            ],
            [
                'description' => 'Experiencia mínima de 2 años en mantenimiento eléctrico.',
                'requires_document' => true,
            ],
            [
                'description' => 'Conocimiento de normativas de seguridad laboral.',
                'requires_document' => true,
            ],
            [
                'description' => 'Habilidades para resolver problemas y atención al detalle.',
                'requires_document' => false,
            ],

            [
                'description' => 'Título en Ingeniería de Software o campo relacionado.',
                'requires_document' => true,
            ],
            [
                'description' => 'Experiencia en lenguajes de programación como Java, Python o JavaScript.',
                'requires_document' => true,
            ],
            [
                'description' => 'Conocimiento de bases de datos SQL y NoSQL.',
                'requires_document' => true,
            ],

            [
                'description' => 'Título en Psicología, Recursos Humanos o campo relacionado.',
                'requires_document' => true,
            ],
            [
                'description' => 'Experiencia previa en reclutamiento y selección.',
                'requires_document' => true,
            ],
            [
                'description' => 'Habilidades de comunicación y negociación.',
                'requires_document' => false,
            ],

            [
                'description' => 'Título en Marketing, Comunicación o campo relacionado.',
                'requires_document' => true,
            ],
            [
                'description' => 'Experiencia en herramientas de marketing digital y análisis de datos.',
                'requires_document' => true,
            ],
            [
                'description' => 'Creatividad y habilidades de comunicación.',
                'requires_document' => false,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requirements');
    }
};
