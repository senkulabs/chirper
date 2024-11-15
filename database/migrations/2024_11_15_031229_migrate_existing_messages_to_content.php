<?php

use App\Models\Chirp;
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
        Chirp::query()->oldest()->eachById(function (Chirp $chirp) {
            $chirp->update([
                'content' => $chirp->message,
            ]);
        });

        if (Schema::hasColumn('chirps', 'message')) {
            Schema::dropColumns('chirps', 'message');
        }
    }
};
