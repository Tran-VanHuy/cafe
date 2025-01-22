<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileApiController extends Controller
{
    public function upload(Request $request)
    {

        if (!$request->hasFile('image')) {
            return response()->json([
                "status" => 400,
                "message" => "NOT SUCCESS 1",
                'data' => null
            ], 400);
        }

        $file = $request->file('image');
        if (!$file->isValid()) {

            return response()->json([
                "status" => 400,
                "message" => "NOT SUCCESS 2",
                'data' => null
            ], 400);
        }

        $uniqueFileName = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $uniqueFileName);

        return response()->json([
            "status" => 200,
            "message" => "SUCCESS",
            "data" => [
                "file_name" => $uniqueFileName,
                "file_path" => 'images/' . $uniqueFileName
            ]
        ]);
    }
}
