<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BooksTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_new_book_can_be_added()
    {
        $response = $this->post('books', [
            'title' => 'Book title 1',
            'description' => 'Book description 1',
        ]);
        $this->assertCount(1, Book::all());
        $response->assertRedirect('/books/1');
    }

    /** @test */
    public function test_title_is_required_to_save_a_book()
    {
        $response = $this->post('books', ['title' => '', 'description' => 'Description']);
        $response->assertSessionHasErrors('title');
    }

    /** @test */
    public function test_book_can_be_updated()
    {
        $this->post('books', [
            'title' => 'Default title',
            'description' => ''
        ]) ;

        // $this->assertEquals('Default title', Book::first()->title);
        // $this->assertEquals('', Book::first()->description);

        // $bookId = Book::first()->id;
        // $this->assertEquals(1, $bookId);

        // $response = $this->patch("books/{$bookId}", [
        //     'title' => 'New title',
        //     'description' => 'Some description'
        // ]);
        // $response->assertOk();
        // $book = Book::first();
        // $response->assertRedirect("books/$book->id");
        // $this->assertEquals('New title', $book->title);
        // $this->assertEquals('Some description', $book->description);
    }


    /** @test */
    public function test_a_book_can_be_deleted()
    {
        $this->withoutExceptionHandling();

        $this->post('books', [
            'title' => 'Tittle1',
            'description' => null
        ]);

        $this->assertCount(1, Book::all());

        $book = Book::first();
        $this->delete("books/$book->id");
        $this->assertCount(0, Book::all());
    }
}
