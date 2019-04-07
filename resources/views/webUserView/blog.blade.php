@extends('layouts.webUser.blog')

@section('blogPostImage')

    <img src="{{asset('/img/a.jpg')}}"  width="100%" height="325" alt="Cinque Terre" style="border: none;padding: 0px" >

@endsection

@section('blogPostTitle',$data['post']['post_title'])

@section('blogPostContent')
{!!$data['post']['post_data']!!}
{{-- {!!str_limit($data['post']['post_data'],2)!!} --}}
{{-- {!! \Illuminate\Support\Str::words($data['post']['post_data'],1)!!} --}}
@endsection

@section('blogLatestArticleTitle')
	<div class="container-fluid">
		<div class="row">
			<div class="col">
			Latest Artical Title 1
			</div>
		</div>
	</div>
@endsection
