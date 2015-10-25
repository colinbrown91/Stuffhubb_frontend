@extends('layouts.main')

@section('title')

  Dashboard

@stop

@section('content')
       

<!-- xxxxxxxx -->
<!-- Side Nav -->
<!-- xxxxxxxx -->

         
         <div class="row">
            <div class="col-xs-2">
               <nav role="navigation">
                  <ul class="nav nav-pills nav-stacked">
                     {{-- <li role="presentation" class="active">{!! Html::decode(link_to_route('user.show', '<i class="fa fa-dashboard"></i> Dashboard', [$user->id] )) !!}</li> --}}
                     <li role="presentation" class="active"><a href="{{url('/user/dashboard')}}"> <i class="fa fa-dashboard"></i> Dashboard</a></li>
                     {{-- <li role="presentation">{!! Html::decode(link_to_route('user.getprofile', '<i class="fa fa-building"></i> Profile', [$user->id] )) !!}</li> --}}
                     <li role="presentation" class="active"><a href="{{url('/user/profile')}}"> <i class="fa fa-building"></i> Profile</a></li>
                     {{-- <li role="presentation">{!! Html::decode(link_to_route('user.getaccount', '<i class="fa fa-user"></i> Account', [$user->id] )) !!}</li> --}}
                     <li role="presentation" class="active"><a href="{{url('/user/account')}}"> <i class="fa fa-user"></i> Account</a></li>
                     {{-- <li role="presentation">{!! Html::decode(link_to_route('user.gettransactions', '<i class="fa fa-th-list"></i> Transactions', [$user->id] )) !!}</li> --}}
                     <li role="presentation" class="active"><a href="{{url('/user/transactions')}}"> <i class="fa fa-th-list"></i> Transactions</a></li>
                     {{-- <li role="presentation">{!! Html::decode(link_to_route('user.getperformance', '<i class="fa fa-area-chart"></i> Performance', [$user->id] )) !!}</li> --}}
                     <li role="presentation" class="active"><a href="{{url('/user/performance')}}"> <i class="fa fa-area-chart"></i> Performance</a></li>
                     {{-- <li role="presentation">{!! Html::decode(link_to_route('user.getsettings', '<i class="fa fa-wrench"></i> Settings', [$user->id] )) !!}</li> --}}
                     <li role="presentation" class="active"><a href="{{url('/user/settings')}}"> <i class="fa fa-wrench"></i> Settings</a></li>
                     {{-- <li role="presentation">{!! Html::decode(link_to_route('user.gethelp', '<i class="fa fa-life-ring"></i> Help', [$user->id] )) !!}</li> --}}
                     <li role="presentation" class="active"><a href="{{url('/user/help')}}"> <i class="fa fa-life-ring"></i> Help</a></li>
                  </ul>
               </nav>
            </div> 
         

<!-- xxxxxxxxx -->
<!-- Dashboard -->
<!-- xxxxxxxxx -->


        <div class="col-xs-10">
          <div class="well">
            

            <h3>Transactions:</h3>
            

          </div>
        </div>


@stop
