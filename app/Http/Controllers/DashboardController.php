<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Organization;
use App\Project;
use App\FeaturedProject;
use App\ProjectArchive;

class DashboardController extends Controller {

	public function users() {
    $users = User::get();
    return view('admin.users', compact('users'));
	}

	public function files() {

	}

	public function logs() {

	}

	public function organization() {
    $organization = Organization::find(1);
    return view('admin.organization', compact('organization'));
	}

	public function projects() {
    $projects = Project::get();
    $featured_projects = FeaturedProject::get();
    $project_archives = ProjectArchive::get();
    return view('admin.projects', compact('projects', 'featured_projects', 'project_archives'));
	}

}