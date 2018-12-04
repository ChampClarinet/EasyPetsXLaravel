@extends('layouts.template')
@section('title')
<title>{{ $pageTitle }} - {{ config('app.name')}}</title>    
@endsection
@section('content')
    <div class="row">
        <!--likes-->
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">favorite</i>
                    </div>
                    <p class="card-category">{{ __('dashboard.like') }}</p>
                    <h3 class="card-title">{{ $shop['likes'] }}</h3>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
        <!--review count-->
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">comment</i>
                    </div>
                    <p class="card-category">{{ __('dashboard.review') }}</p>
                    <h3 class="card-title">{{ $shop['reviews'] }}</h3>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
        <!--reply count-->
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">reply</i>
                    </div>
                    <p class="card-category">{{ __('dashboard.reply') }}</p>
                    <h3 class="card-title">{{ $shop['replies'] }}</h3>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <!--review-->
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header card-header-info">
                    <h4 class="card-title">{{ __('pages.reviews') }}</h4>
                </div>
                <div class="card-body">
                    <h4>{{ trans_choice('dashboard.reviews-count-label', $shop['reviews']) }}</h4>
                    @if($shop['reviews'] > 0)
                        <a href="{{  URL::to('reviews') }}">
                            <button class="btn btn-info" style="float: right;">{{ __('dashboard.button-view') }}</button>
                        </a>
                    @endif
                </div>
            </div>
        </div>
        <!--reply-->
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header card-header-info">
                    <h4 class="card-title">{{ __('pages.replies') }}</h4>
                </div>
                <div class="card-body">
                    <h4>{{ trans_choice('dashboard.replies-count-label', $shop['replies']) }}</h4>
                    @if($shop['replies'] > 0)
                        <a href="{{  URL::to('replies') }}">
                            <button class="btn btn-info" style="float: right;">{{ __('dashboard.button-view') }}</button>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection