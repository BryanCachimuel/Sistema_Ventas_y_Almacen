<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket de Compra</title>
</head>
<body>
    <div class="ticket">
        <p>Ticket de Compra de Ventas y Almacén</p>
        <p>
            <strong>Cajero: </strong> {{ $venta->nombre_usuario }}
        </p>
        <p>
            <strong>Fecha: </strong> {{ $venta->created_at }}
        </p>

        <div class="detalle">
            <table border="1">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detalles as $item)
                        <tr>
                            <td class="text-center">{{ $item->nombre_producto }}</td>
                            <td class="text-center">{{ $item->cantidad }}</td>
                            <td class="text-center">${{ $item->precio_unitario }}</td>
                            <td class="text-center">${{$item->sub_total }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <p>
            <strong>Total de venta: </strong> ${{ $venta->total_venta }}
        </p>
        <p>Gracias por su Compra realizada</p>
    </div>
</body>
</html>