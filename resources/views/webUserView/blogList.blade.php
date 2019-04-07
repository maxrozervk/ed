@extends('layouts.webUser.blogList')
@section('post')
{{-- <pre>{{print_r($data['post'])}}</pre> --}}
<div class="container-fluid">
    @foreach($data['post'] as $post)
        <div class="row">
            <div class="col">
            	<a href="/blog/{{$post['post_slug']}}">
            		<h3>{{$post['post_title']}}</h3>
            	</a>
                {{-- {!!$post['post_data']!!} --}}
                <p>
                {{$post['post_subtitle']}}
                </p>
            </div>
        </div>
    @endforeach
    <div class="row">
            <div class="col">
                <a href="/blog1">
                    <h3>Data & Analytics | Key Trends in 2019</h3>
                </a>
                <p>
                    2018 has been a great year for business intelligence. The proliferation of internet-based technologies led to a data explosion and the concept of big data became even more prevalent. Businesses gained access to the cloud, interactive business dashboards replaced spreadsheets, and much more occurred. Now, data quality services and management practices, data discovery techniques, and […]
                </p>
            </div>
        </div>
</div>
@endsection
@section('latestArticleTitle')
<div class="container-fluid">
        		<div class="row">
        			<div class="col">
          				Latest Artical Title
        			</div>
        		</div>
    	    </div>
@endsection
