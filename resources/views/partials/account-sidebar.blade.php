{{-- <ul>
    <li><a href="#">Link Item</a></li>
    <li><a href="#">Link Item</a></li>
    <li><a href="#">Link Item</a></li>
    <li><a href="#">Link Item</a></li>
    <li><a href="#">Link Item</a></li>
    <li><a href="#">Link Item</a></li>
    <li><a href="#">Link Item</a></li>

</ul> --}}

{{-- @php
 
 $routes = [
     ['text'=> 'brands' , 'name' => 'brands_management' , 'params'=>['wcrud' =>1]],

];

@endphp --}}
<ul class="classe">
    @foreach (auth()->user()->roles as $role)
        @includeIf('partials.'.$role->role.'-account-sidebar')
    @endforeach
    {{-- <li><a href="#">{{$roles[0]->text}}</a></li>
    @foreach ($roles as $role)
        <li><a href="#">{{$role->text}}</a></li>
    @endforeach --}}
</ul>
<style>
    .classe{
        /* padding-left: 50px; */
        /* border: 2px solid red; */
    }
    .classe ul li{
        /* border: 1px solid red; */
        margin-left: 50px;
        align-self: center;

    }
</style>