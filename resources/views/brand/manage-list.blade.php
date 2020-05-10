@if($data->count())
    <div style="margin:10px 0;">
        {{$data->links()}}
    </div>

    <div class="table-wrapper">
        <table>
            <thead>
                <th>#</th>
                <th>Brand Name</th>
            </thead>
            <tbody>
                @php
                    $index = ($data->currentPage() - 1)*$data->perPage() +1;

                @endphp
                @foreach ($data as $d)
                    <tr>
                        <td>{{$index}}</td>
                        <td>{{$d->name}}</td>
                    </tr>
                    @php
                        $index++;
                    @endphp
                @endforeach
            </tbody>
        </table>
    </div>
@else
    <p>no data found</p>
@endif
