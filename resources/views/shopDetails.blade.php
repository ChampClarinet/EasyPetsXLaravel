@extends('layouts.template')
@section('title')
<title>{{ $pageTitle }} - {{ config('app.name')}}</title>    
@endsection
@section('content')
<div class="row">
    <div class="card card-profile">
        <div class="card-avatar">
            <img src="https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/23031357_10211911343472846_2368735527826150936_n.jpg?_nc_cat=111&_nc_ht=scontent.fbkk5-3.fna&oh=5d068d05a5c9309380acf109232de8d2&oe=5CAAE390"
            class="rounded-circle" style="width: 130px; height: 130px;" alt="shop picture"/>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <a href="{{ URL::to('shop/'.$shop['id'].'/edit') }}">
                        <button id="edit" type="button" class="btn btn-info">{{ __('shopDetails.button-edit') }}</button>
                    </a>
                </div>  
                <h4 class="card-title">{{ $shop['name'] }}</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 40%"></th>
                                <th style="width: 60%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ __('shopDetails.days') }}</td>
                                <td>{{ __('shopDetails.everyday') }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('shopDetails.open') }}</td>
                                <td>08:00</td>
                            </tr>
                            <tr>
                                <td>{{ __('shopDetails.close') }}</td>
                                <td>16:00</td>
                            </tr>
                            <tr>
                                <td>{{ __('shopDetails.tel') }}</td>
                                <td>{{ $shop['tel'] }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('shopDetails.address') }}</td>
                                <td>{{ $shop['address'] }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-facebook-square" style="font-size:48px;color: #3b5998;"></i>
                                </td>
                                <td>
                                    <a href="{{ $shop['url'] }}">{{ $shop['url'] }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ __('shopDetails.image') }}</td>
                                <td>
                                    <img src="http://www.jokesoftheday.net/jokes-archive/2018/08/24/Blonde-in-a-Pet-Store.jpg.330.jpg"
                                    class="img-fluid" alt="service picture">
                                </td>
                            </tr>
                            <tr>
                                <td>{{ __('shopDetails.map') }}</td>
                                <td>
                                    <div id="map" style="width: 100%; height: 400px; background-color: grey; margin-top: 0px;"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ __('shopDetails.desc') }}</td>
                                <td>
                                    {{ $shop['desc'] }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var latitude = {{ $shop['lat'] }};
    var longitude = {{ $shop['lng'] }};
    
    function initMap() {
        console.log(latitude + ":" + longitude);
        let here = {lat: latitude, lng: longitude};
        var mapOptions = {
            zoom: 15,
            center: here
        };
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        var marker = new google.maps.Marker({
            position: here,
            map: map,
            draggable: false
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBd4sDjq20vvBUIN2Yc4ANrbdxzp_TF-qs&callback=initMap"></script>
@endsection