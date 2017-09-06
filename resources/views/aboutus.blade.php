@extends('layouts/layout')

@section('content')
				<!-- ABOUT US -->
				<div class="about_us">
					<h2 class="tit_h2">ABOUT US</h2>
					<span class="blind">{{ $menuLink }}</span>

					<div class="about_us_cnt">
						@foreach($menupost as $aboutus)
							{!! html_entity_decode($aboutus->dsc) !!}
						@endforeach
					</div>
				</div>
				<!-- //ABOUT US -->
@endsection