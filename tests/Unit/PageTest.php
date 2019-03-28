<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use \App\Page;

class PageTest extends TestCase
{
    use RefreshDatabase;

    public function testVisitHome()
    {
        $response = $this->get('/pages');
        $response->assertStatus(200);
    }

    public function testViewPage()
    {
        $page = Page::create(['title' => 'Test', 'content' => 'test content']);
        $response = $this->get('/pages/'.$page->id);
        $response->assertSeeText('test content');
    }

    public function testEditPage()
    {
        $page = Page::create(['title' => 'Test', 'content' => 'test content']);
        $response = $this->get('/pages/'.$page->id.'/edit');
        $response->assertSeeText('test content');
    }

    public function testCreatePage()
    {
        $response = $this->get('/pages/create');
        $response->assertSeeText('New Page');
    }

    public function testVisitHomeWithNoPages()
    {
        Page::truncate();
        $response = $this->get('/pages');
        $response->assertSeeText('No pages yet');
    }

}
