<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Varela+Round&display=swap" rel="stylesheet">
    <title>Calendário Janeiro</title>
    <style>
        

        .calendar {
            text-align: center;
             
        }

        .calendar h2 {
            margin-bottom: 20px;
            font-size: 24px;
            
        }

        .days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
            
        }

        .day-form {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .day {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            background-color: #e9eff6;
            color: #a0a0a0;
            font-size: 18px;
            text-align: center;
            line-height: 50px;
            border: none;
            cursor: pointer;
        }

        .current-month {
            color: #333;
            background-color: #f0f0f0;
        }

        .highlight-pink {
            background-color: #d500f9;
            color: #fff;
        }

        .highlight-blue {
            background-color: #2779B8;
            color: #fff;
        }

        .highlight-purple {
            background-color: #b39ddb;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="calendar">
        <h2 style="font-family: ABeeZee, serif;">Janeiro</h2>
        <div class="days">
            <!-- Dias do calendário representados por formulários -->
            <form class="day-form"><button type="submit" class="day">29</button></form>
            <form class="day-form"><button type="submit" class="day">30</button></form>
            <form class="day-form"><button type="submit" class="day">31</button></form>
            <form class="day-form"><button type="submit" class="day current-month">1</button></form>
            <form class="day-form"><button type="submit" class="day current-month">2</button></form>
            <form class="day-form"><button type="submit" class="day current-month">3</button></form>
            <form class="day-form"><button type="submit" class="day current-month">4</button></form>
            <form class="day-form"><button type="submit" class="day current-month">5</button></form>
            <form class="day-form"><button type="submit" class="day current-month">6</button></form>
            <form class="day-form"><button type="submit" class="day current-month">7</button></form>
            <form class="day-form"><button type="submit" class="day current-month">8</button></form>
            <form class="day-form"><button type="submit" class="day current-month">9</button></form>
            <form class="day-form"><button type="submit" class="day current-month">10</button></form>
            <form class="day-form"><button type="submit" class="day current-month">11</button></form>
            <form class="day-form"><button type="submit" class="day current-month">12</button></form>
            <form class="day-form"><button type="submit" class="day current-month">13</button></form>
            <form class="day-form"><button type="submit" class="day current-month">14</button></form>
            <form class="day-form"><button type="submit" class="day current-month">15</button></form>
            <form class="day-form"><button type="submit" class="day current-month">16</button></form>
            <form class="day-form"><button type="submit" class="day current-month">17</button></form>
            <form class="day-form"><button type="submit" class="day current-month">18</button></form>
            <form class="day-form"><button type="submit" class="day current-month">19</button></form>
            <form class="day-form"><button type="submit" class="day current-month">20</button></form>
            <form class="day-form"><button type="submit" class="day current-month">21</button></form>
            <form class="day-form"><button type="submit" class="day current-month">22</button></form>
            <form class="day-form"><button type="submit" class="day current-month">23</button></form>
            <form class="day-form"><button type="submit" class="day highlight-blue">24</button></form>
            <form class="day-form"><button type="submit" class="day current-month">25</button></form>
            <form class="day-form"><button type="submit" class="day highlight-blue">26</button></form>
            <form class="day-form"><button type="submit" class="day highlight-blue">27</button></form>
            <form class="day-form"><button type="submit" class="day current-month">28</button></form>
            <form class="day-form"><button type="submit" class="day current-month">29</button></form>
            <form class="day-form"><button type="submit" class="day current-month">30</button></form>
            <form class="day-form"><button type="submit" class="day current-month">31</button></form>
        </div>
    </div>
</body>
</html>
