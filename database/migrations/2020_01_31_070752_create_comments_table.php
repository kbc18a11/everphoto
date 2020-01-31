
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateCommentsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("comments", function (Blueprint $table) {

						$table->increments('id');
						$table->integer('user_id')->nullable()->unsigned();
						$table->integer('article_id')->nullable()->unsigned();
						$table->string('sentence',191)->nullable();
						$table->timestamps();
						$table->softDeletes();
						$table->foreign("user_id")->references("id")->on("users");
						$table->foreign("article_id")->references("id")->on("articles");



						// ----------------------------------------------------
						// -- SELECT [comments]--
						// ----------------------------------------------------
						// $query = DB::table("comments")
						// ->leftJoin("users","users.id", "=", "comments.user_id")
						// ->leftJoin("articles","articles.id", "=", "comments.article_id")
						// ->get();
						// dd($query); //For checking



                });
            }

            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists("comments");
            }
        }
    