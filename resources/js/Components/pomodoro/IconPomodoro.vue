<script>
import Icon1 from '../icons/Icon1.vue';
import Icon2 from '../icons/Icon2.vue';
import Icon3 from '../icons/Icon3.vue';

export default {
    name: 'IconPomodoro',
    data() {
        return {
            actualIcon: this.configIcon - 1,
        };
    },
    props: {
        icons: {
            type: Array,
            default: () => [
                {
                    component: Icon1,
                    value: 1,
                },
                {
                    component: Icon2,
                    value: 2,
                },
                {
                    component: Icon3,
                    value: 3,
                },
            ],
        },
        configIcon:Number,
    },
    watch:{
      configIcon(value){
        this.actualIcon = value - 1;
      }
      
    }
};
</script>

<template>
    <div class="containerIconPomodoro">
        <component :is="icons[actualIcon].component" v-if="icons[actualIcon].component"/>
    </div>
</template>

<style scoped>
.containerIconPomodoro {
    width: 200px;
    height: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
    outline: 5px solid var(--roxo);
    border-radius: 50%;
    padding: 10px;
    background: var(--fundoSecundario);
}

.iconPomodoro {
    width: 150px;
    color: var(--roxo);
}

.iconPomodoro path {
    fill: var(--roxo);
}
</style>
