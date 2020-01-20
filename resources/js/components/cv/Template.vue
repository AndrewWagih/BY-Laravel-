<template>
    <div class="container cv">
        
        <header-cv></header-cv>
        <div class="row">
            <div class="col-4">
                <left-section></left-section>
            </div>
            <div class="col-8">
                <right-section></right-section>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            them:'cv',
            thamesName:'Dark'
        }
    },
    methods:{
        dark(){
            let currntThems = localStorage.getItem('theme');
            if(currntThems == 'cv'){
                localStorage.setItem('theme', 'cv-dark');
                this.thamesName = 'light'
                
            }else{
                localStorage.setItem('theme', 'cv');
                this.thamesName = 'Dark'
            }

            this.them = localStorage.getItem('theme')
        },
     
    }
}
</script>

<style>

</style>