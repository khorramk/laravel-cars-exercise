<table class="table">
    <thead>
        <tr>
            <th scope="col">Make</th>
            <th scope="col">Model</th>
            <th scope="col">Colour</th>
            <th scope="col">Top speed</th>
            <th scope="col">view</th>
            <th scope="col">edit</th>
            <th scope="col">delete</th>
        </tr>
    </thead>
    <tbody>
        {{-- {{dd($cars[0]['make'])}} --}}
        @for ($i = 0; $i < count($cars); $i++)
        <tr>
            <td>
                {{ $cars[$i]['make'] }}
            </td>
            <td>
                {{$cars[$i]['model']}}
            </td>
            <td>
                {{$cars[$i]['colours']}}
            </td>
            <td>
                {{$cars[$i]['topSpeed']}}
            </td>
            <td>
                <a href="#"> view </a>
            </td>
            <td>
                <a href="edit"> edit<a>
            </td>
            <td>
                <a href="#">delete</a>
            </td>
        </tr>
        @endfor

    </tbody>
</table>
