<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket de Compra</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        .ticket{
            width: 400px;
            margin: auto;
            padding: 10px;
            border: 1px solid #000;
        }
        .titulo{
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            color: #ff0000;
        }
        .detalle{
            text-align: left;
            margin-top: 10px;
        }
        .total{
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
            margin-left: 210px;
        }
        .footer{
            margin-top: 20px;
            font-weight: bold;
            color: #0000ff;
            text-align: center;
        }
        table{
            width: 100%;
            border-collapse: collapse;
        }
        th, td{
            border-bottom: 1px solid #000;
            padding: 5px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="ticket">
        <p class="titulo">Ticket de Compra de Ventas y Almacén</p>
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
        <p class="total">
            <strong>Total de venta: </strong> ${{ $venta->total_venta }}
        </p>
        <p class="footer">!!!!!Gracias por su Compra realizada!!!!!</p>
    </div>
</body>
</html>