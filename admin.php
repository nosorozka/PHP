
<?php
    require('inc/config.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body class="container">
    <section>
        <h1>Admin rozhranie</h1>
        <p>Vítaj admin <?php echo($_SESSION['user_name']);?></p><br>
        <a href="inc/login/logout.php">Odhlásiť sa</a>
    </section>
    
    <section>
        <h2>Questions</h2>
        <form action="inc/question/insert.php" method="post">
            <input type="text" name="question" placeholder="Názov otázky">
            <input type="text" name="answer"placeholder="Názov odpovede">
            <input type="submit" value="Pridať" name="insert_question">
        </form>
        <?php
            $question = $Question->get_question();
            
            echo '<table class="admin-table">';
                foreach($question as $q){
                    echo '<tr>';
                    echo '<td>'.$q->question;'</td>';
                    echo '<td>'.$q->answer;'</td>';
                    echo '<td>
                            <form action="inc/question/delete.php" method="post">
                                <button type = "submit" name="delete_question" value="'.$q->id.'"'.'>Vymazať</button>
                            </form>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td colspan="4">
                            <form action="inc/question/update.php" method="post">
                                <input type="hidden" name="id" value="'.$q->id.'"'.'>
                                <input type ="text" name="question" placeholder="Text otázky"><br>
                                <input type ="text" name="answer" placeholder = "Text odpovede"><br>
                                <input type ="submit" name="update_question" value="Zmeň text">
                            </form>
                        </td>'; 
                    echo '</tr>';
                }
                echo '</table>';
        ?>
    </section>
    
    <section>
        <h2>Category</h2>
        <form action="inc/category/insert.php" method="post">
            <input type="text" name="name" placeholder="Názov category">
            <input type="submit" value="Pridať" name="insert_category">
        </form>
        <?php
            $category = $Category->get_category();
            
            echo '<table class="admin-table">';
                foreach($category as $q){
                    echo '<tr>';
                    echo '<td>'.$q->name;'</td>';
                    echo '<td>
                            <form action="inc/category/delete.php" method="post">
                                <button type = "submit" name="delete_category" value="'.$q->id.'"'.'>Vymazať</button>
                            </form>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td colspan="4">
                            <form action="inc/category/update.php" method="post">
                                <input type="hidden" name="id" value="'.$q->id.'"'.'>
                                <input type ="text" name="name" placeholder="Text otázky"><br>
                                <input type ="submit" name="update_category" value="Zmeň text">
                            </form>
                        </td>'; 
                    echo '</tr>';
                }
                echo '</table>';
        ?>
    </section>

    <section>
        <h2>Topic</h2>
        <form action="inc/topic/insert.php" method="post">
            <input required type="text" name="title" placeholder="Názov titlu">
            <input required type="text" name="subtitle" placeholder="Názov subtitlu">
            <input required type="text" name="number" placeholder="Cislo">
            <input required type="text" name="img" placeholder="link">
            <input required type="text" name="category_id" placeholder="ID category">
            <input type="submit" value="Pridať" name="insert_topic">
        </form>
        <?php
            $topics = $Topic->get_topics();
            
            echo '<table class="admin-table">';
                foreach($topics as $q){
                    echo '<tr>';
                    echo '<td>'.$q->title;'</td>';
                    echo '<td>'.$q->subtitle;'</td>';
                    echo '<td>'.$q->number;'</td>';
                    echo '<td>'.$q->image;'</td>';
                    echo '<td>'.$q->category_id;'</td>';
                    echo '<td>
                            <form action="inc/topic/delete.php" method="post">
                                <button type = "submit" name="delete_topic" value="'.$q->id.'"'.'>Vymazať</button>
                            </form>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td colspan="4">
                            <form action="inc/topic/update.php" method="post">
                                <input type="hidden" name="id" value="'.$q->id.'"'.'>
                                <input required type="text" value="'.$q->title.'" name="title" placeholder="Názov titlu">
                                <input required type="text" value="'.$q->subtitle.'" name="subtitle" placeholder="Názov subtitlu">
                                <input required type="text" value="'.$q->number.'" name="number" placeholder="Cislo">
                                <input required type="text" value="'.$q->image.'" name="img" placeholder="link">
                                <input required type="text" value="'.$q->category_id.'" name="category_id" placeholder="ID category">
                                <input type ="submit" name="update_topic" value="Zmeň text">
                            </form>
                        </td>'; 
                    echo '</tr>';
                }
                echo '</table>';
        ?>
    </section>
    
    
</body>
</html>