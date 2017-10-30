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
}