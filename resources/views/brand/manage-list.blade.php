@if($data->count())
    <div style="margin:10px 0;">
        {{$data->links()}}
    </div>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr class="data-item master">
            @if(input('wcrud') || input('wselect'))
                <th><span class="select-box"></span></th>
            @endif
                <th>#</th>
                <th>Brand Name</th>
                @if(input('wcrud'))
                    <th>
                        <div class="dropdown a-dropdown teste">
                            <a href="#" class="btn dropdown-toggle"><span class="toggle-text">Bulk Actions </span><i style="margin:0 3px;" class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <form action="{{route('brands_delete')}}" method="POST" class="delete-form">
                                       @csrf
                                       @method('DELETE')
                                       @foreach($data as $key=>$d)
                                            <input type="hidden" name="ids[{{$key}}]" id="">
                                       @endforeach
                                            <input type="submit" value="Delete all" class="btn">
                                    </form>
                                </li>
                                <li><a href="" class="menu-item" data-text="Clear all" >Clear all</a></li>
                            </ul>
                        </div>
                    </th>
                @endif
            </tr>
            </thead>
            <tbody>
                @php
                    $index = ($data->currentPage() - 1)*$data->perPage() +1;
                @endphp
                @foreach ($data as $d)
                    <tr class="data-item" data-id ={{$d->id}}>
                        @if(input('wcrud') || input('wselect'))
                            <td>
                                <span class="select-box ">
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