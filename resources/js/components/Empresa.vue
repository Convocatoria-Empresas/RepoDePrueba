<template>
    <div>
         <h1 class="text-center"> Las Empresas ya registradas </h1>
         <hr> 
         <table>
             <tbody>
             <tr v-for="empresa in empresas" :key="empresa.id">
                  <th scope="row">{{empresa.id}}</th>
                  <td scope="row">{{empresa.Nombre_Largo}}</td>
                  <td scope="row">{{empresa.Nombre_Corto}}</td>
                  <td scope="row">{{empresa.Correo_electronico}}</td>
                  <td scope="row">{{empresa.Telefono}}</td>
             </tr>
             </tbody>
         </table>
    </div>
</template>

<script>

export default {
     
        data(){
            return{
                empresas:[],
            }
        },
        methods:{
            async list(){
                const res = await axios.get('empresas');

                this.empresas = res.data;
            }
        },
        created(){
            this.list();
        }
    
}
</script>

<style >

</style>
