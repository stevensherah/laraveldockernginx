@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div class="card">
                    <section id="">

    <h1 class="section-heading text-uppercase text-info text-center">SUBSCRIBERS</h1>
    <hr>
    @if(count($subscribes) > 0)
        @foreach($subscribes as $subscribe)
        <div class="row"> 
        <div class="col-md-2">
            {{--  #################################################  --}}
        </div>
            <div class="col-md-12 text-left pull-center">
                    <ul class="list-group">
                                    <li id="resepient_created_at" class="list-group-item">Created.: {{$subscribe->created_at->toFormattedDateString() }}</li>

                                    <li id="resepient_name" class="list-group-item">Name: {{$subscribe->name}}</li>
                                    <li id="resepient_email" class="list-group-item">Email: {{$subscribe->email}}</li>
                                    <li id="resepient_phone" class="list-group-item">Phone No.: {{$subscribe->phone}}</li>                         
                    </ul>
            </div>
            <div class="col-md-2">
            {{--  #################################################  --}}
                            </div>
        </div>
           
        @endforeach
    @endif
</section>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
