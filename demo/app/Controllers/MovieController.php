<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Movie;

class MovieController extends BaseController
{
	public function index()
	{
		$movie = new Movie();
		$data['movies']= $movie->orderBy('id','DESC')->paginate(10);
		$data['pagination_link']= $movie->pager;
		
		return view('movie',$data);
	}

	function add(){
		return view('add_movie');
	}
	// function validate(){
	// 	helper(['form','url']);
	// 	$error = $this->validate([
	// 		'name' => 'required|min_length[3]'
	// 	]);
	// 	if(!empty($error)):
	// 		echo view('add_movie',[ 'error' => $this->validator ]);
	// 	else:
	// 		$movie = new Movie();
	// 		$movie->save([
	// 			'name'=> $this->request->getVar('name'),
	// 			'author'=> $this->request->getVar('author'),
	// 			'price'=> $this->request->getVar('price'),
	// 		]);
	// 		$session =\Config\Services::session();
	// 		$session->setFlashdata('success','added');
	// 		return $this->response->redirect(site_url('/crud'));
	// 	endif;
	// }
	public function save(){
	
		$request = \Config\Services::request();
		
		$name  = $request->getPost('name');
		$author  = $request->getPost('author');
		$price  = $request->getPost('price');
		$newMovie = [
			'name'=>$name,
			'author'=>$author,
			'price'=>$price,
		];
		// $body = $this->request->getVar();
		// $movie = new \App\Models\Movie();
      	// $movie->save($body);

		
		$movie = new Movie();
		$movie->save($newMovie);

		var_dump($newMovie);
		// var_dump($movie);
		// $data['movies']= $movie->orderBy('id','DESC')->paginate(10);
		// $data['pagination_link']= $movie->pager;
		
		// return redirect('user/list');
	}
}
