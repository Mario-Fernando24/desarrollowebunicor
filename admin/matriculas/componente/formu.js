const app = new Vue({
    el: '#app',
    data:{
       id_estudiante: '',
       id_curso: ''
    },
    computed: {
        estudiante(){
            // split separa a ua cadena como un arreglo
            if(this.id_estudiante==''){
                return 'campo requerido estudiante';
            }
            else{
                return ''
            }
           
        },
        curso(){
            // split separa a ua cadena como un arreglo
            if(this.id_curso==''){
                return 'campo requerido curso';
            }
            else{
                return ''
            }
           
        },
        valida(){
            // split separa a ua cadena como un arreglo
            if(this.id_estudiante!='' && this.id_curso!=''){
                return true;
            } 
        },
    },
    });


