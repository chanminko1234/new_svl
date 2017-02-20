<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigrationSaveTheLibrary extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
           Schema::create('social_accounts', function (Blueprint $table) {
                $table->integer('user_id')->unsigned();
                $table->string('provider_user_id');
                $table->string('provider');
                $table->timestamps();

                $table->engine = 'InnoDB';
            }); //social_accounts

           Schema::create('super_admins', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->unsigned();
                $table->timestamps();

                $table->engine = 'InnoDB';
            });

           Schema::create('rv_books', function(Blueprint $table)
            {
                $table->increments('id');
                $table->string('name')->unique();
                $table->string('slug')->unique();
                $table->integer('author_id')->unsigned();
                $table->text('description');
                $table->string('review');
                $table->string('reviewer');
                $table->string('publish_name');
                $table->string('publish_add');
                $table->string('publish_contact');
                $table->string('img_name')->unique();
                $table->string('img_ext', 10);
                $table->timestamps();

                $table->engine = 'InnoDB';
            }); //marketing_images //latest_review_sliders

           Schema::create('book_cat', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->unique();
                $table->timestamps();

                $table->engine = 'InnoDB';
            }); //categories //resourcesCategoriesTable

           Schema::create('rc_items', function (Blueprint $table) {
               $table->increments('id');
               $table->string('name')->unique();
               $table->string('slug')->unique();
               $table->integer('cat_id')->unsigned();
               $table->string('img_name')->unique();
               $table->string('img_ext', 10);
               $table->text('download_link');
               $table->timestamps();

               $table->engine = 'InnoDB';
           }); //resource_center_images //

           Schema::create('rc_itm_cat', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->unique();
                $table->timestamps();

                $table->engine = 'InnoDB';
            });

           Schema::create('news', function (Blueprint $table) {
               $table->increments('id');
               $table->string('title')->unique();
               $table->string('slug');
               $table->text('description');
               $table->string('event_date');
               $table->string('event_time');
               $table->text('location');
               $table->string('contact');
               $table->string('img_name')->unique();
               $table->string('img_ext', 10);
               $table->timestamps();

               $table->engine = 'InnoDB';
           });//lates_news_sliders //latest_news

           Schema::create('libraries', function (Blueprint $table) {
               $table->increments('id');
               $table->string('name');
               $table->string('slug');
               $table->string('address');
               $table->string('ward');
               $table->string('location');
               $table->string('contact_no');
               $table->string('contact_name');
               $table->string('email');
               $table->string("facebook");
               $table->string('start_date');
               $table->text('description');
               $table->integer('township_id')->unsigned();
               $table->string('services');
               $table->string('img_name')->unique();
               $table->string('img_ext', 10);
               $table->timestamps();

               $table->engine = 'InnoDB';
           });//location images //library slider

            Schema::create('authors', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->timestamps();

                $table->engine = 'InnoDB';
            });

            Schema::create('townships', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->integer('state_id')->unsigned();
                $table->timestamps();

                $table->engine = 'InnoDB';
            }); //cities

            Schema::create('states', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->timestamps();

                $table->engine = 'InnoDB';
            });

        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('social_accounts');
            Schema::dropIfExists('rv_books');
            Schema::dropIfExists('categories');
            Schema::dropIfExists('rc_books');
            Schema::dropIfExists('news');
            Schema::dropIfExists('libraries');
            Schema::dropIfExists('authors');
            Schema::dropIfExists('townships');
            Schema::dropIfExists('states');
        }
}
