<script>
    import Button from './buttons/Button.vue';
    import ButtonCancel from './buttons/ButtonCancel.vue';
    import ButtonConfig from './pomodoro/ButtonConfig.vue';
    import ConfigIcon from './pomodoro/ConfigIcon.vue';
    import ConfigTag from './pomodoro/ConfigTag.vue';
    import ConfigTimer from './pomodoro/ConfigTimer.vue';
    import IconPomodoro from './pomodoro/IconPomodoro.vue';
    import Tag from './pomodoro/Tag.vue';
    import Timer from './pomodoro/Timer.vue';


    import { useForm } from '@inertiajs/vue3'

    export default{
        name:"Painel",
        data(props){
            return{
                startPomo: false,
                showConfigPomo: false,
                textButton: "começar",
                // CONFIGURAÇÔES DO POMODORO
                configPomodoro:{ //DEIXAR DINAMICO DEPOIS, PEGANDO AS DEFINIÇÕES PADRÕES SE TIVER
                    pomoIcon: this.sessionConfig.configPomo.icon,
                    pomoTimer: this.sessionConfig.configPomo.timer,
                    pomoTag: this.sessionConfig.configPomo.tag,
                },
            }
        },
        props:{
            showPomo: Boolean,
            showFlashcards: Boolean,
            sessionConfig:Object,
        },
        watch:{
            sessionConfig(session){
                this.configPomodoro.icon = session.icon;
                this.configPomodoro.tag = session.tag;
                this.configPomodoro.timer = session.timer;
            }
        },
        components:{
            IconPomodoro,
            Tag,
            Timer,
            ButtonConfig,
            ConfigIcon,
            ConfigTag,
            ConfigTimer,
            Button,
            ButtonCancel,
        },
        methods:{
            //COMEÇAR O TIMER POMODORO
            startPomodoro(){
                this.startPomo = !this.startPomo;
                this.textButton = this.startPomo == false ? "Começar" : "Parar"
            },
            //PARAR O TIMER POMODORO
            timerStop(value){
                console.log(value);
                this.startPomo = false;
                this.textButton = this.startPomo == false ? "Começar" : "Parar";
            },
            // CONFIGURAÇÔES DO POMODORO - PEGANDO DE CADA COMPONENTE
            painelConfig(){
                this.showConfigPomo = !this.showConfigPomo;
            },
            actualValueTimer(value){
                this.configPomodoro.pomoTimer = value;
            },
            actualValueTag(value){
                this.configPomodoro.pomoTag = value;
            },
            actualValueIcon(value){
                this.configPomodoro.pomoIcon = value;
            },
            saveConfig(){       
                const form = useForm({
                    icon: this.configPomodoro.pomoIcon,
                    timer: this.configPomodoro.pomoTimer,
                    tag: this.configPomodoro.pomoTag,
                });

                form.submit("post", "/pomodoro");
                setTimeout(()=>{
                    this.showConfigPomo = !this.showConfigPomo;   
                },300);
            }
        }
    }
</script>   

<template>
    <div class="painel">
        <!-- EXIBIR OS COMPONENTES DO POMODORO -->
        <div v-show="showPomo" class="container">
            <ButtonConfig @painel-config="painelConfig" :showConfig="showConfigPomo"/>
            <IconPomodoro v-show="!showConfigPomo" :configIcon="configPomodoro.pomoIcon"/>
            <Tag :startPomo="startPomo" :value="configPomodoro.pomoTag" v-show="!showConfigPomo"/>
            <Timer :valueTimer="configPomodoro.pomoTimer" :startPomo="startPomo" @timer-stop="timerStop" v-show="!showConfigPomo"/>
            <Button :text="textButton" @click-button="startPomodoro" v-show="!showConfigPomo"/>

            <!-- CONFIGURAÇÂO DO POMODORO -->
            <ConfigIcon v-show="showConfigPomo" @actual-value-icon="actualValueIcon"/>
            <ConfigTag v-show="showConfigPomo" @actual-value-tag="actualValueTag"/>
            <ConfigTimer v-show="showConfigPomo" @actual-value-timer="actualValueTimer"/>
            <div class="buttonContainer">
                <Button text="Salvar" @click-button="saveConfig" v-show="showConfigPomo"/>
                <ButtonCancel text="Cancelar" @click-button="painelConfig" v-show="showConfigPomo"/>
            </div>
        </div>
        <div v-show="showFlashcards" class="container">
            <h1>Decks</h1>
        </div>  
    </div>
</template>

<style scoped>
    .painel{
        width: 100%;
        height: 100%;
        outline: 1px solid var(--roxo);
        border-radius: 10px;
        grid-area: Painel;
        background-color: var(--fundoSecundario);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 20px;
        position: relative;
    }

    .container{
        width: fit-content;
        height: fit-content;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        flex-direction: column;
        gap: 20px;
    }

    .buttonContainer{
        width: fit-content;
        height: fit-content;
        display: flex;
        gap: 20px;
        align-items: center;
        justify-content: center;
        flex-direction: row;
        flex-wrap: nowrap;
    }
</style>