@if($data->count())
    <div style="margin:10px 0;">
        {{$data->links()}}
    </div>

    <div class="table-wrapper">
        <table>
            <thead>
            @if(input('wcrud') || input('wselect'))
                <th></th>
            @endif
                <th>#</th>
                <th>Brand Name</th>
                @if(input('wcrud'))
                    <th>
                        <div class="dropdown a-dropdown teste">
                            <a href="#" class="btn dropdown-toggle"><span class="toggle-text">Bulk Actions </span><i style="margin:0 3px;" class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="" class="menu-item" data-text="Delete all">Delete all</a></li>
                                <li><a href="" class="menu-item" data-text="Clear all" >Clear all</a></li>
                            </ul>
                        </div>
                    </th>
                @endif

            </thead>
            <tbody>
                @php
                    $index = ($data->currentPage() - 1)*$data->perPage() +1;

                @endphp
                @foreach ($data as $d)
                    <tr>
                        @if(input('wcrud') || input('wselect'))
                            <td>
                                <span class="select-box">

                                </span>
                            </td>
                        @endif
                        <td>{{$index}}</td>
                        <td>{{$d->name}}</td>
                        @if(input('wcrud'))
                        <td>
                            <form action="{{route('brand_delete' , ['id' => $d->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn" value="delete">
                            </form>
                        </td>
                        @endif
                    </tr>
                    @php
                        $index++;
                    @endphp
                @endforeach
            </tbody>
        </table>
    </div>
    <div style="margin:10px 0;">
        {{$data->links()}}
    </div>
@else
    <p>no data found</p>
@endif

<script>
    dropdowns();
</script>