const app = new Vue({
    el: '#app',
    data:{
       nombre: ''
    },
    computed: {
        valnombre(){
            // split separa a ua cadena como un arreglo
            if(this.nombre==''){
                return 'campo requerido programa';
            }
            else{
                return 'excelente'
            }
           
        },
        valida(){
            // split separa a ua cadena como un arreglo
            if(this.nombre!=''){
                return true;
            } 
        },
    },
    });


