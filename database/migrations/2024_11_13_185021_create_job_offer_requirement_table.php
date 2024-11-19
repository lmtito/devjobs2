<?php

use Illuminate\Support\Facades\DB;
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
        Schema::create('job_offer_requirement', function (Blueprint $table) {
            $table->foreignId('job_offer_id')->constrained()->onDelete('cascade');
            $table->foreignId('requirement_id')->constrained()->onDelete('cascade');
            $table->primary(['job_offer_id', 'requirement_id']);
            $table->timestamps();
        });

        DB::table('job_offer_requirement')->insert([
            ['job_offer_id' => 1, 'requirement_id' => 1],
            ['job_offer_id' => 1, 'requirement_id' => 2],
            ['job_offer_id' => 1, 'requirement_id' => 3],
            ['job_offer_id' => 1, 'requirement_id' => 4],
            ['job_offer_id' => 2, 'requirement_id' => 5],
            ['job_offer_id' => 2, 'requirement_id' => 6],
            ['job_offer_id' => 2, 'requirement_id' => 7],
            ['job_offer_id' => 3, 'requirement_id' => 8],
            ['job_offer_id' => 3, 'requirement_id' => 9],
            ['job_offer_id' => 3, 'requirement_id' => 10],
            ['job_offer_id' => 4, 'requirement_id' => 11],
            ['job_offer_id' => 4, 'requirement_id' => 12],
            ['job_offer_id' => 4, 'requirement_id' => 13],
            ['job_offer_id' => 5, 'requirement_id' => 14],
            ['job_offer_id' => 5, 'requirement_id' => 15],
            ['job_offer_id' => 5, 'requirement_id' => 16],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_offer_requirement');
    }
};
