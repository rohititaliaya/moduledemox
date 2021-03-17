<template>
    <div>
        <dash-header></dash-header>
        <dash-container></dash-container>
        <hr>
        <dbsx></dbsx>
        <br><br>
        <dash-footer></dash-footer>
        
    </div>
</template>
<script>
import DashHeader from './DashHeader.vue'
import DashFooter from './DashFooter.vue'
import DashContainer from './DashContainer.vue'
import Dbsx from './Dbsx.vue'
export default {
    components:{
        DashHeader,
        DashFooter,DashContainer,
        Dbsx
    },
   mounted() {
            console.log('home mounted.')
        }
}
</script>