<template>
<div>
    <div class="col-lg-12">
        <b-button v-b-modal.moda-registro @click="anadir_registro()"
        type="button" class="btn btn-wangir btn-lg" data-toggle="button" aria-pressed="false" style="margin-bottom: 5px; margin: 5px;" 
        >Añadir registro
        </b-button>
        <div class="panel-body" style="overflow-x:auto;">
            <table class="table table-striped table-bordered table-hover compact nowrap" id="myTable_" >
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Password</th>
                        <th>Avatar</th>
                        <!--
                        <th>Celular</th>
                        <th>Creado en</th>
                        <th>Modificador en</th>
                        <th>Ultima Modificación</th>
                        -->
                        <th>Acciones</th>
                    </tr>

                </thead>
                <tbody>

                    <tr v-for="data in datas" v-bind:key="data.id"> 
                        <td>{{ data.id }}</td>
                        <td>{{ data.nombre }}</td>
                        <td>{{ data.email }}</td>
                        <td>{{ data.password }}</td>
                        <td>{{ data.avatar }}</td>
                        <!--
                        <td>{{ data.celular }}</td>
                        <td>{{ data.created_at }}</td>
                        <td>{{ data.updated_at }}</td>
                        <td>{{ data.updated_at }}</td>
                        -->
                        <td>
                            <b-button v-b-modal.moda-registro @click="editar_registro(data.id)"
                                type="button" class="btn btn-wangir btn-lg" data-toggle="button" aria-pressed="false" style="margin-bottom: 5px; margin: 5px;" 
                            >Editar
                            </b-button>
                             <b-button v-b-modal.moda-eliminar @click="eliminar_registro(data.id)"
                                type="button" class="btn btn-danger btn-lg" data-toggle="button" aria-pressed="false" style="margin-bottom: 5px; margin: 5px;" 
                            >Eliminar
                            </b-button>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    


    <b-modal id="moda-registro"  size="xl" >
      <template slot="modal-title">{{mensaje_formulario}} </template>
        <!--
        <div v-if="editar_producto==true"><form ref="form" action v-on:submit.prevent="newproducto(venta.id)"></div>
        -->
        <div >
          </div>
          <form ref="form"   v-on:submit.prevent="formulario()">
            <div class="row"> 
                <div class="col-md-12">
               <input type="text" v-model="input_user_id">   
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" v-model="input_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  <div v-if="errors && errors.name" class="text-danger">{{ errors.name[0] }}</div>
       

                </div> 
                 <div class="form-group">
                  <label for="exampleInputEmail1">Correo</label>
                  <input type="email" v-model="input_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  <b-alert v-if="validacion.email" variant="danger" show>{{ validacion.email[0] }}</b-alert>

                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
        
    </b-modal>

<!--
<b-modal ref="my-modal" hide-footer title="Using Component Methods">
  -->
<b-modal id="moda-eliminar"  size="xl" >
      <div class="d-block text-center">
        <input type="text" v-model="input_user_id">
        <h3>¿Desea eliminar el registro permanente?</h3>
      </div>
      <b-button class="mt-3 btn btn-danger " @click="eliminar_registro_delete()">Eliminar</b-button>
</b-modal>



</div>
</template>

<script type="application/javascript">
import Vue from "vue";
import VueSingleSelect from "vue-single-select";

//import VueToast from "vue-toast-notification";
//import "vue-toast-notification/dist/index.css";

//https://www.npmjs.com/package/vue-toastr-2
import VueToastr2 from "vue-toastr-2";
import "vue-toastr-2/dist/vue-toastr-2.min.css";
window.toastr = require("toastr");
Vue.use(VueToastr2);

export default {
  data() {
    //venta_id: "";
    //operacion: "";
    //form para actualizar

    //actualiza_producto_id: "";
    //actualiza_cantidad: "";

    return {
      validacion: [],
      editar_dato: false,
      //editar_producto: false,
      data: [],
      datas: [],

      
      input_user_id:[],
      input_name:[],
      input_email:[],
      errors: {},
      mensaje_formulario: '',
      
    };
  },
  mounted() {
    //this.fetchArticles();
    this.consulta();
    axios.get("productos_all").then(response => {
      this.productos_all = response.data;
    });
    axios.get("mesa/lista_mesa").then(response => {
      this.lista_mesa = response.data;
    });
  },
  components: {
    VueSingleSelect,
    VueToastr2
  },
  methods: {
    consulta(){
        axios.get(`users/consulta`).then(response => {
        this.datas = response.data.data;
        });
    },
    eliminar_registro(data_id){
    this.input_user_id=data_id;
    },
    eliminar_registro_delete(){
      var data_id=this.input_user_id;
      axios.delete(`users/${this.input_user_id}`).then(response => {
        const data = response.data;
        if(response.data.id){
              this.validacion='';
              this.$toastr.info("Operacio exitosa", "Datos Eliminados");
              this.consulta();
        }
      });
      
    },
    anadir_registro(){
      this.editar_dato = false;
      this.mensaje_formulario='Añadir un nuevo registro'
    },
    formulario(){

      const data = {
        id: this.input_user_id,
        name: this.input_name,
        email: this.input_email
      };
      
      if(this.editar_dato == true){
        axios.put(`users/${this.input_user_id}`, data)
        .then(response => {

            const datos = response.data;
            if(response.data.errors){
              this.$toastr.warning('Verifique los datos', 'Verifique los datos');
              this.validacion=response.data.errors;
            }
            if(response.data.id){
              this.validacion='';
              this.$toastr.success("Operacio exitosa", "Datos modificados");
              this.consulta();

            }
        },
        (err) => {
          console.log("Err", err);
            this.$toastr.warning(err, 'Error en el servidor');
            this.$toastr.warning(err.message, 'Error en el servidor');
        });

      }else{
        
        axios.post('users', data).then(response => {
            const datos = response.data;
            if(response.data.errors){
              this.$toastr.warning('Verifique los datos', 'Verifique los datos');
              this.validacion=response.data.errors;
            }
            if(response.data.id){
              this.validacion='';
              this.$toastr.success("Operacio exitosa", "Datos modificados");
              this.consulta();

            }
        });

      }

    },
   
    editar_registro(data_id){//show 
        this.mensaje_formulario='Editar un registro'
        axios.get(`users/${data_id}`).then(response => {
            const data = response.data;
            if(!response.data){
              this.$toastr.warning("Operacio no exitosa", "Regitro no obtenido");
            }else{
              this.$toastr.success("Operacio exitosa", "Regitro obtenido");
              this.editar_dato = true;

              this.input_user_id = data.id;
              this.input_name = data.name;
              this.input_email = data.email;
            }
        });
    },
   
  }
};


</script>