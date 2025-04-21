<script setup>
import { Link } from '@inertiajs/vue3';
import { onMounted } from 'vue';
onMounted((el) => {
    let actualLink = window.location.href;
    actualLink = actualLink.split('/', 4);
    actualLink = actualLink[3];
    let link = null;
    switch (actualLink) {
        case 'pomodoro':
            link = document.getElementById('linkPomodoro');
            link.classList.add('linkActive');
            break;
        case 'flashcards':
            link = document.getElementById('linkFlashcards');
            link.classList.add('linkActive');
            break;
        case 'todolist':
            link = document.getElementById('linkTodoList');
            link.classList.add('linkActive');
            break;
        case 'analytics':
            link = document.getElementById('linkAnalytics');
            link.classList.add('linkActive');
            break;
    }
});
</script>

<template>
    <div class="menu">
        <div class="menuIcon">
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
                        d="M1 12C1 11.4477 1.44772 11 2 11H22C22.5523 11 23 11.4477 23 12C23 12.5523 22.5523 13 22 13H2C1.44772 13 1 12.5523 1 12Z"
                        fill="#0F0F0F"
                    ></path>
                    <path
                        d="M1 4C1 3.44772 1.44772 3 2 3H22C22.5523 3 23 3.44772 23 4C23 4.55228 22.5523 5 22 5H2C1.44772 5 1 4.55228 1 4Z"
                        fill="#0F0F0F"
                    ></path>
                    <path
                        d="M1 20C1 19.4477 1.44772 19 2 19H22C22.5523 19 23 19.4477 23 20C23 20.5523 22.5523 21 22 21H2C1.44772 21 1 20.5523 1 20Z"
                        fill="#0F0F0F"
                    ></path>
                </g>
            </svg>
        </div>
        <div class="separator-line"></div>
        <!-- Pomodoro -->
        <div class="containerLink" id="linkPomodoro">
            <Link class="linkIcon" href="/pomodoro">
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
                            d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                            stroke="white"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M12 6V12"
                            stroke="white"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M16.24 16.24L12 12"
                            stroke="white"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                    </g>
                </svg>
            </Link>
        </div>
        <!-- Flashcards -->
        <div class="containerLink" id="linkFlashcards">
            <Link class="linkIcon flashCardIcon" href="/flashcards">
                <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="none" stroke="var(--fundoSecundario)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect height="11.5" width="8.25" y="2.75" x="1.75"></rect> <path d="m10 3.75 4.25 2-4.25 7.5"></path> </g></svg>
            </Link>
        </div>
        <!-- Todolist -->
        <div class="containerLink" id="linkTodoList">
            <Link class="linkIcon" href="/todolist">
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
                            d="M9 5H7C5.89543 5 5 5.89543 5 7V19C5 20.1046 5.89543 21 7 21H17C18.1046 21 19 20.1046 19 19V7C19 5.89543 18.1046 5 17 5H15"
                            stroke="#000000"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M12 12H15"
                            stroke="#000000"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M12 16H15"
                            stroke="#000000"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z"
                            stroke="#000000"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <circle
                            cx="9"
                            cy="12"
                            r="1"
                            fill="var(--roxo)"
                        ></circle>
                        <circle
                            cx="9"
                            cy="16"
                            r="1"
                            fill="var(--roxo)"
                        ></circle>
                    </g>
                </svg>
            </Link>
        </div>
        <!-- Analytics -->
        <div class="containerLink" id="linkAnalytics">
            <Link class="linkIcon" href="/analytics">
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
                            d="M13.5 3H12H8C6.34315 3 5 4.34315 5 6V18C5 19.6569 6.34315 21 8 21H16C17.6569 21 19 19.6569 19 18V10.8125V8.625M13.5 3L19 8.625M13.5 3V7.625C13.5 8.17728 13.9477 8.625 14.5 8.625H19"
                            stroke="#000000"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M9 17L11.5 14.5L13 16L15.5 13.5"
                            stroke="#000000"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                    </g>
                </svg>
            </Link>
        </div>

        <!-- User -->
        <div class="userLink">
            <a href="" class="linkIcon">
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
                        <circle
                            cx="12"
                            cy="9"
                            r="3"
                            stroke="#1C274C"
                            stroke-width="1.5"
                        ></circle>
                        <path
                            d="M17.9691 20C17.81 17.1085 16.9247 15 11.9999 15C7.07521 15 6.18991 17.1085 6.03076 20"
                            stroke="#1C274C"
                            stroke-width="1.5"
                            stroke-linecap="round"
                        ></path>
                        <path
                            d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7"
                            stroke="#1C274C"
                            stroke-width="1.5"
                            stroke-linecap="round"
                        ></path>
                    </g>
                </svg>
            </a>
        </div>
    </div>
</template>

<style scoped>
.menu {
    width: 80px;
    height: 100%;
    background-color: var(--fundoSecundario);
    border-radius: 12px;
    outline: 1px solid var(--roxo);
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 20px;
    padding: 15px 0px;
    height: calc(100vh - 20px);
    grid-area: Menu;
    position: relative;
}

.menuIcon {
    width: 40px;
    height: 40px;
    align-self: center;
}

.menuIcon path {
    fill: var(--roxo);
}

.separator-line {
    width: 80%;
    height: 2px;
    background: var(--roxo);
    align-self: center;
}

.menu > .containerLink {
    width: 80%;
    height: 40px;
    background: var(--fundoSecundario);
    border-radius: 0px 10px 10px 0px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.containerLink > .linkIcon {
    width: 20px;
    height: 20px;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
}

.containerLink > .linkIcon path {
    stroke: var(--roxo);
}

.menu > .linkActive {
    width: 80%;
    height: 40px;
    background: var(--roxo);
    border-radius: 0px 10px 10px 0px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.linkActive > .linkIcon {
    width: 30px;
    height: 30px;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
}

.linkActive > .linkIcon path {
    stroke: var(--fundoSecundario);
}

.userLink {
    width: 40px;
    height: 40px;
    background: var(--roxo);
    border-radius: 50%;
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translate(-50%);
    display: flex;
    align-items: center;
    justify-content: center;
}

.userLink > .linkIcon {
    width: 100%;
    height: 100%;
    display: flex;
    align-content: center;
    justify-content: center;
}

.userLink .linkIcon > svg {
    width: 30px;
}

.userLink .linkIcon > svg circle,
path {
    stroke: var(--fundoSecundario);
}


.linkActive > .flashCardIcon > svg{
    stroke: var(--fundoSecundario) !important;
}


#linkFlashcards .linkIcon svg{
    stroke: var(--roxo);
}
</style>
