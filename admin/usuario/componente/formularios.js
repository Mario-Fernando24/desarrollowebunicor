const app = new Vue({
    el: '#app',
    data:{
       tipo_usuario: '', 
       nombre: '',
       apellido: '',
       tipo_documento: '',
       num_identidad: '',
       usuario: '',
       password: '',
       repita: ''
    },
    computed: {
        rolesss(){
            // split separa a ua cadena como un arreglo
            if(this.tipo_usuario==''){
                return 'campo requerido roles';
            }
            else{
                return ''
            }
           
        },
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
        docum(){
            // split separa a ua cadena como un arreglo
            if(this.tipo_documento=='' || this.tipo_documento=='0'){
                return 'campo requerido Tipo documento ';
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
        usu(){
            // split separa a ua cadena como un arreglo
            if(this.usuario=='' ){
                return 'campo requerido usuario ';
            }
            else{
                return ''
            }
           
        },
        contra(){
            // split separa a ua cadena como un arreglo
            if(this.password=='' ){
                return 'campo requerido contraseña ';
            }
             if(this.password.length <7){
                return 'contraseña debe ser mayor de 6 caracteres';
            }
            else{
                return ''
            }
           
        },
        repi(){
            // split separa a ua cadena como un arreglo
            if(this.repita==''){
                return 'campo requerido ';
            }
            if(this.password!=this.repita ){
                return 'las contraseña no coinciden';
            }
            if(this.repita.length <7){
                return 'contraseña debe ser mayor de 6 caracteres';
            }
            if(this.password==this.repita ){
                return 'excelente, las contraseña si coinciden';
            }   
            
           
        },
 
        valida(){
            // split separa a ua cadena como un arreglo
            if(this.tipo_usuario!='' && this.password.length>6 && this.nombre!='' && this.apellido!='' && this.tipo_documento!='' && this.num_identidad!='' && 
            this.usuario!='' && this.password!='' && this.repita!='' && this.repita==this.password){
                return true;
            } 
        },
       
       
    },
    });

