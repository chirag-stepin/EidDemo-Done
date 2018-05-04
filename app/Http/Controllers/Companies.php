<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class Companies extends Controller
{
    //
	public function showList()
	{
		$results=\App\Projects::with(['Companies','Tasks'])->get();
	var_dump($results);
	}
	public function showCompany()
	{
		$result=\App\Companies::all();
		foreach($result as $value)
		{
			echo $value['title']."<br>";
			$projects = \App\Projects::where('company_id', $value['id'])->get();
			foreach($projects as $project)
			{
				
				$count = \App\Tasks::where('projects_id',$project['id'])->count();
				echo $project['title']." - ". $count."<br>";
			}
		}
		
	}
}
