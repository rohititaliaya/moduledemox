<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                        <ul>
                          <li v-for='row in this.rows' :key="row.id">
                            {{ row.id }}
                            {{ row.u_fnm }}
                            {{ row.u_lnm }}
                            {{ row.u_email }}
                            {{ row.u_mo }}
                            {{ row.u_pass }}        
                            <button @click="getDelete(row.id)">Delete</button>
                          </li>
                        </ul>
                    
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        mounted() {
            this.getUsers()
        },
        data(){
            return {
                columns: [
                        {label: 'id', field: 'id'}, 
                        {label: 'Name', field: 'name'},
                        {label: 'Email', field: 'email'}
                    ],
                rows: [
                  
                ],
                page: 1,
                per_page: 10,
                msg:''
            }
        },
        methods:{
            getUsers: function() {
                this.axios.get('./api/csmd').then(function(response){
                    this.rows = response.data;
                }.bind(this));
            },
            getDelete(id){
                this.axios.get('./api/delete/'+id).then(function(response){
                    this.msg=response.data;
                }.bind(this));
                 
            }

        },
        
    }
</script>