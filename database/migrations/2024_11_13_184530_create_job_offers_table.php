<?php

use App\Models\Sector;
use App\Models\JobOffer;
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
        Schema::create('job_offers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('short_description');
            $table->text('description')->nullable();
            $table->string('image');
            $table->text('benefits');
            $table->date('start_date');
            $table->date('end_date');
            $table->foreignId('sector_id')->constrained()->onDelete('cascade');
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });

        JobOffer::insert([
            [
                'title' => 'Ingeniero Eléctrico',
                'short_description' => 'Buscamos un ingeniero eléctrico con experiencia en diseño de sistemas de energía renovable.',
                'description' => 'Buscamos un ingeniero eléctrico altamente motivado para unirse a nuestro equipo de proyectos de energía renovable. Será el responsable del diseño, implementación y supervisión de sistemas eléctricos en instalaciones solares y eólicas.',
                'image' => 'images/mbr-1256x836.jpg',
                'benefits' => 'Salario competitivo y beneficios adicionales. Oportunidades de capacitación y desarrollo profesional. Un ambiente de trabajo colaborativo y dinámico.',
                'start_date' => now()->addDay(2),
                'end_date' => now()->addDay(15),
                'sector_id' => 1, //Sector::where('name', 'Electricidad')->first()->id,
                'is_active' => true,
                'is_featured' => true,
            ],
            [
                'title' => 'Técnico de Mantenimiento',
                'short_description' => 'Se busca técnico en mantenimiento para realizar reparaciones en equipos y sistemas industriales.',
                'description' => 'Estamos en búsqueda de un técnico de mantenimiento proactivo para asegurar el funcionamiento óptimo de nuestras instalaciones y equipos. Este rol implica realizar mantenimientos preventivos y correctivos en maquinaria eléctrica y sistemas de energía.',
                'image' => 'images/mbr-1256x834.jpg',
                'benefits' => 'Salario competitivo y prestaciones de ley. Oportunidades de crecimiento dentro de la empresa. Trabajo en un entorno que promueve la sostenibilidad y la innovación.',
                'start_date' => now()->addWeek(),
                'end_date' => now()->addMonth(),
                'sector_id' => 2,
                'is_active' => true,
                'is_featured' => true,
            ],
            [
                'title' => 'Desarrollador de Software',
                'short_description' => 'Buscamos un desarrollador de software con experiencia en aplicaciones web y móviles.',
                'description' => 'El candidato ideal debe tener habilidades en programación y contribuir al desarrollo de soluciones innovadoras para nuestros clientes. Trabajará en un entorno colaborativo, enfocándose en la mejora continua de nuestros productos.',
                'image' => 'images/developer.jpg',
                'benefits' => 'Un ambiente de trabajo flexible. Oportunidades de capacitación y desarrollo profesional. Un paquete de beneficios que incluye seguro de salud y días libres.',
                'start_date' => now()->addDay(4),
                'end_date' => now()->addWeek(2),
                'sector_id' => 4,
                'is_active' => true,
                'is_featured' => false,
            ],
            [
                'title' => 'Especialista en Selección de Personal',
                'short_description' => 'Se busca un especialista en selección de personal para gestionar procesos de contratación.',
                'description' => 'El candidato será responsable de atraer y seleccionar talento, así como de implementar estrategias de retención. Trabajará estrechamente con los gerentes de departamento para entender sus necesidades.',
                'image' => 'images/rrhh.jpg',
                'benefits' => 'Un ambiente de trabajo colaborativo. Oportunidades de desarrollo profesional.',
                'start_date' => now()->addDay(5),
                'end_date' => now()->addDay(20),
                'sector_id' => 5,
                'is_active' => true,
                'is_featured' => false,
            ],
            [
                'title' => 'Ejecutivo de Marketing Digital',
                'short_description' => 'Buscamos un ejecutivo de marketing digital para potenciar nuestra presencia en línea.',
                'description' => 'El candidato será responsable de diseñar y ejecutar campañas de marketing digital, incluyendo SEO, SEM y gestión de redes sociales. Colaborará con el equipo creativo para generar contenido atractivo.',
                'image' => 'images/marketing.jpg',
                'benefits' => 'Un ambiente de trabajo dinámico. Formación continua.',
                'start_date' => now()->addDay(10),
                'end_date' => now()->addWeek(3),
                'sector_id' => 6,
                'is_active' => true,
                'is_featured' => false,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_offers');
    }
};
