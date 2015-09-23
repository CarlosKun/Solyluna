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
                <a href="{{route('admin.properties.edit',$property)}}" role="button" class="btn btn-success btn-xs">Edit</a>
                <a href="{{ route('admin.properties.bedrooms.create',$property) }}" role="button" class="btn btn-default btn-xs">add room</a>
                <a href="#" role="button" class="btn btn-danger btn-xs">Amenity</a>
                <a href="{{ route('admin.properties.bedrooms.index',$property) }}" role="button" class="btn btn-info btn-xs">show</a>
            </td>
        </tr>
    @endforeach
</table>