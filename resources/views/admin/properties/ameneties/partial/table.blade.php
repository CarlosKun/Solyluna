<table class="table table-striped">
    <tr>
        <th>Property name</th>
        <th>status</th>
        <th>Rooms</th>
        <th>service</th>
        <th>Property type</th>
        <th>Actions</th>
    </tr>
    @foreach($properties as $property)
        <tr data-id="{{ $property->id }}">
            <td>{{ $property->name }}</td>
            @if($property->status == 1)
                <td>Available</td>
                @else
                <td>Not Available</td>
            @endif

            <td>{{ $property->num_bedrooms}}</td>
            <td>{{ $property->service->service }}</td>
            <td>{{ $property->property_type->property_type }}</td>
            <td>
                <a href="{{route('admin.properties.edit',$property)}}">Edit</a>
                <a href="{{ route('admin.properties.bedrooms.index',$property->id) }}" class="btn-delete">add room</a>
            </td>
        </tr>
    @endforeach
</table>