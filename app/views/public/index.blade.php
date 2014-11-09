@extends('public.layouts.master')

{{-- Content --}}
estou aqui!
@section('index')
@foreach ($posts as $post)







		<!-- Post Content -->
		<div class="row">
			<div class="span2">
				<a href="{{ $post->url() }}" class="thumbnail"><img src="http://placehold.it/260x180" alt=""></a>
			</div>
			<div class="span6">
				<p>
					{{ Str::limit($post->post_content, 200, $end = '&nbsp;[&hellip;]' ) }}
				</p>
				<p><a class="btn btn-mini" href="{{ $post->url() }}">Read more</a></p>
			</div>
		</div>
		<!-- ./ post content -->




@endforeach


@stop
