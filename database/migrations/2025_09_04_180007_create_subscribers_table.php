<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subscribers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // $table->string('session_id');
            // $table->integer('page_views');
            // $table->decimal('conversion_rate', 5, 2);
            // $table->boolean('is_mobile');
            // $table->json('meta_data')->nullable();

            $table->string('name');
            $table->string('designation');
            $table->string('profile_picture');
            $table->string('company_name');
            $table->string('company_email');
            $table->string('linkedin_profile');
            $table->string('login_method');
            $table->string('publisher_source');
            $table->string('industry');
            $table->string('signup_date');
            $table->integer('articles_read');
            $table->string('total_time_spend');
            $table->string('whitepapers');
            $table->json('top_categories_engaged')->nullable();
            $table->json('top_categories_engaged_percentage')->nullable();
            $table->string('device_name');
            $table->string('browser');
            $table->string('location');
            $table->string('last_login');
            $table->string('session_count');
            $table->integer('enagagement_score');
            $table->json('recently_viewed')->nullable();
            $table->json('smart_recommendations')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscribers');
    }
};
