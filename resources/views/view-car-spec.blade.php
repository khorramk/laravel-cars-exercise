@extends('welcome')
@section('content')

<table class="table">
    <thead class="">
        <tr>
            <th scope="col">Make</th>
            <th scope="col">Model</th>
            <th scope="col">Colour</th>
            <th scope="col">Top speed</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                {{ $car['make'] }}
            </td>
            <td>
                {{$car['model']}}
            </td>
            <td>
                {{$car['colours']}}
            </td>
            <td>
                {{$car['topSpeed']}}mph
            </td>
        </tr>

    </tbody>
</table>

@endsection
