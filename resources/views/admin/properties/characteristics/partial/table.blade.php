<table class="highlight striped bordered centered responsive-table">
    <thead>
    <tr>
        <th>Category</th>
        <th>Amenity</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($amenities as $amenity)
        <tr>
            <td class="">{{ $amenity->category }}</td>
            <td class="">{{ $amenity->amenity }}</td>
            <td class="">
                <a href="{{ route('admin.properties.characteristic.edit', $amenity) }}" class="right-align"><i class="material-icons">settings</i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>