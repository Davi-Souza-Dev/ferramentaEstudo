<script>
    import Painel from '@/Components/Painel.vue';
    import Menu from '@/Components/Menu.vue';
    import TitleBar from '../Components/TitleBar.vue';
    export default{
        name:"Pomodoro",
        data(props){
            return{
                config: this.sessionConfig,
            }
        },  
        components:{
            TitleBar,
            Menu,
            Painel,
        },
        props:{
            sessionConfig:Object,
        },
    }
</script>

<template>
    <div class="background">
        <Menu/> 
        <TitleBar text="flashcards - decks"/>
        <Painel :showPomo="false" :showFlashcards="true" :sessionConfig="sessionConfig"/>
    </div>
</template>