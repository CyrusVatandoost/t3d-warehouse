<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

	protected $primaryKey = 'project_id';
	protected $fillable = ['project_name', 'description'];
 	protected $visible = ['project_name', 'description'];

	public function scopeComplete() {
		return static::where('complete', 1);
	}

	public function scopeIncomplete() {
		return static::where('complete', 0);
	}

	public function scopePublic() {
		return static::where('public', 1);
	}

	public function scopePrivate() {
		return static::where('public', 0);
	}
	
	// $project->user
	public function user() {
		return $this->belongsTo(User::class, 'user_id');
	}

	// $project->files
	public function files() {
   		return $this->hasMany(File::class, 'project_id', 'project_id');
	}

	// $project->collaborators
	public function collaborators() {
		return $this->hasMany(Collaborator::class, 'project_id', 'project_id');
	}

	public function heads() {
		return $this->hasMany(ProjectHead::class, 'project_id', 'project_id');
	}

	public function tags(){
		return $this->hasMany(ProjectTag::class,'project_id','project_id');
	}

	public function tasks() {
		return $this->hasMany(Task::class, 'project_id', 'project_id');
	}

	public function issues() {
		return $this->hasMany(Issue::class, 'project_id', 'project_id');
	}

  // this is a recommended way to declare event handlers
  protected static function boot() {
    parent::boot();
    static::deleting(function($user) { // before delete() method call this
			$user->files()->delete();
			$user->collaborators()->delete();
			$user->heads()->delete();
    });
  }

}
