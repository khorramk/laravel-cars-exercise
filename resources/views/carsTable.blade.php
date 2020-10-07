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
        @foreach ($cars as $car)
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
                {{$car['topSpeed']}}
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
