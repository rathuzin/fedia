@extends('template')

@section('content')
@if (Session::has('message'))
<div class="templatemo-content-widget {{$color}}-bg">
    <i class="fa fa-times"></i>                
    <div class="media">
        <div class="media-body">
            <h2>{{Session::get('message')}}</h2>
        </div>        
    </div>                
</div>
@endif

<div class="templatemo-content-widget white-bg">
    <h2 class="margin-bottom-10">Premiações</h2>
</div>


<div class="templatemo-flex-row flex-content-row">
    <div class="templatemo-content-widget no-padding col-2">
        <div class="panel panel-default table-responsive">
            <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                    <tr>
                        <th colspan="2">Liga</th>
                    </tr>
                    <tr>
                        <th>Conquista</th>
                        <th>Valor</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Campeão</td>
                        <td>€ 3.000.000,00</td>
                    </tr>
                    <tr>
                        <td>Campeão do turno</td>
                        <td>€ 15.000.000,00</td>
                    </tr>
                    <tr>
                        <td>Vice-Campeão do turno</td>
                        <td>€ 13.000.000,00</td>
                    </tr>
                    <tr>
                        <td>Terceiro colocado do turno</td>
                        <td>€ 12.250.000,00</td>
                    </tr>
                    <tr>
                        <td>Quarto colocado do turno</td>
                        <td>€ 11.500.000,00</td>
                    </tr>
                    <tr>
                        <td>Quinto colocado do turno</td>
                        <td>€ 10.750.000,00</td>
                    </tr>
                    <tr>
                        <td>Sexto colocado do turno</td>
                        <td>€ 10.000.000,00</td>
                    </tr>
                    <tr>
                        <td>Sétimo colocado do turno</td>
                        <td>€ 9.250.000,00</td>
                    </tr>
                    <tr>
                        <td>Oitavo colocado do turno</td>
                        <td>€ 8.500.000,00</td>
                    </tr>
                    <tr>
                        <td>Nono colocado do turno</td>
                        <td>€ 7.750.000,00</td>
                    </tr>
                    <tr>
                        <td>Décimo colocado do turno</td>
                        <td>€ 7.000.000,00</td>
                    </tr>
                    <tr>
                        <td>Artilharia</td>
                        <td>€ 2.000.000,00</td>
                    </tr>
                    <tr>
                        <td>Melhor Jogador</td>
                        <td>€ 2.000.000,00</td>
                    </tr>
                    <tr class="linha_total">
                        <td>Premiação Total da Liga: </td>
                        <td>€ 111.000.000,00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="templatemo-content-widget no-padding col-2">
        <div class="panel panel-default table-responsive">
            <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                    <tr>
                        <th colspan="2">Copa</th>
                    </tr>
                    <tr>
                        <th>Conquista</th>
                        <th>Valor</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Passar das Quartas de Final</td>
                        <td>€ 4.000.000,00</td>
                    </tr>
                    <tr>
                        <td>Passar das Semifinais</td>
                        <td>€ 8.000.000,00</td>
                    </tr>
                    <tr>
                        <td>Campeão</td>
                        <td>€ 3.000.000,00</td>
                    </tr>
                    <tr>
                        <td>Artilharia</td>
                        <td>€ 2.000.000,00</td>
                    </tr>
                    <tr class="linha_total">
                        <td>Premiação Total da Liga: </td>
                        <td>€ 17.500.000,00</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="panel panel-default table-responsive">
            <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                    <tr>
                        <th colspan="2">SuperCopa</th>
                    </tr>
                    <tr>
                        <th>Conquista</th>
                        <th>Valor</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Campeão</td>
                        <td>€ 2.000.000,00</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="panel panel-default table-responsive">
            <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                    <tr>
                        <th colspan="2">Patrocínio</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>€ 15.000.000,00 na primeira temporada, adicionando € 2.500.000,00 em cada temporada subsequente.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection
