<table>
    <thead>
    <tr>
        <th>SL</th>
        <th>Product Title</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Purchaces Date</th>
    </tr>
    </thead>
    <tbody>
    @foreach($orders as $order)
        <tr>
            <td>{{ $loop->index+1 }}</td>
            <td>{{ $order->product->title }}</td>
            <td>{{ $order->product_unit_price }}</td>
            <td>{{ $order->quantity }}</td>
            <td>{{ $order->created_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
