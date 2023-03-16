@extends('app')

@section('content')

<div class="container-error">
<section class="page_404">

	<div class="container">
		<div class="row">	
            <div class="col-sm-12 ">
                <div class="col-md-10 offset-md-1">
                    <div class="check-start"></div>
                    <div class="iqos_four_bg">
                        <h1 class="text-center text-bold">404</h1>
                    </div>
                
                    <div class="contant_box_404">
                        <h3 class="text-center text-bold">Zgubiłes się?</h3>
                    
                        <p class="text-center">strona której szukasz nie istnieje!</p>
                    
                        <div class="row mt-5">
                            <div class="col-md-4 offset-md-4">
                                <a href="/" class="btn btn-dark">Wróć</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
		</div>
	</div>
</section>
</div>

@endsection