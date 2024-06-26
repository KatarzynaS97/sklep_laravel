@extends('layout.app')

@section('content')
    <h1 class="text-center" >CENY DOSTAWY</h1>
    <HR>
    </HR>
   
    </P>

    <section class=" contact">

        <div class="pole_info_shopping_prices ">

                  
               
                <h5 class="fw-bolder naglowek_contact"></h5>
                <img src="img/dostawa1.png" alt="autp dostawcze" class="zdjecie_dostawa">
                <table class="table table-sm">
                    <thead>
                      <tr>
                        <th scope="col"></th>
                        <th scope="col">DPD</th>
                        <th scope="col">InPost</th>
                        <th scope="col">Poczta Polska</th>
                        <th scope="col"> DHL</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1.Punkt odbioru</th>
                        <td>15zł</td>
                        <td>13zł</td>
                        <td>15zł</td>
                        <td>10zł</td>

                      </tr>
                      <tr>
                        <th scope="row">2.Paczkomat</th>
                        <td>9.99zł</td>
                        <td>10.99</td>
                        <td>9.99zł</td>
                        <td>14zł</td>

                      </tr>
                      <tr>
                        <th scope="row">3.Kurier</th>
                        <td >20zł</td>
                        <td>15zł</td>
                        <td>17zł</td>
                        <td>13zł</td>

                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>



    
        </div>

    </section>
@endsection
