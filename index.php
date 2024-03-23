<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Планировщик задач</title>
</head>
<body>
    <div class="wrapper">
    <h1 class="title">Мои задачи</h1>
    <div class="app">
        <!-- форма для добавления задач -->
        <form action="add_task.php" method="post">
            <input class="form_row" type="text" name="task" placeholder="Добавить задачу" required>
            <input class="select_row" type="date" name="task_date" required>
            <input type="time" name="task_time" required>
            <select name="priority">
                <option value="low">Низкая важность (low)</option>
                <option value="medium">Средняя важность (medium)</option>
                <option value="high">Высокая важность (high)</option>
            </select>
            <button class="btn" type="submit">Добавить</button>
        </form>
        <!-- Список задач -->
        <ul id="task-list">
            <!-- Здесь будут отображаться задачи -->
        </ul>
    </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>