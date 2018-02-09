@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                @if(session()->has('message'))
                    <div class="alert alert-danger">
                        <div align="center">
                             {{ session()->get('message') }}
                        </div>
                       
                    </div>
                @endif

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                <input type="button" name="Envoyer" value="Envoyer Email"  class="btn btn-default" onclick="location.href='{{ url('envoyer') }}'">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
