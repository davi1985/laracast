<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LaraCast Tutorial</title>
    <style>
        body {
            font-family: sans-serif;
        }

        header {
            background-color: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>

<h3>My Tasks</h3>
<ul>
    <?php foreach ($tasks as $task): ?>
        <li>
            <?php if ($task->completed) : ?>
                <strike><?= $task->description; ?></strike>
            <?php else: ?>
                <?= $task->description; ?>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>
