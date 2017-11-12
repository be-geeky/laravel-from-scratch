<?php

namespace App;

class Post extends Model {

	public function comments() {
		return $this->hasMany(Comment::class);
	}
	public function addComment($body) {
		//First way
		// Comment::create([
		// 	'body' => $body,
		// 	'post_id' => $this->id,
		// ]);

		//Second way with relation
		$this->comments()->create([
			'body' => $body,
		]);
	}
    public function user() {
        return $this->belongsTo(User::class);
    }
    public static function archives(){

        return static::selectRaw('year(created_at) as year, monthname(created_at) as month,count(*) published')
            ->groupby('year','month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }
}