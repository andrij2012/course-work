@extends('layout.app')

@section('content')
    <form method="get" action="search">
        <div class="mui--text-display4 mui--text-dark-secondary mui--text-center mb-50 mui--no-user-select">Search</div>
        <div class="mui-row">
            <div class="mui-col-md-10">
                <div class="mui-textfield">
                    <input type="text" name="q" value="{{ app('request')->input('q') }}">
                </div>
            </div>
            <div class="mui-col-md-2 mt-5">
                <button type="submit" class="mui-btn mui-btn--raised mui-btn mui-btn--raised mui-btn--primary">Search</button>
            </div>
        </div>
    </form>
@endsection
