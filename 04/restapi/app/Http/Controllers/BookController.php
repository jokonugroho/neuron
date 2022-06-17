<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $header = $request->headers->get('Accept');
        $books = Book::all();
        if ($header ==='application/xml') {
            $xml = new \SimpleXMLElement('<book/>');
            foreach ($books as $val) {
                $item = $xml->addChild('book');
                $item->addChild('id', $val->id);
                $item->addChild('isbn', $val->isbn);
                $item->addChild('title', $val->title);
                $item->addChild('author', $val->author);
                $item->addChild('created_at', $val->created_at);
                $item->addChild('updated_at', $val->updated_at);
            }
            // array_walk_recursive($books, array ($xml, 'addChild'));
            return $xml->asXML();
        }else{
            return response()->json($books, 200);
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
