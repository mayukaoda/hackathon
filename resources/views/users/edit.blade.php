@extends('layouts.app')

@section('content')

<!-- <!DOCTYPE html>-->
<!--<html>-->
<!--<body id=edit-main>-->

        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->nickname }}</h3>
                </div>
                <div class="panel-body">
                <img class="center-block media-object img-rounded img-responsive" src="{{asset('img/boy.png')}}" alt="">
                </div>
            </div>
            
        </aside>
        
        <style>
        .col-xs-4{
            margin-right: 80px;
        }
        body{
     background: url('{{secure_asset('css/download2.jpg') }}') center center repeat ;
    background-size:cover;
    }

        </style>
        
        
         <div class="self-intro">
             
       <li> {{ $user->favoritedrink }}</li>
       <li> {{ $user->wheredoyouusuallydrink }}</li>
       <li>{{ $user->freeintro }}</li>
              
        </div>
            
          
            
            <!--<div class="button">-->
            <!--    {!! Form::submit('Upload', ['class' => "btn btn-danger btn-block"]) !!}-->
            <!--</div>-->
            
        <style>
            .button {
                width:100px;
                text-align: center;
                float :right;
                        }
                        
            .kuniko{
                 background-color:#e6d5aa;
                    }

        </style>
        
       <div class=container4>
         @include('fullcalender.fullcalender', ['calendar' => $calendar])
      </div>
   
   
<div style="margin-top:100px"></div>
@endsection


