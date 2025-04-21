<script>
    export default{
        name: "Button",
        emits:['clickButton'],
        props:{
            text: String,
        },
   }
</script>

<template>
    <button @click="$emit('clickButton')">{{ text }}</button>
</template>

<style scoped>
    button{
        min-width: 160px;
        min-height: 40px;
        width: fit-content;
        height: fit-content;
        padding: 10px ;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--roxo);
        font-family: var(--fontPrincipal);
        font-weight: bolder;
        font-size: 1.3rem;
        text-transform: uppercase;
        color: var(--fundoSecundario);
        border-radius: 10px;
        cursor: pointer;
        box-shadow: 0px 5px 0px #BBBBBB;
    }

    button:hover{
        transition: 0.2s;
        transform: translateY(5px);
        border: 1px solid #BBBBBB;
        box-shadow: 0px 0px 0px #BBBBBB;
    }
</style>