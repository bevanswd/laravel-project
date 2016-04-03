@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">Welcome! This is where you will submit a message to be stored in your dashboard!</div>

                <div class="panel-body">
                
                <div class="container">

                @include('partials._messages')


				<h1>Submit a Message!</h1>
				<br>
				{!! Form::open(array('route' => 'posts.store')) !!}

				{{ Form::label('fname', 'First Name:') }}
				{{ Form::text('fname', null, array('class' => 'form-control')) }}
				<br>
				{{ Form::label('lname', 'Last Name:') }}
				{{ Form::text('lname', null, array('class' => 'form-control')) }}
				<br>
				{{ Form::label('bname', 'Business Name:') }}
				{{ Form::text('bname', null, array('class' => 'form-control')) }}
				<br>	

				{{ Form::label('address', 'Address:') }}
				{{ Form::text('address', null, array('class' => 'form-control')) }}
				<br>
				{{ Form::label('city', 'City:') }}
				{{ Form::text('city', null, array('class' => 'form-control')) }}
				<br>
				{{ Form::label('state', 'State:') }}
				{{ Form::select('state', ['AK', 'AL', 'AR', 'AZ', 'CA', 'CO', 'CT', 'DC', 'DE', 'FL', 'GA', 'HI', 'IA', 'ID', 'IL', 'IN', 'KS', 'KY', 'LA', 'MA', 'MD', 'ME', 'MI', 'MN', 'MO', 'MS', 'MT', 'NC', 'ND', 'NE', 'NH', 'NJ', 'NM', 'NV', 'NY', 'OH', 'OK', 'OR', 'PA', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VA', 'VT', 'WA', 'WI', 'WV', 'WY']) }}
				<br><br>
				{{ Form::label('cmail', 'Certified Mail:') }}
				{{ Form::select('cmail', [
				   'yes' => 'yes',
				   'no' => 'no']
				) }}
				<br><br>
				{{ Form::label('zip', 'Zip:') }}
				{{ Form::text('zip', null) }}
			    <br><br>
				{{ Form::label('message', 'Message:') }}
				{{ Form::textarea('message', null, array('class' => 'form-control')) }}
			    <br>
				{{ Form::submit('SUBMIT', array('class' => 'btn btn-success btn-lg')) }}


				{!! Form::close() !!}

				</div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection

<style>
    input, textarea, .alert{ 
    	max-width:500px !important;
    }
</style>