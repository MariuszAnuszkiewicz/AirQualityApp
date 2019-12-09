@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row bg-light justify-content-center pt-3">
            <div class="form-group">
                {!! Form::open(['route' => ['airQualityApp.getResults'], 'method' => 'POST', 'id' => 'selectPlaceForm']) !!}
                @csrf
                {!! Html::decode(Form::Label('select-place-label', '<h6><b>Wybierz Miejsce: &nbsp</b></h6>')) !!}
                @for($i = 0; $i < count($allPlacesFromApiGios); $i++)
                    @php
                        $arrPlaces[] = $allPlacesFromApiGios[$i]['city']['name'];
                    @endphp
                @endfor
                {!! Form::select('select_place', ['miejsca' => array_unique($arrPlaces)], ['class' => 'selectpicker']) !!}
                {!! Form::submit('potwierdź', ['name' => 'select_submit_btn', 'id' => 'select-submit-btn', 'class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection