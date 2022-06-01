<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([

            'author' => ['required'],
            'judul_buku' => ['required'],
            'isbn' => ['required'],
            'pages' => ['required'],
            'publisher' => ['required'],
            'e_book' => ['required'],
            'cover_book' => ['required'],
            'tahun_terbit' => ['required'],

        ]);
        $ebook = $request->file('e_book')->store('buku');
        $cover = $request->file('cover_book')->store('buku');

        $books = Books::create([
            'user_id' => $request->user()->id,
            'pengarang' => $request->author,
            'nama_buku' => $request->judul_buku,
            'cover_buku' => $cover,
            'e-book' => $ebook,
            'pages' => $request->pages,
            'ISBN' => $request->isbn,
            'penerbit' => $request->publisher,
            'tahun_terbit' => $request->tahun_terbit

        ]);
        return response()->json([
            'message' => 'success',
            'data' => $books,
        ]);
    }
}
