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
            
            $table->string('company_name',50)->nullable()->index();
            /*
             * 公司营业执照名字
             */
            $table->string('business_license_name',50)->unique();
	        $table->string('company_email', 50);
	        $table->string('company_phone_number',14);
	        /**
	         * 公司营业执照或者其他证明文件
	         */
	        $table->string('certificate_url')->default(null);


            $table->string('logo_url')->nullable()->default(null);
            $table->string('website')->nullable()->default(null);


            $table->text('company_description')->nullable()->default(null);
            $table->enum('scale', ['< 15', '15~50', '50~150', '150~500', '500~2000' , '> 2000'])->nullable()->default(null)->index();
            $table->string('company_location', 30)->nullable()->default(null)->index();
	        $table->string('company_address', 200)->nullable()->default(null)->index();
            $table->string('company_industry', 50)->nullable()->default(null)->index();
	        $table->string('founder_time')->nullable()->default(null);

	        
	        $table->boolean('pass_email_verify')->default(false);
	        $table->boolean('complete_create')->default(false);
	        $table->boolean('pass_certificate_verify')->default(false);
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
