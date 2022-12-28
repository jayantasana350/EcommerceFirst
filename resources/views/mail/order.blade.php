<table class="table table-bordered">
    <thead>
      <tr>
        <th style="width: 10%; border: 1px solid #000;" scope="col">#</th>
        <th style="width: 40%; border: 1px solid #000;" scope="col">Product Title</th>
        <th style="width: 30%; border: 1px solid #000;" scope="col">Image</th>
        <th style="width: 10%; border: 1px solid #000;" scope="col">Price</th>
        <th style="width: 10%; border: 1px solid #000;" scope="col">Quantity</th>

      </tr>
    </thead>
    <tbody>
        @php
            $total = 0;
        @endphp
        @foreach ($data as $item)
            <tr>
                <th style="width: 10%; border: 1px solid #000;">{{ $loop->index+1 }}</th>
                <td style="width: 40%; border: 1px solid #000;">{{ $item->product->title }}</td>
                <td style="width: 30%; border: 1px solid #000;"><img width="50px;" src="https://cdn.shopify.com/s/files/1/0070/7032/files/tshirt-business8-min_838a2996-f195-4c1d-a4d1-034bc0a9a095.jpg?v=1597402071" alt=""></td>
                <td style="width: 10%; border: 1px solid #000;">{{ $item->product_unit_price }}</td>
                <td style="width: 10%; border: 1px solid #000;">{{ $item->quantity }}</td>
            </tr>
            @php
                $total += $item->quantity * $item->product_unit_price;
            @endphp
        @endforeach
        <tr>
            <th style="width: 10%; border: 1px solid #000;"></th>
            <td style="width: 40%; border: 1px solid #000;"></td>
            <td style="width: 30%; border: 1px solid #000; text-align: center;">Total Price: </td>
            <td style="width: 10%; border: 1px solid #000;">{{ $total }}</td>
            <td style="width: 10%; border: 1px solid #000; padding: 15px; flaot: right;"></td>
        </tr>
    </tbody>
  </table>
