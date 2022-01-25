@extends('layouts.main')

@section('content')
   
   <div class="container">
      <h1>Holidays</h1>
   

      <table class="table table-dark table-striped">
         <thead>
            <tr>
               <th scope="col"></th>
               <th scope="col">Indirizzo</th>
               <th scope="col">Data di arrivo</th>
               <th scope="col">Data di partenza</th>
               <th scope="col">Numero Stelle</th>
               <th scope="col">Piscina (si/no)</th>
               <th scope="col">Volo</th>
               <th scope="col">Descrizione</th>
               <th scope="col">Prezzo</th>
               <th scope="col">Ultima recens.</th>
            </tr>
         </thead>

         <tbody>
            
            @foreach ($holidayList as $holiday)
               
            <tr>
               <th scope="row">{{$holiday->id}}</th>
               <td>{{$holiday->address}}</td>
               <td>{{$holiday->data_arrivo}}</td>
               <td>{{$holiday->data_partenza}}</td>
               <td>{{$holiday->stelle_hotel}}</td>
               <td>{{$holiday->piscina}}</td>
               <td>{{$holiday->volo_incluso}}</td>
               <td>{{$holiday->descrizione}}</td>
               <td>{{$holiday->prezzo . "€"}}</td>
               <td>{{$holiday->ultima_recensione}}</td>

            @endforeach
         </tbody>
      </table>

   </div>

@endsection