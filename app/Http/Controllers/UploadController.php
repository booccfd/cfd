<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    
    public function postUpload(Request $request) {
		// $request->file('images')->store('');

		foreach ($request->images as $image) {
			$filename = $image->getClientOriginalName();

			$filename = $image->storeAs('', $filename);
		}

		// $files = $request->file('images');
		// $input = array('image' => $file);
		// $rules = array(	'image' => 'image');
		// $validator = Validator::make($input, $rules);
			// $destinationPath = 'uploads/';
			// $filename = $file->getClientOriginalName();

			// foreach ($request->file('images') as $file) {
			// 	$file->move($destinationPath, $filename);
			// }

			// return response()->json(['success' => true]);

			// return Response::json(['success' => true, 'file' => asset($destinationPath.$filename)]);
	}

}
