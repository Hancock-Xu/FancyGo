<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('user_id')->unsigned();
            
            $table->string('name',50)->index();
            /*
             * 公司营业执照名字
             */
            $table->string('business_license_name',50)->unique();
            $table->string('resume_email',50);
            $table->string('logo_url')->nullable()->default(null);
            $table->string('website')->nullable()->default(null);
            /**
             * 公司营业执照或者其他证明文件
             */
            $table->string('certificate_url')->nullable()->default(null);

            $table->text('description');
            $table->string('scale');
            $table->string('location')->index();
            $table->string('industry', 50)->index();
            $table->string('email', 50);
            $table->string('phone_number',11);
            $table->timestamp('published_at')->nullable()->index();
        });
        
        Schema::table('companies', function (Blueprint $table){

            /*
             * user外键
             */

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('companies');
    }
}
