const app = new Vue({
    el: '#app',
    data:{
       pregunta: ''
    },
    computed: {
        valnombre(){
            // split separa a ua cadena como un arreglo
            if(this.pregunta==''){
                return 'campo requerido pregunta';
            }
            else{
                return ''
            }
           
        },
       
        valida(){
            // split separa a ua cadena como un arreglo
            if(this.pregunta!=''){
                return true;
            } 
        },
    },
    });


