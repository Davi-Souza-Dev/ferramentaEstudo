<script>
import timerSoud from "@/Components/sound/timerSound.mp3";

export default {
    name: 'Timer',
    data(props) {
        return {
            min: props.valueTimer,
            sec: 0,
            timerInterval: null,
            timerFormatted: `${props.valueTimer}:00`,
            timerCompleted: false,
        };
    },
    emits: ['timerStop'],
    props: {
        startPomo: Boolean,
        valueTimer: Number,
    },
    watch: {
        startPomo(newValue) {
            if (newValue) {
                this.start();
            } else {
                this.min = this.valueTimer;
                this.stop();
            }
        },
        valueTimer(newValue) {
            this.min = newValue;
            let minutesFormat = this.min >= 10 ? `${this.min}` : `0${this.min}`;
            this.timerFormatted = `${minutesFormat}:00`;
        },
    },
    methods: {
        formatar() {
            let minutesFormat = this.min >= 10 ? `${this.min}` : `0${this.min}`;
            let secFormat = this.sec > 10 ? `${this.sec}` : `0${this.sec}`;
            this.timerFormatted = `${minutesFormat}:${secFormat}`;
        },
        start() {
            this.timerCompleted = false; //Ao iniciar começa com false
            if (!this.timerInterval) {
                this.timerInterval = setInterval(() => {
                    if (this.sec > 0) {
                        this.sec = this.sec - 1;
                    } else if (this.min > 0) {
                        (this.sec = 59), (this.min = this.min - 1);
                    } else {
                        (this.timerCompleted = true), this.stop();
                    }

                    this.formatar();
                }, 1000);
            }
        },
        stop() {
            const audio = new Audio(timerSoud);
            if (this.timerInterval) {
                clearInterval(this.timerInterval);
                setTimeout(()=>{
                    this.timerInterval = null;
                    this.min = this.valueTimer;
                    this.sec = 0;
                    if(this.timerCompleted){
                        audio.volume = 0.2;
                        audio.play();
                    }
                    this.formatar();
                    return this.$emit('timerStop', this.timerCompleted);
                },300);
            }

        },
    },
};
</script>

<template>
    <div class="timer"> 
        <p class="timerText">{{ timerFormatted }}</p>
    </div>
</template>

<style scoped>
.timer {
    width: fit-content;
    height: fit-content;
}
.timerText {
    font-family: var(--fontPrincipal);
    text-transform: uppercase;
    color: var(--roxo);
    font-weight: bolder;
    font-size: 5rem;
}
</style>
