const app = new Vue({
    el: '#app',
    data:{
     
       nombre: '',
       apellido: '',
       num_identidad: ''
    },
    computed: {

        metonombress(){
            // split separa a ua cadena como un arreglo
            if(this.nombre==''){
                return 'campo requerido nombre';
            }
            else{
                return ''
            }
           
        },
        metapellido(){
            // split separa a ua cadena como un arreglo
            if(this.apellido==''){
                return 'campo requerido apellido';
            }
            else{
                return ''
            }
           
        },
        docidentidadum(){
            // split separa a ua cadena como un arreglo
            if(this.num_identidad=='' ){
                return 'campo requerido numero de documento ';
            }
            else{
                return ''
            }
           
        },
        valida(){
            // split separa a ua cadena como un arreglo
            if(this.nombre!='' && this.apellido!='' && this.num_identidad!=''){
                return true;
            } 
        },
       
       
    },
    });

