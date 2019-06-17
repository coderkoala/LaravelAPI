<?php

namespace App\Http\Controllers;
use App\apiDb;
use Illuminate\Http\Request;

class apiController extends Controller
{
    public function index()
    {
        return apiDb::all();
    }

    public function show($id)
    {
        return  apiDb::find($id);
    }

    public function store(Request $request)
    {
        $article = apiDb::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, apiDb $article)
    {
        $article->update($request->all());
        return response()->json([$request, 200]);
        //return response()->json(["Success" => $article, "status" => 200]);
    }

    public function delete($id)
{
    $deleted_obj = apiDb::find($id);
    $deleted_obj->delete();
    return response()->json(["message" => "Success", "status" =>"204" , "Deleted" => "$deleted_obj"]);
}
}
