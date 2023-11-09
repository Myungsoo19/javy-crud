<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class MainService extends Controller
{
    public static function addBook(Request $request){
        $add = new Book();
        $add->title = $request->title;
        $add->category = $request->category;
        $add->quantity = $request->quantity;

        $add->save();
        return Book::all();
    }
    public static function getBook(){
        return Book::all();
    }
    public static function updateBook(Request $request){
        $update = Book::find($request->id);
        $update->title = $request->title;
        $update->category = $request->category;
        $update->quantity = $request->quantity;

        $update->save();
        return Book::all();
    }
    public static function deleteBook(Request $request){
        $delete= Book::find($request->id);
        $delete->delete();
        return Book::all();
    }
}
