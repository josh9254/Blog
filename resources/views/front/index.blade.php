@extends('front.template.main')
@section('content') 

<h3 class="title-Front left"> Ultimos Articulos</h3>
<hr>
<div class="row">
	<div class="col-md-8">
		<div clas="row">
			@foreach ($articles as $article)
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-body">
					<a href="{{ route('front.view.article', $article->slug)}}" class="thumbnail">
					@foreach($article->images as $image)
						<img src="{{ asset('images/articles/'.$image->name)}}" class="img-responsive img-article" alt="...">
					@endforeach
					</a>
					<a href="{{ route('front.view.article', $article->slug)}}">
					<h4 class="text-center">{{ $article->title}}</h4>
					</a>
					<hr>
					<i class="fa fa-folder-open-o"> <a href="{{ route('front.search.category', $article->category->name )}}">{{ $article->category->name}}</a></i>
					<div class="pull-right">
							<i class="fa fa-clock-o"> {{ $article->created_at->diffForHumans()}}</i>
					</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>	
		{!! $articles->render() !!}
	</div>
		<div class="col-md-4 aside">
			 @include('front.template.partials.aside')
	 
		</div>
</div>
@endsection