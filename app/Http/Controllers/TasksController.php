<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller {
	public function index() {

		$tasks = Task::all();
		return view('tasks.index', [
			'name' => 'world',
			'tasks' => $tasks,
		]);

	}
	public function show(Task $task) {
		// Route model Binding, assumes primary key

		return view('tasks.show', [
			'task' => $task,
		]);
	}
}
