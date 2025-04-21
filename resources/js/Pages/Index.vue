<script>
    import Menu from '@/Components/Menu.vue';
    import TitleBar from '../Components/TitleBar.vue';
    import Painel from '@/Components/Painel.vue';
    export default {
        name: "Index",
        components:{
            TitleBar,
            Menu,
            Painel,
        },
        props:{
            Title: String,
        }
    }
</script>

<template>
    <div class="background">
        <Menu/> 
        <TitleBar text="FlashCards - Deck"/>
        <Painel :showPomo="false"/>
    </div>
</template>