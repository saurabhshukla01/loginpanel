<html>
    <head>
    <style>
        :root {
    --color-primary: #4B888C;
    --color-primary-light: #76B9BD;
    --color-primary-lightest: #D6EBEC;
    --color-secondary: #76BDA4;
  }

*, *::before, *::after {
    margin: 0;
    padding: 0;
    box-sizing: inherit;
}

html {
    font-size: 62.5%;
}

body {
    font-weight: 400;
    color: #444;
    box-sizing: border-box;
    padding: 5rem;
    min-height: 100vh;
    background: linear-gradient(to bottom right, #97e0c7, #4B888C);
}
.all {
    display: grid;
    place-items: center;
    grid-template-columns: 8rem 1fr;
}

nav {
    background-color: var(--color-primary);
    color: #fff;
    width: 100%;
    height: 100%;
    box-shadow: 0 0 5rem rgba(0,0,0,.4);
    border-radius: 2rem 0 0 2rem;
    z-index: 0;
    position: relative;

    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 2rem 1rem;
}
nav::before {
    content: '';
    background-color: var(--color-primary);
    height: 100%;
    width: 5rem;
    position: absolute;
    right: -5rem;
    top: 0;
}
.nav-items {
    display: flex;
    flex-direction: column;
    gap: 3rem;
}
.nav-item {
    color: #fff;
    cursor: pointer;
}
.nav-item:hover {
    color: var(--color-primary-lightest)
}
.nav-item svg {
    width: 4rem;
    height: 4rem;
}

.portrait {
    background-color: white;
    color: var(--color-primary);
    width: 5rem;
    height: 5rem;
    border-radius: 50%;
    margin-bottom: 5rem;
    cursor: pointer;
}
.portrait:hover {
    background-color: var(--color-primary-lightest);
}




.content {
    width: 100%;
    background-color: #fff;
    box-shadow: 0 0 5rem rgba(0,0,0,.4);
    border-radius: 2rem;
    z-index: 5;
    padding: 4rem 6rem;
}

section {
    padding: 1rem 2rem;
    background-color: #fff;
    box-shadow: 0 0 3rem rgba(0,0,0,.3);
    border-radius: .8rem;
}

section > h2{
    font-size: 2rem;
    letter-spacing: .2rem;
    font-weight: 400;
    color: var(--color-primary);
}

.greeting {
    margin-bottom: 4rem;
    font-size: 1.4rem;
}


main {
    display: grid;
    grid-template-columns: 16fr 5fr;
    grid-template-rows: auto auto;
    gap: 4rem;
}

.grid-area-1 {
    grid-column: 1 / 2;
    grid-row: 1 / 2;

    display: grid;
    grid-template-columns: 2fr 1fr;
    grid-template-rows: 1fr 2fr;
    gap: 4rem;
}

.grid-area-1-2 {
    grid-column: 2 / 3;
    grid-row: 1 / 3;

    display: flex;
    flex-direction: column;
    gap: 4rem;
}


.grid-area-2 {
    grid-column: 2 / 3;
    grid-row: 1 / 3;

    display: flex;
    flex-direction: column;
    gap: 4rem;
}


.grid-area-3 {
    grid-column: 1 / 2;
    grid-row: 2 / 3;

    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 1fr 1fr;
    gap: 4rem;
}

.last-week {
    grid-column: 2 / 3;
    grid-row: 1 / 3;
}


.distance {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 3rem;
}
.distance__section {
    position: relative;
}
.distance__section::after {
    content: '';
    height: 80%;
    width: 1.6rem;
    background-color: var(--color-primary-light);
    position: absolute;
    right: 0;
    top: 10%;
    border-radius: 1.2rem 0 0 1.2rem;
    box-shadow: inset .4rem .4rem 1rem rgba(0,0,0,.2);
}
.distance p {
    color: var(--color-primary);
    font-size: 2rem;
}
.distance .distance__section > h2 {
    font-weight: 400;
    font-size: 1.6rem;
    letter-spacing: 0;
}
.distance svg {
    height: 5rem;
    color: var(--color-primary);
    margin-top: 2rem;
}


.weekly {
    background-color: #76BDA4;
    color: white;
}
.weekly h2 {
    color: #fff !important;
}
.weekly table {
    font-size: 1.6rem;
    width: 100%;
    text-align: left;
    margin: 2rem 0;
}
.weekly td {
    padding: .8rem .2rem;
}

.recent {
    display: flex;
    flex-direction: column;
    align-items: start;
}
.recent a {
    align-self: end;
}
.recent  table {
    font-size: 1.6rem;
    width: calc(100% + 4rem);
    text-align: left;
    margin: 2rem -2rem .5rem -2rem;
    border: none;
}
.recent tr:nth-of-type(odd) {
    background-color: var(--color-primary-lightest);
}
.recent td {
    padding: .8rem .2rem;
}
.recent svg {
    width: 3rem;
    height: 3rem;
    background-color: #fff;
    border-radius: 50%;
    padding: .5rem;
    color: var(--color-primary);
    margin-left: 2rem;
}

a {
    font-size: 1.6rem;
    color: var(--color-primary);
    text-decoration: none;
    display: block;
    padding-bottom: .2rem;
    margin: 1rem 0;
    border-bottom: 1px solid currentColor;
    letter-spacing: 3px;
    align-self: end;
    margin-right: 1rem;
}

.calories {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: auto 1fr auto;
}
.calories h2 {
    grid-column: 1 / 4;
}
.calories__number {
    text-align: center;
    font-size: 2.8rem;
    font-weight: 600;
    color: var(--color-primary);
    margin: 1.5rem 0;
}
.calories__text {
    text-align: center;
    font-size: 1.6rem;
    margin-bottom: 2rem;
}


.friend-acitvity {
    display: flex;
    flex-direction: column;
}
.friend-activity__activity {
    display: grid;
    grid-template-columns: 4rem 1fr;
    gap: 2rem;
    align-items: center;
    margin: 1rem 0;
}
.friend-acitvity__picture {
    width: 4rem;
    height: 4rem;
    border-radius: 50%;
    background-color: var(--color-primary);
    overflow: hidden;
    position: relative;
}
.friend-acitvity__picture > div {
    background-color: #fff;
    width: 2rem;
    height: 2rem;
    position: absolute;
    bottom: -.6rem;
    left: 1rem;
    border-radius: 50% 50% 0 0;
}
.friend-acitvity__picture > div::after {
    content: '';
    width: 1.2rem;
    height: 1.2rem;
    border-radius: 50%;
    position: absolute;
    background-color: #fff;
    bottom: 2.3rem;
    left: .4rem;
}
.friends__picture {
    width: 3rem;
    height: 3rem;
    border-radius: 50%;
    background-color: var(--color-primary);
    overflow: hidden;
    position: relative;
}
.friends__picture > div {
    background-color: #fff;
    width: 1.5rem;
    height: 1.5rem;
    position: absolute;
    bottom: -.6rem;
    left: .8rem;
    border-radius: 50% 50% 0 0;
}
.friends__picture > div::after {
    content: '';
    width: .8rem;
    height: .8rem;
    border-radius: 50%;
    position: absolute;
    background-color: #fff;
    bottom: 1.8rem;
    left: .4rem;
}
.friend-activity__name, .friends__name {
    color: var(--color-primary);
    font-size: 1.8rem;
    font-weight: 400;
}
.friend-activity__msg, .friends__msg {
    font-size: 1.4rem;
}


.friends__friend {
    display: grid;
    grid-template-columns: 4rem 1fr auto;
    align-items: center;
    gap: 1rem;
    justify-content: space-between;
    margin: 1rem 0;
}

.challenges {
    display: grid;
    grid-template-rows: auto repeat(1.4rem, 2rem);
    gap: .8rem;
    padding-bottom: 2rem;
}
.challenges__bar {
    width: 100%;
    height: 1.4rem;
    border-radius: .7rem;
    background-color: #D9D9D9;
    position: relative;
}
.challenges__bar::after {
    content: '';
    position: absolute;
    height: 100%;
    border-radius: .7rem;
    background-color: var(--color-primary);
}
.challenges__bar--1::after {width: 20%;}
.challenges__bar--2::after {width: 70%;}
.challenges__bar--3::after {width: 45%;}
.challenges__text {
    font-size: 1.4rem;
}

.personal-bests {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 3rem;
}
.personal-bests__best {
    background-color: var(--color-primary);
    color: #fff;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
    padding-top: 2rem;
    position: relative;
}
.personal-bests__best::after {
    content: '';
    background-color: var(--color-primary-lightest);
    width: 80%;
    height: 1.5rem;
    border-radius: 0 0 1rem 1rem;
    box-shadow: inset .4rem -.4rem 1rem rgba(0,0,0,.2);
    position: absolute;
    top: 0;
    left: 10%;
}
.personal-bests__best h2 {
    color: #ffffff8c;
    text-align: center;
    letter-spacing: 0;
    font-size: 1.8rem;
}
.personal-bests__best p {
    font-size: 2rem;
}
.personal-bests__best svg {
    width: 4rem;
    height: 4rem;
}


.last-week {
    display: flex;
    flex-direction: column;
}
.last-week__chart {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 2rem;
    margin-top: 2rem;
    padding-top: 4rem;
    border-bottom: 1px solid #757575;
    align-items: end;
}
.last-week__bar {
    width: 3.5rem;
    border-radius: .4rem .4rem 0 0;
    background-color: var(--color-primary);
    height: 20rem;
}
.last-week__bar--1 {
    justify-self: end;
    height: 17rem;
}
.last-week__bar--2 {
    height: 20rem;
}
.last-week__bar--3 {
    justify-self: end;
    background-color: var(--color-primary-light);
    height: 15rem;
}
.last-week__bar--4 {
    background-color: var(--color-primary-light);
    height: 12rem;
}
.last-week__bar--5 {
    justify-self: end;
    background-color: var(--color-secondary);
    height: 10rem;
}
.last-week__bar--6 {
    background-color: var(--color-secondary);
    height: 16rem;
}
.last-week__bar > p {
    font-size: 1.4rem;
    text-align: center;
    transform: translateY(-2rem);
}
.last-week__labels {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    justify-items: center;
    font-size: 1.8rem;
    margin: 2rem 0;
}

@media (max-width: 1500px) {
    body {
        padding: 0;
    }
    nav, .content {
        border-radius: 0;
    }
}
@media (max-width: 1250px) {
    main {
        grid-template-columns: 1fr;
    }
    .grid-area-2 {
        grid-column: 1 / 2;
        grid-row: 3 / 4;
    
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
}
@media (max-width: 950px) {
    .grid-area-1 {
        grid-template-columns: 1fr;
        grid-template-rows: 1fr 2fr auto;
    }
    .grid-area-1-2 {
        grid-column: 1 / 2;
        grid-row: 3 / 4;
    
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
    .last-week {
        grid-column: 1 / 3;
        grid-row: 2 / 3;
    }
    .grid-area-3 {
        grid-template-rows: auto auto auto;
    }
    .challenges {
        grid-column: 1 / 3;
        grid-row: 1 / 2;
    }
    .personal-bests {
        grid-column: 1 / 3;
    }
}
@media (max-width: 750px) {
    .grid-area-2 {
        display: flex;
        flex-direction: column;
    }
    .grid-area-1-2 {
        display: flex;
        flex-direction: column;
    }
    .all {
        grid-template-columns: 1fr;
    }
    nav {
        display: none;
    }
    .content {
        padding: 2rem 1rem;
    }
}
@media (max-width: 450px) {
    html {
        font-size: 50%;
    }
}
    </style>

    </head>
    <body>
    <div class="all">
        <nav class="navigation">
            <div class="portrait">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M12 12q-1.65 0-2.825-1.175T8 8q0-1.65 1.175-2.825T12 4q1.65 0 2.825 1.175T16 8q0 1.65-1.175 2.825T12 12Zm-8 8v-2.8q0-.85.438-1.563T5.6 14.55q1.55-.775 3.15-1.163T12 13q1.65 0 3.25.388t3.15 1.162q.725.375 1.163 1.088T20 17.2V20H4Z"/></svg>
            </div>

            <div class="nav-items">
                <div class="nav-item">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024"><path fill="currentColor" d="M946.5 505L534.6 93.4a31.93 31.93 0 0 0-45.2 0L77.5 505c-12 12-18.8 28.3-18.8 45.3c0 35.3 28.7 64 64 64h43.4V908c0 17.7 14.3 32 32 32H448V716h112v224h265.9c17.7 0 32-14.3 32-32V614.3h43.4c17 0 33.3-6.7 45.3-18.8c24.9-25 24.9-65.5-.1-90.5z"/></svg>
                </div>
                <div class="nav-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h4l3 8l4-16l3 8h4"/></svg>
                </div>
                <div class="nav-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="416" height="512" viewBox="0 0 416 512"><path fill="currentColor" d="M272 96c26.51 0 48-21.49 48-48S298.51 0 272 0s-48 21.49-48 48s21.49 48 48 48zM113.69 317.47l-14.8 34.52H32c-17.67 0-32 14.33-32 32s14.33 32 32 32h77.45c19.25 0 36.58-11.44 44.11-29.09l8.79-20.52l-10.67-6.3c-17.32-10.23-30.06-25.37-37.99-42.61zM384 223.99h-44.03l-26.06-53.25c-12.5-25.55-35.45-44.23-61.78-50.94l-71.08-21.14c-28.3-6.8-57.77-.55-80.84 17.14l-39.67 30.41c-14.03 10.75-16.69 30.83-5.92 44.86s30.84 16.66 44.86 5.92l39.69-30.41c7.67-5.89 17.44-8 25.27-6.14l14.7 4.37l-37.46 87.39c-12.62 29.48-1.31 64.01 26.3 80.31l84.98 50.17l-27.47 87.73c-5.28 16.86 4.11 34.81 20.97 40.09c3.19 1 6.41 1.48 9.58 1.48c13.61 0 26.23-8.77 30.52-22.45l31.64-101.06c5.91-20.77-2.89-43.08-21.64-54.39l-61.24-36.14l31.31-78.28l20.27 41.43c8 16.34 24.92 26.89 43.11 26.89H384c17.67 0 32-14.33 32-32s-14.33-31.99-32-31.99z"/></svg>
                </div>
                <div class="nav-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 15.5A3.5 3.5 0 0 1 8.5 12A3.5 3.5 0 0 1 12 8.5a3.5 3.5 0 0 1 3.5 3.5a3.5 3.5 0 0 1-3.5 3.5m7.43-2.53c.04-.32.07-.64.07-.97c0-.33-.03-.66-.07-1l2.11-1.63c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.31-.61-.22l-2.49 1c-.52-.39-1.06-.73-1.69-.98l-.37-2.65A.506.506 0 0 0 14 2h-4c-.25 0-.46.18-.5.42l-.37 2.65c-.63.25-1.17.59-1.69.98l-2.49-1c-.22-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64L4.57 11c-.04.34-.07.67-.07 1c0 .33.03.65.07.97l-2.11 1.66c-.19.15-.25.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1.01c.52.4 1.06.74 1.69.99l.37 2.65c.04.24.25.42.5.42h4c.25 0 .46-.18.5-.42l.37-2.65c.63-.26 1.17-.59 1.69-.99l2.49 1.01c.22.08.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.66Z"/></svg>
                </div>
            </div>
            
        </nav>

        <div class="content">
            <div class="greeting">
                <h2>Good Morning Champ!</h2>
                <p>Time to seize the day 🌞</p>
            </div>
        
            <main>
                <div class="grid-area-1">
                    <div class="distance">
                        <section class="distance__section distance__cycling">
                            <p>42 km</p>
                            <h2>Cycling</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M11 15.414V20h2v-4.586c0-.526-.214-1.042-.586-1.414l-2-2L13 9.414l2 2c.372.372.888.586 1.414.586H20v-2h-3.586l-3.707-3.707a.999.999 0 0 0-1.414 0L8 9.586c-.378.378-.586.88-.586 1.414s.208 1.036.586 1.414l3 3z"/><circle cx="16" cy="5" r="2" fill="currentColor"/><path fill="currentColor" d="M18 14c-2.206 0-4 1.794-4 4s1.794 4 4 4s4-1.794 4-4s-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2s2 .897 2 2s-.897 2-2 2zM6 22c2.206 0 4-1.794 4-4s-1.794-4-4-4s-4 1.794-4 4s1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2s-2-.897-2-2s.897-2 2-2z"/></svg>
                        </section>
                        <section class="distance__section distance__running">
                            <p>22 km</p>
                            <h2>Running</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 416 512"><path fill="currentColor" d="M272 96c26.51 0 48-21.49 48-48S298.51 0 272 0s-48 21.49-48 48s21.49 48 48 48zM113.69 317.47l-14.8 34.52H32c-17.67 0-32 14.33-32 32s14.33 32 32 32h77.45c19.25 0 36.58-11.44 44.11-29.09l8.79-20.52l-10.67-6.3c-17.32-10.23-30.06-25.37-37.99-42.61zM384 223.99h-44.03l-26.06-53.25c-12.5-25.55-35.45-44.23-61.78-50.94l-71.08-21.14c-28.3-6.8-57.77-.55-80.84 17.14l-39.67 30.41c-14.03 10.75-16.69 30.83-5.92 44.86s30.84 16.66 44.86 5.92l39.69-30.41c7.67-5.89 17.44-8 25.27-6.14l14.7 4.37l-37.46 87.39c-12.62 29.48-1.31 64.01 26.3 80.31l84.98 50.17l-27.47 87.73c-5.28 16.86 4.11 34.81 20.97 40.09c3.19 1 6.41 1.48 9.58 1.48c13.61 0 26.23-8.77 30.52-22.45l31.64-101.06c5.91-20.77-2.89-43.08-21.64-54.39l-61.24-36.14l31.31-78.28l20.27 41.43c8 16.34 24.92 26.89 43.11 26.89H384c17.67 0 32-14.33 32-32s-14.33-31.99-32-31.99z"/></svg>
                        </section>
                        <section class="distance__section distance__swimming">
                            <p>10 km</p>
                            <h2>Swimming</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path fill="currentColor" d="M49 40a7.125 7.125 0 0 1-2.952-.641a7.416 7.416 0 0 0-3.042-.664a7.467 7.467 0 0 0-3.049.664a7.123 7.123 0 0 1-5.903 0a7.545 7.545 0 0 0-3.048-.664a7.492 7.492 0 0 0-3.049.664a7.147 7.147 0 0 1-5.913 0a7.43 7.43 0 0 0-3.036-.664a7.487 7.487 0 0 0-3.048.664a7.141 7.141 0 0 1-5.912 0A7.458 7.458 0 0 0 7 38.695a7.472 7.472 0 0 0-3.037.664A7.204 7.204 0 0 1 1 40v-4.396a7.47 7.47 0 0 0 2.963-.631A7.287 7.287 0 0 1 7 34.299c1.086 0 2.127.25 3.048.674a7.398 7.398 0 0 0 2.948.631a7.42 7.42 0 0 0 2.964-.631a7.3 7.3 0 0 1 3.048-.674c1.078 0 2.114.25 3.036.674a7.44 7.44 0 0 0 2.96.631a7.407 7.407 0 0 0 2.953-.631a7.308 7.308 0 0 1 3.049-.674c1.073 0 2.113.25 3.048.674c.895.393 1.9.631 2.95.631a7.377 7.377 0 0 0 2.953-.631a7.283 7.283 0 0 1 3.049-.674c1.086 0 2.125.25 3.042.674a7.38 7.38 0 0 0 2.952.631V40zm-6.952-12.436c3.152 0 5.71-2.55 5.71-5.678c0-3.131-2.558-5.668-5.71-5.668c-3.157 0-5.712 2.538-5.712 5.668c0 3.128 2.328 5.678 5.712 5.678zM8.791 30.756c.443.105.861.258 1.258.436a7.255 7.255 0 0 0 2.949.641c1.05 0 2.069-.238 2.963-.641a7.463 7.463 0 0 1 3.048-.676c1.078 0 2.116.262 3.036.676a7.293 7.293 0 0 0 2.96.641c1.04 0 2.058-.238 2.952-.641a7.47 7.47 0 0 1 3.049-.676c1.074 0 2.115.262 3.048.676c.896.402 1.9.641 2.952.641c.765 0 1.502-.129 2.197-.346l-9.525-17.056l11.079-2.007c1.626-.308 2.806-1.576 2.806-3.199c0-1.79-1.467-3.225-3.262-3.225l-.37.011l-17.114 3.092c-1.201.273-2.792 2.019-1.886 4.161l.146.345l4.466 8.003l-16.752 9.144z"/></svg>
                        </section>
                    </div>
                    
                    <section class="weekly">
                        <h2>Weekly Schedule</h2>
                        <table cellspacing="0" cellpadding="0">
                            <tr>
                                <th>Day</th>
                                <th>Exercise</th>
                                <th>Time</th>
                            </tr>
                            <tr>
                                <td>Monday</td>
                                <td>Running</td>
                                <td>6:00 AM</td>
                            </tr>
                            <tr>
                                <td>Tuesday</td>
                                <td>Swimming</td>
                                <td>7:00 AM</td>
                            </tr>
                            <tr>
                                <td>Wednesday</td>
                                <td>Cycling</td>
                                <td>6:30 AM</td>
                            </tr>
                            <tr>
                                <td>Thursday</td>
                                <td>Yoga</td>
                                <td>6:00 AM</td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>Weight-Training</td>
                                <td>8:00 AM</td>
                            </tr>
                        </table>
                    </section>
                
                    <div class="grid-area-1-2">
                        <section class="recent">
                            <h2>Last 3 Exercises</h2>
                            <table cellspacing="0" cellpadding="0">
                                <tr>
                                    <td><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 416 512"><path fill="currentColor" d="M272 96c26.51 0 48-21.49 48-48S298.51 0 272 0s-48 21.49-48 48s21.49 48 48 48zM113.69 317.47l-14.8 34.52H32c-17.67 0-32 14.33-32 32s14.33 32 32 32h77.45c19.25 0 36.58-11.44 44.11-29.09l8.79-20.52l-10.67-6.3c-17.32-10.23-30.06-25.37-37.99-42.61zM384 223.99h-44.03l-26.06-53.25c-12.5-25.55-35.45-44.23-61.78-50.94l-71.08-21.14c-28.3-6.8-57.77-.55-80.84 17.14l-39.67 30.41c-14.03 10.75-16.69 30.83-5.92 44.86s30.84 16.66 44.86 5.92l39.69-30.41c7.67-5.89 17.44-8 25.27-6.14l14.7 4.37l-37.46 87.39c-12.62 29.48-1.31 64.01 26.3 80.31l84.98 50.17l-27.47 87.73c-5.28 16.86 4.11 34.81 20.97 40.09c3.19 1 6.41 1.48 9.58 1.48c13.61 0 26.23-8.77 30.52-22.45l31.64-101.06c5.91-20.77-2.89-43.08-21.64-54.39l-61.24-36.14l31.31-78.28l20.27 41.43c8 16.34 24.92 26.89 43.11 26.89H384c17.67 0 32-14.33 32-32s-14.33-31.99-32-31.99z"/></svg></td>
                                    <td>Running</td>
                                    <td>30 min</td>
                                </tr>
                                <tr>
                                    <td><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path fill="currentColor" d="M49 40a7.125 7.125 0 0 1-2.952-.641a7.416 7.416 0 0 0-3.042-.664a7.467 7.467 0 0 0-3.049.664a7.123 7.123 0 0 1-5.903 0a7.545 7.545 0 0 0-3.048-.664a7.492 7.492 0 0 0-3.049.664a7.147 7.147 0 0 1-5.913 0a7.43 7.43 0 0 0-3.036-.664a7.487 7.487 0 0 0-3.048.664a7.141 7.141 0 0 1-5.912 0A7.458 7.458 0 0 0 7 38.695a7.472 7.472 0 0 0-3.037.664A7.204 7.204 0 0 1 1 40v-4.396a7.47 7.47 0 0 0 2.963-.631A7.287 7.287 0 0 1 7 34.299c1.086 0 2.127.25 3.048.674a7.398 7.398 0 0 0 2.948.631a7.42 7.42 0 0 0 2.964-.631a7.3 7.3 0 0 1 3.048-.674c1.078 0 2.114.25 3.036.674a7.44 7.44 0 0 0 2.96.631a7.407 7.407 0 0 0 2.953-.631a7.308 7.308 0 0 1 3.049-.674c1.073 0 2.113.25 3.048.674c.895.393 1.9.631 2.95.631a7.377 7.377 0 0 0 2.953-.631a7.283 7.283 0 0 1 3.049-.674c1.086 0 2.125.25 3.042.674a7.38 7.38 0 0 0 2.952.631V40zm-6.952-12.436c3.152 0 5.71-2.55 5.71-5.678c0-3.131-2.558-5.668-5.71-5.668c-3.157 0-5.712 2.538-5.712 5.668c0 3.128 2.328 5.678 5.712 5.678zM8.791 30.756c.443.105.861.258 1.258.436a7.255 7.255 0 0 0 2.949.641c1.05 0 2.069-.238 2.963-.641a7.463 7.463 0 0 1 3.048-.676c1.078 0 2.116.262 3.036.676a7.293 7.293 0 0 0 2.96.641c1.04 0 2.058-.238 2.952-.641a7.47 7.47 0 0 1 3.049-.676c1.074 0 2.115.262 3.048.676c.896.402 1.9.641 2.952.641c.765 0 1.502-.129 2.197-.346l-9.525-17.056l11.079-2.007c1.626-.308 2.806-1.576 2.806-3.199c0-1.79-1.467-3.225-3.262-3.225l-.37.011l-17.114 3.092c-1.201.273-2.792 2.019-1.886 4.161l.146.345l4.466 8.003l-16.752 9.144z"/></svg></td>
                                    <td>Swimming</td>
                                    <td>45 min</td>
                                </tr>
                                <tr>
                                    <td><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M11 15.414V20h2v-4.586c0-.526-.214-1.042-.586-1.414l-2-2L13 9.414l2 2c.372.372.888.586 1.414.586H20v-2h-3.586l-3.707-3.707a.999.999 0 0 0-1.414 0L8 9.586c-.378.378-.586.88-.586 1.414s.208 1.036.586 1.414l3 3z"/><circle cx="16" cy="5" r="2" fill="currentColor"/><path fill="currentColor" d="M18 14c-2.206 0-4 1.794-4 4s1.794 4 4 4s4-1.794 4-4s-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2s2 .897 2 2s-.897 2-2 2zM6 22c2.206 0 4-1.794 4-4s-1.794-4-4-4s-4 1.794-4 4s1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2s-2-.897-2-2s.897-2 2-2z"/></svg></td>
                                    <td>Cycling</td>
                                    <td>60 min</td>
                                </tr>
                                <!-- <tr>
                                    <td><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m12 11l-1 3l1 3h-1.5L9 14l.5-4.5L12 11Zm1-9L9 6v8l1 3H6l-3 5m17.5 0l-5-3.5L12 17l-1-3l1-3l3.5 2v5.5M14 8.5a1 1 0 1 1 0-2a1 1 0 0 1 0 2Zm-3 2L10 17v-3.5l1-3Z"/></svg></td>
                                    <td>Yoga</td>
                                    <td>40 min</td>
                                </tr> -->
                                <!-- <tr>
                                    <td><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="m77.492 18.457l-17.726 3.127L69.09 74.47a1630.67 1630.67 0 0 0-15.8 2.54l-6.503-36.89l-17.726 3.124l6.49 36.795a1877.847 1877.847 0 0 0-17.196 3.112l3.292 17.696c5.728-1.066 11.397-2.09 17.028-3.084l7.056 40.02l17.727-3.124l-7.04-39.93c5.304-.88 10.57-1.725 15.798-2.54l9.777 55.45l17.727-3.126l-9.697-54.99a1415.91 1415.91 0 0 1 25.18-3.38c15.54 46.39 34.697 99.995 66.936 134.448C190.86 250.992 192 268 214.56 310C192 348 176 412 167.21 471l-48 6v15H192c16-48 64-144 64-144s48 96 64 144h72.79v-15l-48-6C336 412 320 348 294 310c26-42 24.175-59.585 35.83-89.377c32.25-34.452 51.42-88.075 66.967-134.478c8.314 1.04 16.697 2.16 25.18 3.38l-9.696 54.99l17.728 3.124l9.777-55.45c5.23.815 10.494 1.66 15.8 2.54l-7.042 39.93l17.727 3.125l7.056-40.02c5.63.993 11.3 2.017 17.028 3.083l3.292-17.696c-5.78-1.075-11.507-2.11-17.195-3.113l6.49-36.796l-17.727-3.125l-6.504 36.89a1564.46 1564.46 0 0 0-15.8-2.54l9.324-52.886l-17.726-3.127l-9.406 53.35C365.982 63.31 310.982 59.04 256 59.04c-54.98 0-109.983 4.27-169.102 12.767l-9.406-53.35zM256 76.98c35.53 0 71.07 1.83 107.822 5.463c-14.082 34.858-38.454 73.504-63.203 101.967C290.293 199.27 274.35 209 256 209s-34.294-9.73-44.62-24.59c-24.748-28.463-49.12-67.11-63.202-101.967c36.75-3.633 72.29-5.463 107.822-5.463zM256 97c-20.835 0-39 20.24-39 47s18.165 47 39 47s39-20.24 39-47s-18.165-47-39-47z"/></svg></td>
                                    <td>Weight Training</td>
                                    <td>50 min</td>
                                </tr> -->
                            </table>
                            <a href="#">See all &rarr;</a>
                        </section>
        
                        <section class="calories">
                            <h2>Active Calories</h2>
                            <p class="calories__number">500</p>
                            <p class="calories__number">3500</p>
                            <p class="calories__number">14000</p>
                            <p class="calories__text">Today</p>
                            <p class="calories__text">Week</p>
                            <p class="calories__text">Month</p>
                        </section>
                    </div>
                </div>

                <div class="grid-area-2">
                    <section class="friend-acitvity">
                        <h2>Friends Activities</h2>
                        <div class="friend-activity__activity">
                            <div class="friend-acitvity__picture"><div></div></div>
                            <div>
                                <h3 class="friend-activity__name">Jane</h3>
                                <p class="friend-activity__msg">just set a new record in cycling: 30 km!</p>
                            </div>
                        </div>
                        <div class="friend-activity__activity">
                            <div class="friend-acitvity__picture"><div></div></div>
                            <div>
                                <h3 class="friend-activity__name">Mike</h3>
                                <p class="friend-activity__msg">completed the 30-Day Running Streak Challenge!</p>
                            </div>
                        </div>
                        <div class="friend-activity__activity">
                            <div class="friend-acitvity__picture"><div></div></div>
                            <div>
                                <h3 class="friend-activity__name">Anna</h3>
                                <p class="friend-activity__msg">shared a new workout: 'Hill Sprints Interval'!</p>
                            </div>
                        </div>
                        <div class="friend-activity__activity">
                            <div class="friend-acitvity__picture"><div></div></div>
                            <div>
                                <h3 class="friend-activity__name">John</h3>
                                <p class="friend-activity__msg">just set a new record in running: 18 km!</p>
                            </div>
                        </div>
                        <div class="friend-activity__activity">
                            <div class="friend-acitvity__picture"><div></div></div>
                            <div>
                                <h3 class="friend-activity__name">Mila</h3>
                                <p class="friend-activity__msg">completed the 30-Day Running Streak Challenge!</p>
                            </div>
                        </div>
                        <div class="friend-activity__activity">
                            <div class="friend-acitvity__picture"><div></div></div>
                            <div>
                                <h3 class="friend-activity__name">John</h3>
                                <p class="friend-activity__msg">completed the 30-Day Running Streak Challenge!</p>
                            </div>
                        </div>
                        <div class="friend-activity__activity">
                            <div class="friend-acitvity__picture"><div></div></div>
                            <div>
                                <h3 class="friend-activity__name">Anna</h3>
                                <p class="friend-activity__msg">just set a new record in running: 14 km!</p>
                            </div>
                        </div>
                    </section>

                    <section class="friends">
                        <h2>Friends</h2>
                        <div class="friends__friend">
                            <div class="friends__picture"><div></div></div>
                            <h3 class="friends__name">Jane</h3>
                            <p class="friends__msg">last seen 5 min ago</p>
                        </div>
                        <div class="friends__friend">
                            <div class="friends__picture"><div></div></div>
                            <h3 class="friends__name">Mike</h3>
                            <p class="friends__msg">last seen 6 hrs ago</p>
                        </div>
                        <div class="friends__friend">
                            <div class="friends__picture"><div></div></div>
                            <h3 class="friends__name">Anna</h3>
                            <p class="friends__msg">last seen 7 hrs ago</p>
                        </div>
                        <div class="friends__friend">
                            <div class="friends__picture"><div></div></div>
                            <h3 class="friends__name">John</h3>
                            <p class="friends__msg">last seen 2 days ago</p>
                        </div>
                        <div class="friends__friend">
                            <div class="friends__picture"><div></div></div>
                            <h3 class="friends__name">Mila</h3>
                            <p class="friends__msg">last seen 3 weeks ago</p>
                        </div>
                        <div class="friends__friend">
                            <div class="friends__picture"><div></div></div>
                            <h3 class="friends__name">Ben</h3>
                            <p class="friends__msg">last seen 1 year ago</p>
                        </div>
                    </section>
                </div>

                <div class="grid-area-3">
                    <section class="challenges">
                        <h2>Challenges</h2>
                        <div class="challenges__bar challenges__bar--1"></div>
                        <p class="challenges__text">30-Day Running Streak</p>
                        <div class="challenges__bar challenges__bar--2"></div>
                        <p class="challenges__text">30-Day Running Streak</p>
                        <div class="challenges__bar challenges__bar--3"></div>
                        <p class="challenges__text">30-Day Running Streak</p>
                    </section>
                
                    <section class="last-week">
                        <h2>Activities compared to last week</h2>
                        <div class="last-week__chart">
                            <div class="last-week__bar last-week__bar--1"><p>20min</p></div>
                            <div class="last-week__bar last-week__bar--2"><p>25min</p></div>
                            <div class="last-week__bar last-week__bar--3"><p>18min</p></div>
                            <div class="last-week__bar last-week__bar--4"><p>15min</p></div>
                            <div class="last-week__bar last-week__bar--5"><p>10min</p></div>
                            <div class="last-week__bar last-week__bar--6"><p>19min</p></div>
                        </div>
                        <div class="last-week__labels">
                            <p>Running</p>
                            <p>Swimming</p>
                            <p>Cycling</p>
                        </div>
                        <a href="#">See all stats &rarr;</a>
                    </section>
                
                    <div class="personal-bests">
                        <section class="personal-bests__best personal-bests__best--run">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M21 4h-3V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v1H3a1 1 0 0 0-1 1v3c0 4.31 1.8 6.91 4.82 7A6 6 0 0 0 11 17.91V20H9v2h6v-2h-2v-2.09A6 6 0 0 0 17.18 15c3-.1 4.82-2.7 4.82-7V5a1 1 0 0 0-1-1zM4 8V6h2v6.83C4.22 12.08 4 9.3 4 8zm14 4.83V6h2v2c0 1.3-.22 4.08-2 4.83z"/></svg>
                            <h2>Fastest 5K Run</h2>
                            <p>22 min</p>
                        </section>
                        <section class="personal-bests__best personal-bests__best--lift">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M21 4h-3V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v1H3a1 1 0 0 0-1 1v3c0 4.31 1.8 6.91 4.82 7A6 6 0 0 0 11 17.91V20H9v2h6v-2h-2v-2.09A6 6 0 0 0 17.18 15c3-.1 4.82-2.7 4.82-7V5a1 1 0 0 0-1-1zM4 8V6h2v6.83C4.22 12.08 4 9.3 4 8zm14 4.83V6h2v2c0 1.3-.22 4.08-2 4.83z"/></svg>
                            <h2>Haviest Deadlift</h2>
                            <p>250 lbs</p>
                        </section>
                        <section class="personal-bests__best personal-bests__best--plank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M21 4h-3V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v1H3a1 1 0 0 0-1 1v3c0 4.31 1.8 6.91 4.82 7A6 6 0 0 0 11 17.91V20H9v2h6v-2h-2v-2.09A6 6 0 0 0 17.18 15c3-.1 4.82-2.7 4.82-7V5a1 1 0 0 0-1-1zM4 8V6h2v6.83C4.22 12.08 4 9.3 4 8zm14 4.83V6h2v2c0 1.3-.22 4.08-2 4.83z"/></svg>
                            <h2>Longest plank</h2>
                            <p>3 min</p>
                        </section>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>