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
        Schema::table('managers', function (Blueprint $table) {
            $table->string('phone')->nullable()->comment('Контактный телефон');
            $table->string('social_links')->nullable()->comment('Ссылки на соцсети');
            $table->date('birth_date')->nullable()->comment('Дата рождения');
            $table->string('healthcare_experience')->nullable()->comment('Стаж работы в здравоохранении');
            $table->boolean('accepted_rules')->default(false)->comment('Согласие с Уставом и Правилами');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('managers', function (Blueprint $table) {
            $table->dropColumn([
                'phone',
                'social_links',
                'birth_date',
                'healthcare_experience',
                'accepted_rules'
            ]);
        });
    }
};
