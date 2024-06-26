<?php

namespace App\Http\Controllers\Frontend\News;

use App\Http\Controllers\Backend\BackendBaseController;
use App\Models\Backend\News\Blog;
use App\Models\Backend\News\BlogCategory;
use App\Traits\FrontendSearch;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class BlogController extends BackendBaseController
{
    use FrontendSearch;
    protected string $module        = 'frontend.';
    protected string $base_route    = 'frontend.blog.';
    protected string $view_path     = 'frontend.blog.';
    protected string $page          = 'Blog';
    protected string $folder_name   = 'blog';
    protected string $page_title, $page_method, $image_path;
    protected object $model;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model                = new Blog();
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $this->page_method      = 'index';
        $this->page_title       = 'All '.$this->page;
        $data                   = $this->getCommonData();
        $data['rows']           = $this->model->active()->descending()->paginate(6);

        if(!$data['rows']){
            abort(404);
        }
        return view($this->loadResource($this->view_path.'index'), compact('data'));
    }


    public function getCommonData(): array
    {
        $data['categories']     = BlogCategory::active()->descending()->has('blogs')->withCount('blogs')->get();
        $data['latest']         = $this->model->active()->descending()->limit(4)->get();

        return $data;
    }

    public function show($slug)
    {

        $this->page_method      = 'show';
        $data                   = $this->getCommonData();
        $data['row']            = $this->model->where('slug',$slug)->first();

        if(!$data['row']){
            abort(404);
        }

        $data['previous']       = $this->model->where('id', '<', $data['row']->id)->select('title','slug')->orderBy('id', 'desc')->first();
        $data['next']           = $this->model->where('id', '>', $data['row']->id)->select('title','slug')->orderBy('id', 'asc')->first();
        $this->page_title       =  $data['row']->title  ?? $this->page.' Details';

        return view($this->loadResource($this->view_path.'show'), compact('data'));
    }

    public function category($slug)
    {
        try {
            $this->page_method      = 'category';
            $data                   = $this->getCommonData();
            $data['category']       = BlogCategory::where('slug',$slug)->active()->first();
            $this->page_title       = $data['category']->title;
            $data['rows']           = $this->model->where('blog_category_id', $data['category']->id)->active()->descending()->paginate(6);
        } catch (\Exception $e) {
            abort(404);
        }

        return view($this->loadResource($this->view_path.'category'), compact('data'));
    }

}
