<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Page;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::paginate(10);
        return view('dashboard.pages.index')->with([
            'pages' => $pages,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create Page';
        $pageList = Page::lists('title', 'id');
        $currentPage = null;
        return view('dashboard.pages.create')->with([
            'title' => $title,
            'pageList' => $pageList,
            'currentPage' => $currentPage,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CategoryRequest $request)
    {
        $page = new Page;
        $page->title = $request->title;
        $page->slug = $request->slug;
        $page->description = $request->description;
        $page->parent = $request->parent;

        if($page->save()) {
            return redirect()
            ->back()
            ->with('flash_message', 'Page Published');
        }

        return redirect()
            ->back()
            ->withErrors()
            ->withInput();

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        if($page->delete()){
            return redirect()
            ->back()
            ->with('flash_message', 'Page Moved to Trash');
        }
    }

    public function forceDelete($id)
    {
        $page = Page::findOrFail($id);
        if($page->forceDelete()){
            return redirect()
            ->back()
            ->with('flash_message', 'Page Permanently Deleted');
        }
    }
}
