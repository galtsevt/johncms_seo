<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Capsule\Manager as Capsule;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        $schema = Capsule::schema();
        $schema->create('aurora_seo', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('keywords')->nullable();
            $table->text('description')->nullable();
            $table->boolean('site_map')->nullable();
            $table->string('changefreq')->nullable();
            $table->string('priority')->nullable();
            $table->string('model_type');
            $table->unsignedBigInteger('model_id')->nullable();
            $table->index(['model_type', 'model_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        $schema = Capsule::schema();
        $schema->dropIfExists('aurora_seo');
    }
};
