<script>
    export default{
        name: "TitleBar",
        props:{
            text:String,
        }
    }
</script>


<template>
    <div class="titleBar">
        <div class="decorationTiltleBar"></div>
        <h1 class="title">{{ text }}</h1>
    </div>
</template>

<style scoped>
    .titleBar{
        width: 100%;
        height: 40px;
        border-radius: 5px;
        display: flex;
        gap: 5px;
        align-items: center;
        justify-content: flex-start;
        padding: 20px;
        outline: 1px solid var(--roxo);
        grid-area: TitleBar;
        background-color: var(--fundoSecundario);
    }
    
    .decorationTiltleBar{
        width: 15px;
        height: 15px;
        border-radius: 50%;
        background: var(--roxo);
    }

    .title{
        font-family: var(--fontPrincipal);
        font-weight: bolder;
        text-transform: uppercase;
        font-size: 1.5rem;
    }
</style>