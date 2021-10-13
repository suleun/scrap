<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <!-- IMPORTANT: No CSS link needed as of v1 - It's all inlined -->
        <!-- Pre v1.0.0 versions need the minified css -->
        <!-- <link rel='stylesheet'
        href='https://unpkg.com/v-calendar/lib/v-calendar.min.css'> -->

    </head>
    <body>

        <div id='app'>
            <v-calendar></v-calendar>
            <v-date-picker v-model='selectedDate'/>
        </div>

        <!-- 1. Link Vue Javascript -->
        <script src='https://unpkg.com/vue/dist/vue.js'></script>

        <!-- 2. Link VCalendar Javascript (Plugin automatically installed) -->
        <script src='https://unpkg.com/v-calendar'></script>

        {{-- firstDayOfWeek	지정된 요일의 첫 번째 요일입니다. 이것은 1에서 7까지의 숫자입니다(일요일부터 토요일까지 --}}

        <v-calendar :first-day-of-week="2" show-iso-weeknumbers="show-iso-weeknumbers"/>

        <v-calendar is-expanded :first-day-of-week="2" show-iso-weeknumbers="show-iso-weeknumbers"/>

 
        <!--3. Create the Vue instance-->
        <script>
            new Vue({
                el: '#app',
                data: {
                    selectedDate: null
                }
            })
        </script>

    </body>
</html>