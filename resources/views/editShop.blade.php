@extends('layouts.template')
@section('title')
<title>{{ $pageTitle }} - {{ config('app.name') }}</title>
@endsection
@section('content')
<div class="row">
    <div class="card">
        <div class="card-header card-header-info">
            <h4 class="card-title">{{ __('shopDetails.general') }}</h4>
        </div>
        <div class="card-body">
            <form action="{{ URL::to('shop/'.$shop['id']) }}" method="PUT" enctype="multipart/form-data">
                <!--name and fb url-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-floating">{{ __('shopDetails.name') }}</label>
                            <input id="name" name="name" type="text" class="form-control" 
                            value="{{ old('name') ? old('name') : $shop['name'] }}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">{{ __('shopDetails.fb') }}</label>
                            <input id="url" name="url" type="text" class="form-control"
                            value="{{ old('url') ? old('url') : $shop['url'] }}"/>
                        </div>
                    </div>
                </div>                                    
                <!--tel and address-->
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="bmd-label-floating">{{ __('shopDetails.tel') }}</label>
                            <input id="tel" name="tel" type="text" class="form-control"
                                   value="{{ old('tel') ? old('tel') : $shop['tel'] }}"/>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <label class="bmd-label-floating">{{ __('shopDetails.address') }}</label>
                            <input id="address" name="address" type="text" class="form-control"
                                   value="{{ old('address') ? old('address') : $shop['address'] }}"/>
                        </div>
                    </div>
                </div>                                
                <!--logo-->
                <div class="row">
                    <div class="col-lg4 col-md-4 col-sm-4">
                        <p>{{ __('shopDetails.logo') }}</p>
                    </div>
                    <div class="col-lg4 col-md-4 col-sm-4">
                        <label class="form-check-label">
                            <input id="logo-check" type="checkbox" style="margin-right: 30px;" value="1" checked/>
                            {{ __('shopDetails.samePic') }}
                        </label>
                    </div>
                    <div class="col-lg4 col-md-4 col-sm-4">
                        <input name="logo" type="file" id="logo_file_button" disabled/>
                    </div>
                </div>
                <!--picture-->
                <div class="row">
                    <div class="col-lg4 col-md-4 col-sm-4">
                        <p>{{ __('shopDetails.picture') }}</p>
                    </div>
                    <div class="col-lg4 col-md-4 col-sm-4">
                        <label class="form-check-label">
                            <input id="picture-check" type="checkbox" style="margin-right: 30px;"
                                   value="1" checked/>
                            {{ __('shopDetails.samePic') }}
                        </label>
                    </div>
                    <div class="col-lg4 col-md-4 col-sm-4">
                        <input name="picture" type="file" id="picture_file_button" disabled/>
                    </div>
                </div>
                <!--days-->
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <input hidden value="" name="open_days" id="days" />
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>
                                        วันทำการ
                                    </td>
                                    <td>
                                        <label class="form-check-label">
                                            <input type="checkbox" id="checkbox-0"
                                                   class="form-check-input" value="1" checked>
                                            ทุกวัน
                                        </label>
                                    </td>
                                    <td>
                                        <label class="form-check-label day-label">
                                            <input type="checkbox" id="checkbox-1" name="open-days"
                                                   class="form-check-input" value="1" onchange="refreshDays();" checked>
                                            อาทิตย์
                                        </label>
                                    </td>
                                    <td>
                                        <label class="form-check-label day-label">
                                            <input type="checkbox" id="checkbox-2" name="open-days"
                                                   class="form-check-input" value="1" onchange="refreshDays();" checked>
                                            จันทร์
                                        </label>
                                    </td>
                                    <td>
                                        <label class="form-check-label day-label">
                                            <input type="checkbox" id="checkbox-3" name="open-days"
                                                   class="form-check-input" value="1" onchange="refreshDays();" checked>
                                            อังคาร
                                        </label>
                                    </td>
                                    <td>
                                        <label class="form-check-label day-label">
                                            <input type="checkbox" id="checkbox-4" name="open-days"
                                                   class="form-check-input" value="1" onchange="refreshDays();" checked>
                                            พุธ
                                        </label>
                                    </td>
                                    <td>
                                        <label class="form-check-label day-label">
                                            <input type="checkbox" id="checkbox-5" name="open-days"
                                                   class="form-check-input" value="1" onchange="refreshDays();" checked>
                                            พฤหัส
                                        </label>
                                    </td>
                                    <td>
                                        <label class="form-check-label day-label">
                                            <input type="checkbox" id="checkbox-6" name="open-days"
                                                   class="form-check-input" value="1" onchange="refreshDays();" checked>
                                            ศุกร์
                                        </label>
                                    </td>
                                    <td>
                                        <label class="form-check-label day-label">
                                            <input type="checkbox" id="checkbox-7" name="open-days"
                                                   class="form-check-input" value="1" onchange="refreshDays();" checked>
                                            เสาร์
                                        </label>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--hours-->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>เวลาทำการ</td>
                                        <td>
                                            <div class="form-group">
                                                <label class="form-check-label">
                                                    <input type="checkbox" id="checkbox-time"
                                                           class="form-check-input" value="1">
                                                    24 ชั่วโมง
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group open-time">
                                                <label for="time_open" class="bmd-label-floating">เวลาเปิด</label>
                                                <input class="form-control" type="time" name="open_time" id="time_open">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group close-time">
                                                <label for="time_open" class="bmd-label-floating">เวลาปิด</label>
                                                <input class="form-control" type="time" name="close_time" id="time_close">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--description-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">{{ __('shopDetails.desc') }}</label>
                            <input id="desc" name="desc" type="text" class="form-control"
                                   value="{{ old('desc') ? old('desc') : $shop['desc'] }}"/>
                        </div>
                    </div>
                </div>
                <!--map-->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label class="bmd-label-floating">{{ __('shopDetails.map') }}</label>
                        <input hidden value="{{ old('lat') ? old('lat') : $shop['lat'] }}" name="lat" id="lat" />
                        <input hidden value="{{ old('lng') ? old('lng') : $shop['lng'] }}" name="lng" id="lng"/>
                        <div id="map" style="
                        width: 100%;
                        height: 400px;
                        background-color: grey;
                        margin-top: 0px;
                        "></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-info pull-right">{{ __('shopDetails.button-update') }}</button>
            </form>
        </div>
    </div>
