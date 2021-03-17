<template>
    <div class="container">
        <div class="row">
            <div class="col">
                <p>
                    <h1>Customer Registration</h1>
                    <h3 class="msgs">{{ message.messages }}</h3>
                    <h3 class="msgu">{{ message.messageu }}</h3>
        <form action="./api/store" method="POST" @submit.prevent="regCustomer()">
            <table>
                <tr>
                    <td><label> First Name:</label></td>
                    <td><input type="text" id="fnm" name="fnm" v-model="fnm" placeholder="Enter first name" required></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td><label>Last Name:</label></td>
                    <td><input type="text" id="lnm" name="lnm" v-model="lnm" placeholder="Enter Last name" required></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td><label>Email:</label></td>
                    <td><input type="email" id="email" name="email" v-model="email" placeholder="Enter Email" required></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td><label>Mobile No:</label></td>
                    <td><input type="number" name="mo" v-model="phone" placeholder="Enter Mobile No" required></td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <td><label>Password:</label></td>
                  <td><input type="password" name="pwd" v-model="pass" placeholder="Enter password" required></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                  <td><label>Retype-Password:</label></td>
                  <td><input type="password" name="rpwd"  v-model="rpass" placeholder="Enter Again" required></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td colspan="2">
                    <center>
                      <input type="Submit" value="Submit">
                    </center>
                    </td>
                </tr>
            </table>
        </form>
        
            </div>
        </div>  
    </div>
</template>
<script>
import Csmd from './Csmd.vue';
export default {
  components: { Csmd },
    
    data(){
        return {
                fnm:'',
                lnm:'',
                email:'',
                phone:'',
                pass:'',
                rpass:'',
                message:'',
               
                }
    },
    mounted(){
        console.log('Customer Registration !!!');
    },
    methods:{
        regCustomer(){
            this.axios.post('./api/store',{fnm:this.fnm,lnm:this.lnm,email:this.email,mo:this.phone,pwd:this.pass,rpwd:this.rpass}).then((response) => {
                this.message=response.data
            })
        }
    }    

}
</script>
<style>
.msgs{
    color: green;
}
.msgu{
    color: indianred;
}
</style>
