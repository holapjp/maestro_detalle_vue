<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js" integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy" crossorigin="anonymous"></script>
    <title>MAESTRO DETALLE - VUE</title>
</head>
<body>
    <div class="container" id="app">
        <h1 class="text-center m-2 font-weight-bold">Productos</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>PRECIO</th>
                    <th>CANTIDAD</th>
                    <th>COMPRAR</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="producto in productos">
                    <td v-text="producto.id"></td>
                    <td v-text="producto.nombre"></td>
                    <td v-text="producto.precio"></td>
                    <td>
                        <input type="number" v-model="producto.cantidad" class="form-control">
                    </td>
                    <td>
                        <button class="btn btn-primary btn-block" @click="addCart(producto)">Comprar <i class="fa fa-cart-plus"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
        <h2 class="text-center m-2 font-weight-bold">Pedidos</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>PRECIO</th>
                    <th>CANTIDAD</th>
                    <th>OPCIONES</th>
                </tr>
            </thead>
            <body>
                <tr v-for="pedido in pedidos">
                    <td v-text="pedido.nombre"></td>
                    <td v-text="pedido.precio"></td>
                    <td v-text="pedido.cantidad"></td>
                    <td>
                        <button class="btn btn-danger" @click="eliminarPedido(pedido)"><i class="fa fa-times"></i></button>
                    </td>
                </tr>
            </body>
            <tfoot>
                <tr>
                    <th colspan="4">
                        <button class="btn btn-success btn-block btn-lg" @click="comprar()"><i class="fa fa-share-square"></i> Comprar</button>
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="app.js"></script>
</body>
</html>