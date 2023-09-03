<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Type</th>
            <th>Condition </th>
            <th>Quantity</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $Barang)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $Barang->name }}</td>
                <td>{{ $Barang->type }}</td>
                <td>{{ $Barang ->condition }}</td>
                <td>{{ $Barang ->quantity }}</td>
           
            </tr>
        @endforeach
    </tbody>
</table>