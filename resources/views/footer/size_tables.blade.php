@extends('layout.app')


@section('content')
<h1 class="text-center" >TABELA ROZMIARÓW</h1>
    <HR>
    </HR>
   
   <div>
    <table class="table table-sm table-warning fst-italic fs-6" >
        <thead>
          <tr >
            <th scope="col">Rozmiary</th>
            <th scope="col">S</th>
            <th scope="col">M</th>
            <th scope="col">L</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Wzrost</th>
                <td>158-162</td>
                <td>162-166</td>
                <td>166-170</td>
            </tr>
          <tr>
            <th scope="row">Obwód klatki piersiowejt</th>
            <td>78-82</td>
            <td>82-90</td>
            <td>90-94</td>
          

          </tr>
          <tr>
            <th scope="row">Obwód w pasie</th>
            <td >62-70</td>
            <td>70-78</td>
            <td>78-86</td></td>

          </tr>
          <tr>
            <th scope="row">Obwód w biodrach w cm</th>
            <td >86-94</td>
            <td>94-102</td>
            <td>102-110</td></td>

          </tr>
          <tr>
            <th scope="row">Wewnatrzna gługość nogawki</th>
            <td >78</td>
            <td>80</td>
            <td>82</td></td>

          </tr>
        </tbody>
      </table>
   </div>
@endsection