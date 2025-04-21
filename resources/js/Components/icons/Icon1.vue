<script>
    export default{
        name:"Icon1",
    }
</script>

<template>
     <svg viewBox="0 -0.5 17 17" xmlns="http://www.w3.org/2000/svg">
    <g>
      <path d="M8.931,7.986 L13.744,1.643 C12.408,0.617 10.743,-0.000999999989 8.931,-0.000999999989 C4.551,-0.000999999989 1,3.561 1,7.956 C1,12.352 4.551,15.915 8.931,15.915 C12.448,15.915 15.426,13.615 16.464,10.434 L8.931,7.986 L8.931,7.986 Z M7.49947239,5 C6.6732325,5 6,4.3286418 6,3.50105559 C6,2.67241379 6.6732325,2 7.49947239,2 C8.3267675,2 9,2.67241379 9,3.50105559 C9,4.3286418 8.32782272,5 7.49947239,5 L7.49947239,5 Z"/>
    </g>
  </svg>
</template>

<style  scoped>

svg {
      width: 150px;
      height: 150px;
      display: block;
      margin: 50px auto;
      animation: pulse 2s infinite ease-in-out;
    }

    path {
      stroke: var(--roxo);
      stroke-width: 1;
      fill: none;
      stroke-dasharray: 100;
      stroke-dashoffset: 100;
      animation: draw 2s infinite ease-in-out;
    }

    @keyframes draw {
      to {
        stroke-dashoffset: 0;
        fill: var(--roxo);
      }
    }

    @keyframes pulse {
      0%, 100% {
        transform: scale(1);
      }
      50% {
        transform: scale(1.05);
      }
    }
</style>