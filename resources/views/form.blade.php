@extends('layouts.master')

@section('header')
    @include('header')
@endsection

@section('form')
<div id="wrapper">
   <div id="main">
       <form action="{{ url('/')}}" method="POST" class="form_book" enctype="multipart/form-data">
           @csrf
           <div class="book_title">
               <input type="text" name="book_title" placeholder="書籍タイトルを入力">
           </div>
           <div class="book_image">
               <input type="file" name="book_image">
           </div>
           <div class="book_submit">
               <input type="submit" value="登録">
           </div>
       </form>
   </div>
</div>
@endsection
