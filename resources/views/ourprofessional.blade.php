@extends('layouts/layout')

@section('content')
				<!-- OUR PROFESSIONAL -->
				<div class="our_professional">
					<h2 class="tit_h2">OUR PROFESSIONAL</h2>
					<span class="blind">{{ $menuLink }}</span>

					<div class="our_professional_cnt">
						@foreach($menupost as $ourpro)
							{!! html_entity_decode($ourpro->dsc) !!}
						@endforeach
					</div>
				</div>
				<!-- OUR PROFESSIONAL -->
@endsection