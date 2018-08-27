var app = new Vue({
    el: "#app",
    data: {
        productos: [],
        pedidos: []
    },
    created() {
      axios.get('php/getProductos.php').then((res) => this.productos = res.data);  
    },
    methods: {
        addCart: function(producto){
            if(producto.cantidad){
                this.pedidos.push(producto);
            }else{
                return alert("Por favor ingrese una cantidad");
            }
        },
        eliminarPedido: function(pedido){
            var index = this.pedidos.indexOf(pedido);
            this.pedidos.splice(index,1)
        },
        comprar: function(){
            if(this.pedidos.length){
                this.pedidos.forEach(pedido => { 
                    axios.post('php/setProductos.php?id='+ pedido.id + '&');
                });
            }else{
                return alert("No puede comprar, si no tienes productos en el carrito");
            }
        }

    }
});