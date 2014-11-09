<?php

class PostController extends BaseController
{

    /* get functions */
    public function listPhotoVideo()
    {

        $posts = Post::where('post_type', '=', 'photo-video')->orderBy('post_date', 'desc')->get();
        foreach ( $posts as $post ) {
            $postIdAux = $post->id;
            $postAttachments = Post::where('post_parent', '=',  $post->id )->orderBy('priority', 'asc')->get();
            $attachments[$postIdAux] = $postAttachments;
        }
        $sidebarData = array('latestPosts' => $this->getLatestPosts(), 'popularPosts' => $this->getPopularPosts() );
        return View::make( 'public/home' )      ->nest('main_view', 'public/photo-video', compact( 'posts', 'attachments') )
                                                ->nest('side_view', 'public/side', compact( 'sidebarData' ) );
    }

    public function showPhotoVideo( $slug) {
        $sidebarData = array('latestPosts' => $this->getLatestPosts(), 'popularPosts' => $this->getPopularPosts() );
        $showPost       = $this->showPost( 'photo-video', $slug );
        $posts          = $showPost['posts'];
        $attachments    = $showPost['attachments'];
        return View::make( 'public/home' )      ->nest('main_view', 'public/detail', compact( 'posts', 'attachments') )
                                                ->nest('side_view', 'public/side', compact( 'sidebarData' ) );
    }


    public function listTournaments()
    {
        $posts = Post::where('post_type', '=', 'tournaments')->orderBy('post_date', 'desc')->get();
        foreach ( $posts as $post ) {
            $postIdAux = $post->id;
            $postAttachments = Post::where('post_parent', '=',  $post->id )->orderBy('priority', 'asc')->get();
            $attachments[$postIdAux] = $postAttachments;
        }
        $sidebarData = array('latestPosts' => $this->getLatestPosts(), 'popularPosts' => $this->getPopularPosts() );
        return View::make( 'public/home' )      ->nest('main_view', 'public/tournaments', compact( 'posts', 'attachments') )
                                                ->nest('side_view', 'public/side', compact( 'sidebarData' ) );
    }

    public function showTournaments( $slug) {
        $sidebarData = array('latestPosts' => $this->getLatestPosts(), 'popularPosts' => $this->getPopularPosts() );
        $posts = array('latestPosts' => $this->getLatestPosts(), 'popularPosts' => $this->getPopularPosts() );
        $showPost       = $this->showPost( 'tournaments', $slug );
        $posts          = $showPost['posts'];
        $attachments    = $showPost['attachments'];
        return View::make( 'public/home' )      ->nest('main_view', 'public/detail', compact( 'posts', 'attachments') )
                                                ->nest('side_view', 'public/side', compact( 'sidebarData' ) );
    }



    public function listNews()
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

    public function showNews( $slug) {
        $sidebarData = array('latestPosts' => $this->getLatestPosts(), 'popularPosts' => $this->getPopularPosts() );
        $posts = array('latestPosts' => $this->getLatestPosts(), 'popularPosts' => $this->getPopularPosts() );
        $showPost       = $this->showPost( 'news', $slug );
        $posts          = $showPost['posts'];
        $attachments    = $showPost['attachments'];
        return View::make( 'public/home' )      ->nest('main_view', 'public/detail', compact( 'posts', 'attachments') )
                                                ->nest('side_view', 'public/side', compact( 'sidebarData' ) );
    }


    public function showPost( $type, $slug )
    {
        $posts =  Post::where('post_type', '=', $type )->where( 'post_name', '=', $slug )->get();
        foreach ( $posts as $post ) {
            $postIdAux = $post->id;
            $postAttachments = Post::where('post_parent', '=',  $post->id )->orderBy('priority', 'asc')->get();
            $attachments[$postIdAux] = $postAttachments;
        }
        return  array('posts' => $posts, 'attachments' => $attachments );
    }

    public function newPost()
    {
        $this->layout->title = 'New Post';
        $this->layout->main = View::make('dash')->nest('content', 'posts.new');
    }

    public function editPost(Post $post)
    {
        $this->layout->title = 'Edit Post';
        $this->layout->main = View::make('dash')->nest('content', 'posts.edit', compact('post'));
    }

    public function deletePost(Post $post)
    {
        $post->delete();
        return Redirect::route('post.list')->with('success', 'Post is deleted!');
    }

    /* post functions */
    public function savePost()
    {
        $post = [
            'title' => Input::get('title'),
            'content' => Input::get('content'),
        ];
        $rules = [
            'title' => 'required',
            'content' => 'required',
        ];
        $valid = Validator::make($post, $rules);
        if ($valid->passes()) {
            $post = new Post($post);
            $post->comment_count = 0;
            $post->read_more = (strlen($post->content) > 120) ? substr($post->content, 0, 120) : $post->content;
            $post->save();
            return Redirect::to('admin/dash-board')->with('success', 'Post is saved!');
        } else
            return Redirect::back()->withErrors($valid)->withInput();
    }

    public function updatePost(Post $post)
    {
        $data = [
            'title' => Input::get('title'),
            'content' => Input::get('content'),
        ];
        $rules = [
            'title' => 'required',
            'content' => 'required',
        ];
        $valid = Validator::make($data, $rules);
        if ($valid->passes()) {
            $post->title = $data['title'];
            $post->content = $data['content'];
            $post->read_more = (strlen($post->content) > 120) ? substr($post->content, 0, 120) : $post->content;
            if (count($post->getDirty()) > 0) /* avoiding resubmission of same content */ {
                $post->save();
                return Redirect::back()->with('success', 'Post is updated!');
            } else
                return Redirect::back()->with('success', 'Nothing to update!');
        } else
            return Redirect::back()->withErrors($valid)->withInput();
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
