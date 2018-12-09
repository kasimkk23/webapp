<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class PostsTest extends TestCase
{
    /**
     * Testing upload file
     *
     * @return void
     */
    public function testFileUpload()
    {
        $post = factory(\App\Post::class)->make();
        //dd($post);
        $post->uploadFile(UploadedFile::fake()->image('avatar.jpg'));
        Storage::disk('local')->assertExists('public/'.$post->cover_image);
    }

    public function testNoFileUpload()
    {
        $post = factory(\App\Post::class)->make();
        $post->uploadFile(null);
        $this->assertEquals($post->cover_image, 'cover_images/noimage.png');
    }
}