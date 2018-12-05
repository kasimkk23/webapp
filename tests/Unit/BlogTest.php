<?php

namespace Tests\Unit;

use Illuminate\Http\UploadedFile;
use Tests\TestCase;
use Illuminate\Support\Facades\Storage;
use Faker\Factory as Faker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Blog;

class BlogTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function addBlog()
    {
    	echo UploadedFile::fake()->image('file.jpg');
    	$faker = Faker::create();

      
        $blog = new Blog;
        $blog->title =$faker->word;
        $blog->description = $faker->text;

        $blog->save();
        $blog->upload_photo(UploadedFile::fake()->image('file.jpg'));

        
        Storage::disk()->assertExists($blog->photo);
    }
}

