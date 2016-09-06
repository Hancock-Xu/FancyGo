@extends('site.layout')

@section('content')

	<div>
		<form class="form-horizontal" method="post" role="form" action="{{action('Admin\emailIssuesController@companyPromote')}}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				<label for="email" class="col-md-4 control-label">Company E-Mail Address</label>

				<div class="col-md-6">

					<input id="email" type="email" class="form-control" name="company_email" value="{{ old('email') }}">

					@if ($errors->has('email'))
						<span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
					@endif
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
					<button type="submit" class="btn btn-primary">
						<i class="fa fa-btn fa-sign-in"></i> Send Company Promote Email
					</button>
				</div>
			</div>
		</form>
	</div>


	<div>
		<form class="form-horizontal" method="post" role="form" action="{{action('Admin\emailIssuesController@userPromote')}}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				<label for="email" class="col-md-4 control-label">User E-Mail Address</label>

				<div class="col-md-6">

					<input id="email" type="email" class="form-control" name="company_email" value="{{ old('email') }}">

					@if ($errors->has('email'))
						<span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
					@endif
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
					<button type="submit" class="btn btn-primary">
						<i class="fa fa-btn fa-sign-in"></i> Send User Promote Email
					</button>
				</div>
			</div>
		</form>
	</div>


@endsection