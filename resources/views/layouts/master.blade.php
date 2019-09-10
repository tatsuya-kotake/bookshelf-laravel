<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>BOOK SHELF</title>
        <link rel="stylesheet" href="{{ asset('css/bookshelf.css') }}">
    </head>

    <body>
         <header>
             @yield('header')
         </header>

             @yield('index')
             @yield('form')

         <footer>
             <small>©Bookshelf</small>
         </footer>
     </body>
 </html>
