@extends('layouts.main')

@section('content')
    <div class="container col-md-8 bg-light mt-5">
        <div class="row pt-3">
            <table class="table">
                <thead class="thead-dark">
                   <tr>
                      <th class="text-center">Id</th>
                      <th class="text-center">Miejscowość</th>
                      <th class="text-center">Stacja Pomiarowa</th>
                      <th class="text-center">Akcja</th>
                   </tr>
                </thead>
                <tbody>
                @foreach ($stations as $station)
                   <tr>
                      <td class="text-center">{{ $station['id'] }}</td>
                      <td class="text-center">{{ $station['city']['name'] }}</td>
                      <td class="text-center">{{ $station['stationName'] }}</td>
                      <td class="text-center">
                         <button class="btn btn-primary" id="showResearchParamsBtn" data-id="{{ $station['id'] }}">Pokaż Badane Parametry</button>
                         <button class="btn btn-success" id="showQuantityAirBtn" data-id="{{ $station['id'] }}">Pokaż Jakość Powietrza</button>
                      </td>
                   </tr>
                @endforeach
                </tbody>
            </table>
            <button class="btn btn-danger ml-2" onclick="location.href = '{{ $back }}'">Powrót</button>
        </div>
        <div class="row col-md-12 mt-5">
            <div class="research-box col-md-8">
               <span class="close cl1"><i class="fa fa-times" aria-hidden="true"></i></span>
               <div class="research-params-table"></div>
            </div>
            <div class="air-box col-md-4">
               <span class="close cl2"><i class="fa fa-times" aria-hidden="true"></i></span>
               <div class="quantity-air-table"></div>
            </div>
        </div>
    </div>
@endsection