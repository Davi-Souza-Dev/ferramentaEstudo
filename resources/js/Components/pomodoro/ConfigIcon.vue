
<script>
import Icon1 from '../icons/Icon1.vue';
import Icon2 from '../icons/Icon2.vue';
import Icon3 from '../icons/Icon3.vue';
export default {
    name: 'ConfigIcon',
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
        initialIndex: {
            type: Number,
            default: 0,
        },
    },
    data() {
        return {
            currentIndex: this.initialIndex,
        };
    },
    computed: {
        currentIcon() {
            return this.icons[this.currentIndex];
        },
    },
    methods: {
        nextIcon() {
            // Navegação circular: se chegar ao final, volta para o início
            if (this.currentIndex < this.icons.length - 1) {
                this.currentIndex++;
            } else {
                this.currentIndex = 0;
            }
            this.$emit('change', {
                icon: this.currentIcon,
                value: this.currentIcon.value,
                index: this.currentIndex,
            });
            this.$emit('actualValueIcon', this.icons[this.currentIndex].value);
        },
        prevIcon() {
            if (this.currentIndex > 0) {
                this.currentIndex--;
            } else {
                this.currentIndex = this.icons.length - 1;
            }
            this.$emit('change', {
                icon: this.currentIcon,
                value: this.currentIcon.value,
                index: this.currentIndex,
            });

            this.$emit('actualValueIcon', this.icons[this.currentIndex].value);
        },
    },
    mounted() {
        // Emitir o ícone inicial
        this.$nextTick(() => {
            this.$emit('change', {
                icon: this.currentIcon,
                value: this.currentIcon.value,
                index: this.currentIndex,
            });
        });
    },
};
</script>



<template>
    <div class="icon-carousel-container">
        <button
            class="carroseulButton carousel-prev"
            @click="prevIcon"
            aria-label="Ícone anterior"
        >
            <svg
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g
                    id="SVGRepo_tracerCarrier"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                    <path
                        d="M14.2893 5.70708C13.8988 5.31655 13.2657 5.31655 12.8751 5.70708L7.98768 10.5993C7.20729 11.3805 7.2076 12.6463 7.98837 13.427L12.8787 18.3174C13.2693 18.7079 13.9024 18.7079 14.293 18.3174C14.6835 17.9269 14.6835 17.2937 14.293 16.9032L10.1073 12.7175C9.71678 12.327 9.71678 11.6939 10.1073 11.3033L14.2893 7.12129C14.6799 6.73077 14.6799 6.0976 14.2893 5.70708Z"
                        fill="#0F0F0F"
                    ></path>
                </g>
            </svg>
        </button>

        <div class="icon-container">
            <div class="icon-circle">
                <component
                    :is="currentIcon.component"
                    v-if="currentIcon.component"
                />
            </div>
        </div>

        <button
            class="carroseulButton carousel-next"
            @click="nextIcon"
            aria-label="Próximo ícone"
        >
            <svg
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g
                    id="SVGRepo_tracerCarrier"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                ></g>
                <g id="SVGRepo_iconCarrier">
                    <path
                        d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                        fill="#0F0F0F"
                    ></path>
                </g>
            </svg>
        </button>
    </div>
</template>

<style scoped>
.icon-carousel-container {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1.5rem;
    padding: 1rem;
}

.icon-container {
    position: relative;
}

.icon-circle {
    width: 180px;
    height: 180px;
    border-radius: 50%;
    outline: 5px solid var(--roxo);
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    background-color: white;
}

.icon {
    width: 70%;
}

.icon-placeholder {
    width: 70%;
    height: 70%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 50px;
}

.carroseulButton {
    width: 50px;
    height: 50px;
    background: none;
    border: none;
    font-size: 1.75rem;
    font-weight: bold;
    color: #9333ea;
    cursor: pointer;
    padding: 0 0.5rem;
}

.carroseulButton svg{
    width: 100%;
    height: 100%;
}

.carroseulButton svg path {
    fill: var(--roxo);
}

.carroseulButton:hover {
    opacity: 0.8;
}


</style>
