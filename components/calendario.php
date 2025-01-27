<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário 2025</title>
    <style>

        .calendar {
            text-align: center;
        }

        .calendar h2 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        .calendar .navigation {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .navigation button {
            background-color: #2779B8;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .navigation button:disabled {
            background-color: #b0bec5;
            cursor: not-allowed;
        }

        .navigation button:hover:not(:disabled) {
            background-color: #004494;
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
            background-color: #C6E2F9;
            color: #a0a0a0;
            font-size: 18px;
            text-align: center;
            line-height: 50px;
            border: none;
            cursor: pointer;
        }

        .current-month {
            color: #fff;
            background-color:#80C3FA;
        }
    </style>
</head>
<body>
    <div class="calendar">
        <div class="navigation">
            <button id="prevMonth">Anterior</button>
            <button id="nextMonth">Próximo</button>
        </div>
        <h2 style="font-family: ABeeZee, serif;" id="monthName">Janeiro 2025</h2>
        <div class="days" id="calendarDays"></div>
    </div>

    <script>
        const months = [
            "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
            "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
        ];

        const daysInMonth = (month) => new Date(2025, month + 1, 0).getDate();

        let currentMonth = 0;  // Inicia em janeiro de 2025
        const currentYear = 2025;

        const monthName = document.getElementById("monthName");
        const calendarDays = document.getElementById("calendarDays");

        function renderCalendar() {
            calendarDays.innerHTML = "";  // Limpar os dias anteriores
            monthName.textContent = `${months[currentMonth]} ${currentYear}`;

            const firstDay = new Date(currentYear, currentMonth, 1).getDay();
            const totalDays = daysInMonth(currentMonth);

            // Preencher dias em branco antes do início do mês
            for (let i = 0; i < firstDay; i++) {
                const blankDay = document.createElement("div");
                blankDay.classList.add("day");
                calendarDays.appendChild(blankDay);
            }

            // Adicionar dias do mês
            for (let day = 1; day <= totalDays; day++) {
                const form = document.createElement("form");
                form.classList.add("day-form");

                const button = document.createElement("button");
                button.type = "submit";
                button.classList.add("day", "current-month");
                button.textContent = day;

                form.appendChild(button);
                calendarDays.appendChild(form);
            }

            // Desabilitar botões de navegação quando no limite do ano 2025
            document.getElementById("prevMonth").disabled = currentMonth === 0;
            document.getElementById("nextMonth").disabled = currentMonth === 11;
        }

        document.getElementById("prevMonth").addEventListener("click", () => {
            if (currentMonth > 0) {
                currentMonth--;
                renderCalendar();
            }
        });

        document.getElementById("nextMonth").addEventListener("click", () => {
            if (currentMonth < 11) {
                currentMonth++;
                renderCalendar();
            }
        });

        renderCalendar();
    </script>
</body>
</html>
