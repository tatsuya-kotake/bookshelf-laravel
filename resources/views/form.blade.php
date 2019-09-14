@extends('layouts.master')

@section('header')
    @include('header')
@endsection

@section('form')
<div class="container ">
		<div class="row justify-content-center">
    		<div class="col-md-8">
        		<div class="card">
            		<div class="card-header">{{ __('本の登録') }}</div>

		                <div class="card-body">
				                <form action="{{ url('/')}}" method="POST" class="form_book" enctype="multipart/form-data">
				                @csrf
														<div class="form-group row">

														   <label for="book_title" class="col-md-4 col-form-label text-md-right ">{{ __('タイトル') }}</label>
														   <div class="col-md-6">
														       <input type="text" name="book_title" class="form-control book-title" placeholder="書籍タイトルを入力">
														   </div>

															 <label for="book_title" class="col-md-4 col-form-label text-md-right ">{{ __('書籍画像') }}</label>
																	 <div class="col-md-6">
																		  <input type="file" name="book_image" class='form-control book-image'>
																	 </div>
															 </label>

														</div>
														<div class="form-group row mb-0">
																 <div class="col-md-6 offset-md-4">
																		 <button type="submit" class="btn btn-success btn-block">
																				 {{ __('登　録') }}
																		 </button>
																 </div>
														</div>
				                </form>
		            		</div>
            </div>
	      </div>
    </div>
</div>
@endsection
