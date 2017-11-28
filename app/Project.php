<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

	protected $primaryKey = 'project_id';
	protected $fillable = ['project_name', 'description'];

	public function scopeComplete() {
		return static::where('complete', 1);
	}

	public function scopeIncomplete() {
		return static::where('complete', 0);
	}

	// $project->user
	public function user() {
		return $this->belongsTo(User::class, 'user_id');
	}

	// $project->files
	public function files() {
    return $this->hasMany(File::class, 'project_id', 'project_id');
	}

}
