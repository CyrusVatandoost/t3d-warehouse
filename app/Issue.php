<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model {

  public $primaryKey = 'issue_id';

	//$task->user 
	public function user() {
		return $this->belongsTo(User::class, 'user_id');
	}

	//$task->project 
	public function project() {
		return $this->belongsTo(Project::class, 'project_id');
	}

}
