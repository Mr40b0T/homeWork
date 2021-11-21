<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/user", function() {
    $ar["name"] = "Luka Maglapheridze";
    return response()->json($ar, 200);
});

Route::get("/age", function() {
    $ar["age"] = 19;
    return response()->json($ar, 200);
});

Route::get("/hobby", function() {
    $ar["hobby"] = "hiking";
    return response()->json($ar, 200);
});


Route::get("/date", function() {
    $ar["date"] = date("Y/m/d");
    return response()->json($ar, 200);
});

Route::get("/time", function() {
    $ar["time"] = date("h:i:sa");
    return response()->json($ar, 200);
});

Route::post("/post", function() {
    $ar["message"] = "წარმატებით დაემატა";
    return response()->json($ar, 200);
});

Route::put("/put", function() {
    $ar["message"] = "წარმატებით განახლდა";
    return response()->json($ar, 200);
});

Route::delete("/delete", function() {
    $ar["message"] = "წარმატებით წაიშალა!";
    return response()->json($ar, 200);
});