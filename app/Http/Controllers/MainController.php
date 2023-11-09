<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Service\MainService;

class MainController extends Controller
{
    public function addBook(Request $request){
        return MainService::addBook($request);
    }
    public function getBook(){
        return MainService::getBook();
    }
    public function updateBook(Request $request){
        return MainService::updateBook($request);
    }
    public function deleteBook(Request $request){
        return MainService::deleteBook($request);
    }
}