</div>
<script>
    function initMap() {
        let latitude = parseFloat($('#lat').val());
        let longitude = parseFloat($('#lng').val());
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
            draggable: true
        });
        google.maps.event.addListener(marker, 'dragend', function (evt) {
            latitude = evt.latLng.lat();
            longitude = evt.latLng.lng();
            $('#lat').val(latitude);
            $('#lng').val(longitude);
        });
    }
    
    showHideDays(true);
    
    function refreshDays(){
        let openDaysCheckboxes = document.getElementsByName('open-days');
        let s = '';
        for(let i=0;i<openDaysCheckboxes.length;++i){
            if(openDaysCheckboxes[i].checked)s += openDaysCheckboxes[i].value;
            else s += 0;
        }
        $('#days').val(s);
    }
    
    function showHideDays(isHide){
        let openDaysCheckboxes = document.getElementsByName('open-days');
        let labels = $('.day-label');
        if(isHide){
            for(let i=0;i<openDaysCheckboxes.length;++i){
                openDaysCheckboxes[i].checked = true;
                openDaysCheckboxes[i].style.display = 'none';
                labels[i].style.display = 'none';
                $('#days').val('1111111');
            }
        }else{
            for(let i=0;i<openDaysCheckboxes.length;++i){
                openDaysCheckboxes[i].style.display = 'block';
                labels[i].style.display = 'block';
            }
        }
    }
    $('#logo-check').change(function () {
        if (this.checked) {
            $('#logo_file_button').prop('disabled', true);
        } else {
            $('#logo_file_button').prop('disabled', false);
        }
    });
    
    $('#picture-check').change(function () {
        if (this.checked) {
            $('#picture_file_button').prop('disabled', true);
        } else {
            $('#picture_file_button').prop('disabled', false);
        }
    });
        
    
    $('#checkbox-0').change(function () {
        if(this.checked) showHideDays(true);
        else showHideDays(false);
    });
    
    $('#checkbox-time').change(function () {
        let open = $('#time_open');
        let close = $('#time_close');
        if(this.checked){
            $('.open-time').hide();
            $('.close-time').hide();
            open.val("00:00:00");
            close.val("00:00:00");
        }else{
            $('.open-time').show();
            $('.close-time').show();
            //open.val('');
            //close.val('');
        }
    });
    
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBd4sDjq20vvBUIN2Yc4ANrbdxzp_TF-qs&callback=initMap">
</script>
@endsection