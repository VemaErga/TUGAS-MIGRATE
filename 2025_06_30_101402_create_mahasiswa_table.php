<?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateMahasiswaTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create('mahasiswa', function (Blueprint $table) {
                    $table->id(); 
                    $table->string('nim', 50)->unique(); 
                    $table->string('nama', 50); 
                    $table->string('prodi', 50); 
                    $table->timestamps(); 
                });
            }

            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists('mahasiswa');
            }
        };