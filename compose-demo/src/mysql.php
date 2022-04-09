       <?php
        $connection = new PDO('mysql:host=mysql;dbname=demo;charset=utf8', 'root', 'root');
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'demo'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

        if (empty($tables)) {
            echo '<p class="center">Nu exita table in baza de date <code>demo</code>.</p>';
        } else {
            echo '<p class="center">Baza de date demo conține urătoarele tabele:</p>';
            echo '<ul class="center">';
            foreach ($tables as $table) {
                echo "<li>{$table}</li>";
            }
            echo '</ul>';
        }
        ?>
