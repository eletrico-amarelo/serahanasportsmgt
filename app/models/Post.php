<?php

class Post extends Eloquent
{

    protected $fillable = ['title', 'content'];

    public function comments()
    {
        return $this->hasMany('Comment');
    }

    public function getByName()
    {
        return $this->where('post_date', '!=', 1)->take(1)->get();
    }

    public function delete()
    {
        foreach ($this->comments as $comment) {
            $comment->delete();
        }
        return parent::delete();
    }

}
