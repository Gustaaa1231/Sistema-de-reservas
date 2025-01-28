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

        .day {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            background-color: #C6E2F9;
            color: #a0a0a0;
            font-size: 18px;
            text-align: center;
            line-height: 50px;
        }

        .current-month {
            color: #fff;
            background-color: #80C3FA;
        }
    </style>
</head>
<body>
    <?php
        // Configurações iniciais
        $mesAtual = isset($_POST['mesAtual']) ? (int)$_POST['mesAtual'] : 0;
        $anoAtual = 2025;

        $meses = [
            "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
            "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
        ];

        // Obter o total de dias do mês
        $diasNoMes = cal_days_in_month(CAL_GREGORIAN, $mesAtual + 1, $anoAtual);
        $primeiroDia = date('w', strtotime("$anoAtual-" . ($mesAtual + 1) . "-01"));
    ?>

    <div class="calendar">
        <form method="POST" class="navigation">
            <button type="submit" name="mesAtual" value="<?= max(0, $mesAtual - 1); ?>" <?= $mesAtual === 0 ? 'disabled' : ''; ?>>Anterior</button>
            <button type="submit" name="mesAtual" value="<?= min(11, $mesAtual + 1); ?>" <?= $mesAtual === 11 ? 'disabled' : ''; ?>>Próximo</button>
        </form>
        <h2 style="font-family: ABeeZee, serif;"><?= $meses[$mesAtual] . " " . $anoAtual; ?></h2>
        <div class="days">
            <?php
                // Adicionar espaços vazios antes do primeiro dia do mês
                for ($i = 0; $i < $primeiroDia; $i++) {
                    echo '<div class="day"></div>';
                }

                // Renderizar os dias do mês
                for ($dia = 1; $dia <= $diasNoMes; $dia++) {
                    echo '<div class="day current-month">' . $dia . '</div>';
                }
            ?>
        </div>
    </div>
</body>
</html>
