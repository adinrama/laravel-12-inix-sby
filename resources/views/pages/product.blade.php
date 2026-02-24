@extends('layouts.main')

@section('page')
    Product Page
@endsection

@section('content')
    <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
        <table class="table">
            <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Price</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th>{{ $product['no'] }}</th>
                        <td>{{ $product['name'] }}</td>
                        <td>{{ $product['price'] }}</td>
                        <td>
                            <button class="btn btn-sm hover:bg-white hover:text-gray-800">Details..</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
