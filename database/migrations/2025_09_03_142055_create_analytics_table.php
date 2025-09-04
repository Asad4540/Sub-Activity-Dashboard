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
        Schema::create('analytics', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // $table->string('session_id');
            // $table->integer('page_views');
            // $table->decimal('conversion_rate', 5, 2);
            // $table->boolean('is_mobile');
            // $table->json('meta_data')->nullable();

            $table->integer('total_subscribers');
            $table->integer('active_subscribers');
            $table->integer('new_registrations');
            $table->integer('downloads');
            $table->decimal('conversion_rate', 5, 2);

            $table->decimal('hot_percentage', 5, 2);
            $table->integer('hot_score');

            $table->decimal('warm_percentage', 5, 2);
            $table->integer('warm_score');

            $table->decimal('cold_percentage', 5, 2);
            $table->integer('cold_score');

            $table->json('top_interest_category_db')->nullable();
            $table->json('top_interest_percentage')->nullable();
            $table->json('top_interest_category_an')->nullable();
            $table->json('top_interest_count_an')->nullable();

            $table->json('engagement_metrics_articles')->nullable();
            $table->json('engagement_metrics_timespent')->nullable();
            $table->json('engagement_metrics_downloads')->nullable();
            $table->json('engagement_metrics_repeat')->nullable();

            $table->integer('conversion_view_users');
            $table->integer('conversion_engage_users');
            $table->integer('conversion_interact_users');
            $table->integer('conversion_convert_users');

            $table->decimal('conversion_view_percent', 5, 2);
            $table->decimal('conversion_engage_percent', 5, 2);
            $table->decimal('conversion_interact', 5, 2);
            $table->decimal('conversion_convert_percent', 5, 2);

            $table->json('audience_growth')->nullable();

            $table->integer('direct_traffic_count');
            $table->integer('organic_traffic_count');
            $table->integer('social_traffic_count');
            $table->integer('refferal_traffic_count');

            $table->decimal('direct_traffic_percentage', 5, 2);
            $table->decimal('organic_traffic_percentage', 5, 2);
            $table->decimal('social_traffic_percentage', 5, 2);
            $table->decimal('refferal_traffic_percentage', 5, 2);

            $table->json('recent_activity')->nullable();

            $table->integer('engagement_rate');
            $table->integer('content_popularity');
            $table->integer('user_retention');
            $table->integer('pm_converison_rate');

            $table->integer('login_activities');
            $table->integer('content_views');
            $table->integer('downloads_activities');
            $table->integer('event_registration');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analytics');
    }
};
