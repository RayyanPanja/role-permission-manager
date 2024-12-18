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
        Schema::dropIfExists('permissions');
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->ulid();
            $table->foreignId("permission_group_id");
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('key')->comment("Could be a Route name or a Custom Key Which Can be used in a Policy/Composable Function");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
}