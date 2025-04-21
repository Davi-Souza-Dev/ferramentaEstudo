<script>
  export default {
    name: 'ConfigTimer',
    props: {
      items: {
        type: Array,
        default: () => [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60]
      },
      initialIndex: {
        type: Number,
        default: 4
      },
      step: {
        type: Number,
        default: 1
      }
    },
    data() {
      return {
        currentIndex: this.initialIndex
      }
    },
    computed: {
      visibleItems() {
        const current = this.items[this.currentIndex];
        
        const prevIndex = this.currentIndex > 0 
          ? this.currentIndex - 1 
          : this.items.length - 1;
        const prev = this.items[prevIndex];
        
    
        const nextIndex = this.currentIndex < this.items.length - 1 
          ? this.currentIndex + 1 
          : 0;
        const next = this.items[nextIndex];
        
        return [prev, current, next];
      }
    },
    methods: {
      prevItem() {
        // Com navegação circular: se chegar ao início, volta para o final
        if (this.currentIndex > 0) {
          this.currentIndex -= this.step;
        } else {
          this.currentIndex = this.items.length - 1;
        }
        
        // Garantir que o índice está dentro dos limites após aplicar o step
        this.normalizeIndex();
        this.$emit('actualValueTimer', this.items[this.currentIndex]);
      },
      nextItem() {
        // Com navegação circular: se chegar ao final, volta para o início
        if (this.currentIndex < this.items.length - 1) {
          this.currentIndex += this.step;
        } else {
          this.currentIndex = 0;
        }
        
        // Garantir que o índice está dentro dos limites após aplicar o step
        this.normalizeIndex();
        this.$emit('actualValueTimer', this.items[this.currentIndex]);
      },
      normalizeIndex() {
        // Garantir que o índice fica dentro dos limites do array
        if (this.currentIndex >= this.items.length) {
          this.currentIndex = this.currentIndex % this.items.length;
        } else if (this.currentIndex < 0) {
          this.currentIndex = this.items.length - (Math.abs(this.currentIndex) % this.items.length);
          if (this.currentIndex === this.items.length) {
            this.currentIndex = 0;
          }
        }
      }
    }
  }
</script>


<template>
    <div class="carousel-container">
        <button class="carroseulButton" @click="prevItem" aria-label="Anterior">
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

        <div class="carousel-items">
            <div
                v-for="(item, index) in visibleItems"
                :key="index"
                :class="['carousel-item', { active: index === 1 }]"
            >
                {{ item }}
            </div>
        </div>

        <button class="carroseulButton" @click="nextItem" aria-label="Próximo">
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
.carousel-container {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    padding: 1rem;
    font-family: Arial, sans-serif;
}

.carousel-items {
    display: flex;
    gap: 1rem;
}

.carousel-item {
    width: 80px;
    height: 80px;
    font-size: 3rem;
    font-weight: bold;
    color: var(--roxo); /* Roxo/violeta similar ao da imagem */
    font-family: var(--fontPrincipal);
    display: flex;
    align-items: center;
    justify-content: center;
}

.carousel-item.active {
    background-color: var(--roxo);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 0.25rem;
}

.carroseulButton {
    width: 50px;
    height: 50px;
    background: none;
    color: var(--roxo); /* Roxo/violeta similar ao da imagem */
    cursor: pointer;
}

.carroseulButton svg {
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
