@extends('layouts.template')
@section('title')
<title>{{ $pageTitle }} - {{ config('app.name') }}</title>
@endsection
@section('content')
@if($shop['reviews'] == -1)
<script>location.href="{{ URL::to('/') }}"</script>
@else
<div class="card">
    <div class="card-header card-header-info">
        <h4 class="card-title">{{ __('pages.reviews') }}</h4>
        @if($shop['reviews'] > 0)
            <p class="card-category">
                {{ trans_choice('dashboard.reviews-count-label', $shop['reviews']) }}
            </p>
        @endif
    </div>
    <div class="card-body table-responsive">
        <table class="table-hover">
            <thead class="text-info">
                <tr>
                    <th></th>
                    <th style="width: 5%;"></th>
                </tr>
            </thead>
            <tbody>
                @if($shop['reviews'] > 4)
                    @foreach ($reviews as $item)
                        <tr>
                            <td>
                                {{ $item['review_text'] }}
                            </td>
                            <td>
                                <a href="{{ URL::to('reviews/'.$item['id']) }}">
                                    <button type="button" class="btn btn-info">{{ __('reviews.btn-details') }}</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr><td>{{ trans_choice('dashboard.reviews-count-label', 0) }}</td></tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <a href="{{ URL::to('/') }}">
            <button class="btn btn-info" style="float: right;">{{ __('pages.btn-back') }}</button>
        </a>
    </div>
</div>
@endif
@endsection