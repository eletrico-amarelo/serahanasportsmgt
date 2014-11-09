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
        $homePostsArray = array( 5, 9, 7 );
        $posts = Post::whereIn('id', $homePostsArray)->get();
        foreach ( $posts as $post ) {
            $postIdAux = $post->id;
            $postAttachments = Post::where('post_parent', '=',  $post->id )->orderBy('priority', 'asc')->get();
            $attachments[$postIdAux] = $postAttachments;
        }
        $sidebarData = array('latestPosts' => $this->getLatestPosts(), 'popularPosts' => $this->getPopularPosts() );
        return View::make( 'public/home' )      ->nest('main_view', 'public/main', compact( 'posts', 'attachments') )
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


    public function showStaticPage( $page )
    {
        $view = $page;
        $latestPosts = $this->getLatestPosts();
        $popularPosts = $this->getPopularPosts();
        $sidebarData = array('latestPosts' => $latestPosts, 'popularPosts' => $popularPosts );
        return View::make( 'public/home' )      ->nest('main_view', 'public/'.$view, compact( 'homePosts' ) )
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
        return View::make( 'public/home' )      ->nest('main_view', 'public/contact', compact( 'homePosts' ) )
                                                ->nest('side_view', 'public/side', compact( 'sidebarData' ) );
    }

    public function showSearch( $q = null )
    {
        $q = Input::get( 'q' );
        if ( !is_null( $q ) ) {
            $searchStatus = array( 'status' => 'ok', 'search' => $q );
            $searchResults = Post::where( function ( $query ) use( $q )
            {
                $query->where( 'post_name', 'like', '%'.$q.'%' )
                ->orWhere( 'post_content', 'like', '%'.$q.'%' );
            })->where( function( $query )
            {
                $query->where( 'post_type', '=', 'news' )
                        ->where( 'post_status', '=', 'publish' );
            })->get();

            foreach ( $searchResults as $searchResult ) {
                $searchResultIdAux = $searchResult->id;
                $searchResultAttachments = Post::where('post_parent', '=',  $searchResult->id )->orderBy('priority', 'asc')->get();
                $attachments[$searchResultIdAux] = $searchResultAttachments;
            }


        } else {
            $searchStatus = array( 'status' => 'ko', 'search' => $q );
            $searchResults = array();
        }
        $sidebarData = array('latestPosts' => $this->getLatestPosts(), 'popularPosts' => $this->getPopularPosts() );
        return View::make( 'public/home' )      ->nest('main_view', 'public.search', compact( 'searchStatus', 'searchResults', 'attachments') )
                                                ->nest('side_view', 'public.side', compact( 'sidebarData' ) );
    }


    public function getLatestPosts()
    {
        $latestPosts = Post::where('post_type', '=', 'news')->orWhere('post_type', '=', 'photo-video')->orderBy('post_date', 'desc')->take(5)->get();
        return $latestPosts;
    }
    public function getPopularPosts()
    {
        $popularPosts = Post::where('post_type', '=', 'news')->orWhere('post_type', '=', 'photo-video')->orderBy('view_count', 'desc')->take(5)->get();
        return $popularPosts;
    }




}
