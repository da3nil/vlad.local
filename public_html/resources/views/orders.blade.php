@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Заказы</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table style="  width: 100%;
                                        display: block;
                                        overflow-x: auto;
                                        white-space: nowrap;"
                               class="table">
                            <tr>
                                <th class="border-top-0">ID заказа</th>
                                <th class="border-top-0">ID клиента</th>
                                <th class="border-top-0">ID товара</th>
                                <th class="border-top-0">Стоимость</th>
                                <th class="border-top-0">Дата</th>
                            </tr>


                        @foreach($orders as $order)
                            <tr>
                                <td>
                                    {{$order->id}}
                                </td>
                                <td>
                                    {{$order->c_id}}
                                </td>
                                <td>
                                    {{$order->or_product}}
                                </td>
                                <td>
                                    {{$order->or_sum}} Р
                                </td>
                                <td>
                                    {{$order->or_date}}
                                </td>
                            </tr>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
