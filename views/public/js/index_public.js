Vue.component('footer-bh',{
    template: `
    <div>
        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Alpha Vino</h5>
                        <h6>
                            Misión
                        </h6>
                        <p class="grey-text text-lighten-4">
                            
                        </p>
                        <h6>
                            Visión
                        </h6>
                        <p class="grey-text text-lighten-4">

                        </p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Redes Sociales</h5>
                        <ul>
                            <li>
                                <a class="grey-text text-lighten-3" href="#!">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="grey-text text-lighten-3" href="#!">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="grey-text text-lighten-3" href="#!">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright center">
                <div class="container">
                    © 2019 Alpha Vino
                </div>
            </div>
        </footer>
    </div>
    `
})
const app = new Vue({
    el: '#app',
    data:{
        session: 0,
        inse: true,
        reg: false,
        olvidar: false,
        modalC: false,
        vinox: [],
        vinos: [],
        busc: '',
        catex: [],
        cates: [],
        bodegax: [],
        bodegas: [],
        m0: false,
        m1: true,
        filtros: '',

        //Carrito
        carrito: [],
        total: 0,
        p0: '',
        p1: '',
        p2: '',
        p3: '',
        p4: '',
        p5: '',
        p6: '',
        //Usuarios
        usuario: [],
    },
    mounted(){
        this.verificar()
        this.getProductos()
        this.getCategorias()
        this.getBodega()
    },
    methods:{
        //Agregar, Borrar al carrito
        addCarrito(id,nombre,precio,img){
            var repetir = -1;
            this.total = 0;
            if(this.carrito.length == 0){
                var arreglo = {
                    "cid": this.carrito.length+1,
                    "id": id,
                    "nombre": nombre,
                    "precio": precio,
                    "img": img,
                    "cantidad": 1
                }
                this.carrito.push(arreglo)
            }
            else{
                for(let i= 0; i < this.carrito.length; i++){
                    if(nombre == this.carrito[i].nombre){
                        repetir = i;
                        break;
                    }
                }
                if(repetir == -1){
                    var arreglo = {
                        "cid": this.carrito.length+1,
                        "id": id,
                        "nombre": nombre,
                        "precio": precio,
                        "img": img,
                        "cantidad": 1
                    }
                    this.carrito.push(arreglo)
                }
                else{
                    this.carrito[repetir].cantidad += 1;
                    this.carrito[repetir].precio = parseFloat(this.carrito[repetir].precio) + parseFloat(this.carrito[repetir].precio);
                }
            }
            for (let i = 0; i < this.carrito.length; i++) {
                this.total = parseFloat(this.total) + parseFloat(this.carrito[i].precio)
            }
        },
        deleteCarrito(id){
            this.total = 0;
            this.carrito.splice(id-1, 1);
            console.log(this.carrito)
            for (let i = 0; i < this.carrito.length; i++) {
                this.carrito[i].cid = (i+1);
                this.total = parseFloat(this.total) + parseFloat(this.carrito[i].precio)
            }
        },
        getCarrito(){
            axios({
                url: 'core/api/productos.php?action=carrito',
                method: 'post',
                data: this.carrito
              })
            .then(res=>{
                console.log(res)
            })
        },
        login(e){
            axios.post('core/api/usuarios.php?action=login',new FormData(e.target))
            .then(res=>{
                console.log(res)
                let vali = res.data.estatus;
                if (vali[0].val == 0) {
                    this.usuario = res.data.usuario
                    this.session = this.usuario[0].id
                    this.p0 = '';
                    this.p1 = '';
                    e.target.reset();
                }
            })
        },
        logout(){
            axios.post('core/api/usuarios.php?action=logout')
            .then(res=>{
                console.log(res)
                    this.session = 0;
            })
        },
        verificar(){
            axios.post('core/api/usuarios.php?action=verify')
            .then(res=>{
                console.log(res)
                let vali = res.data.estatus;
                if (vali[0].val == 0) {
                    this.usuario = res.data.usuario
                    this.session = this.usuario[0].id
                }
            })
        },
        getCambiar(e){
            var url = "core/api/usuarios.php?action=cambiar";
            if (this.p5 != '') {
                url = "core/api/usuarios.php?action=cambiar&sicontra=si"
            }
            axios.post(url,new FormData(e.target))
            .then(res=>{
                console.log(res)
                if (res.data.error[0].val == 0) {
                    this.p5 = ''
                }
            })
        },
        getIngresar(e){
            if (this.p6 == this.p5) {
                axios.post('core/api/usuarios.php?action=ingresar',new FormData(e.target))
                .then(res=>{
                    console.log(res)
                    if (res.data.error[0].val == 0) {
                        this.p0 = '';
                        this.p1 = '';
                        this.p2 = '';
                        this.p3 = '';
                        this.p4 = '';
                        this.p5 = '';
                        this.p6 = '';
                        e.target.reset();
                        this.inse=true;
                        this.reg=false;
                    }
                })
            }
            else{
                
            }
        },
        getProductos(){
            axios.get('core/api/productos.php?action=leerP')
            .then(res=>{
                this.vinox = res.data.vinos
                this.vinos = this.vinox
            })
        },
        getCategorias(){
            axios.get('core/api/productos.php?action=leerC')
            .then(res=>{
                console.log(res)
                this.catex = res.data.categoria
                this.cates = this.catex
            })
        },
        getBodega(){
            axios.get('core/api/productos.php?action=leerM')
            .then(res=>{
                console.log(res)
                this.bodegax = res.data.bodega
                this.bodegas = this.bodegax
            })
        },
        buscar(y,e){
            this.filtros = e
            if(y==0)
            {
                this.vinos = this.vinox.filter(function (elem) {
                    let el1 = elem.vino.toLowerCase();
                    if (e === '') return true;
                    else return el1.indexOf(e.toLowerCase()) > -1;

                })
            }
            else if(y==1)
            {
                this.vinos = this.vinox.filter(function (elem) {
                    let el1 = elem.tipo.toLowerCase();
                    if (e === '') return true;
                    else return el1.indexOf(e.toLowerCase()) > -1;

                })
            }
            else if(y==2)
            {
                this.vinos = this.vinox.filter(function (elem) {
                    let el1 = elem.marca.toLowerCase();
                    if (e === '') return true;
                    else return el1.indexOf(e.toLowerCase()) > -1;

                })
            }
        }
    }
})