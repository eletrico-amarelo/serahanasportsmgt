<?php

class SiteController extends BaseController {


    public function __construct()
    {
        //updated: prevents re-login.
        $this->beforeFilter('guest', ['only' => ['getLogin']]);
        $this->beforeFilter('auth', ['only' => ['getLogout']]);
    }


    public function getIndex()
    {

        $homePosts = Post::orderBy('view_count', 'desc')->take(10)->get();
        $homePosts = Post::whereIn( 'ID', array( 18, 19, 20 ) )->get();
        $latestPosts = $this->getLatestPosts();
        $popularPosts = $this->getPopularPosts();
        $sidebarData = array('latestPosts' => $latestPosts, 'popularPosts' => $popularPosts );
		return View::make( 'public/home' )		->nest('main_view', 'public/main', compact( 'homePosts' ) )
                                                ->nest('side_view', 'public/side', compact( 'sidebarData' ) );
    }

    public function getWsf()
    {
        $latestPosts = $this->getLatestPosts();
        $popularPosts = $this->getPopularPosts();
        $sidebarData = array('latestPosts' => $latestPosts, 'popularPosts' => $popularPosts );
        return View::make( 'public/home' )      ->nest('main_view', 'public/wsf', compact( 'homePosts' ) )
                                                ->nest('side_view', 'public/side', compact( 'sidebarData' ) );
    }

    public function getPhotoVideo()
    {
        $posts = Post::where('post_type', '=', 'photo-video')->orderBy('post_date', 'desc')->get();
        $sidebarData = array('latestPosts' => $this->getLatestPosts(), 'popularPosts' => $this->getPopularPosts() );
        return View::make( 'public/home' )      ->nest('main_view', 'public/photo-video', compact( 'posts', 'attachments') )
                                                ->nest('side_view', 'public/side', compact( 'sidebarData' ) );
    }

    public function getNews()

    {
        $posts = Post::where('post_type', '=', 'news')->orderBy('post_date', 'desc')->get();
        foreach ( $posts as $post ) {
            $postIdAux = $post->id;
            $postAttachments = Post::where('post_parent', '=',  $post->id )->orderBy('priority', 'asc')->get();
            $attachments[$postIdAux] = $postAttachments;
        }
        $sidebarData = array('latestPosts' => $this->getLatestPosts(), 'popularPosts' => $this->getPopularPosts() );
        return View::make( 'public/home' )      ->nest('main_view', 'public/news', compact( 'posts', 'attachments') )
                                                ->nest('side_view', 'public/side', compact( 'sidebarData' ) );
    }

    public function getIbercup()
    {
        $latestPosts = $this->getLatestPosts();
        $popularPosts = $this->getPopularPosts();
        $sidebarData = array('latestPosts' => $latestPosts, 'popularPosts' => $popularPosts );
        return View::make( 'public/home' )      ->nest('main_view', 'public/ibercup', compact( 'homePosts' ) )
                                                ->nest('side_view', 'public/side', compact( 'sidebarData' ) );
    }

    public function getAbout()
    {
        $latestPosts = $this->getLatestPosts();
        $popularPosts = $this->getPopularPosts();
        $sidebarData = array('latestPosts' => $latestPosts, 'popularPosts' => $popularPosts );
        return View::make( 'public/home' )      ->nest('main_view', 'public/about', compact( 'homePosts' ) )
                                                ->nest('side_view', 'public/side', compact( 'sidebarData' ) );
    }

    public function getContact()
    {
        $latestPosts = $this->getLatestPosts();
        $popularPosts = $this->getPopularPosts();
        $sidebarData = array('latestPosts' => $latestPosts, 'popularPosts' => $popularPosts );
		return View::make( 'public/home' )     	->nest('main_view', 'public/contact', compact( 'homePosts' ) )
                                                ->nest('side_view', 'public/side', compact( 'sidebarData' ) );
	}


    public function getLatestPosts()
    {
        $latestPosts = Post::orderBy('post_date', 'desc')->take(5)->get();
        return $latestPosts;
    }
    public function getPopularPosts()
    {
        $popularPosts = Post::orderBy('post_date', 'desc')->take(5)->get();
        return $popularPosts;
    }




}
