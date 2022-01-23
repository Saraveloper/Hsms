<?php require_once('admin/dbConnection.php'); ?>

<div class="container">
<div class="content"> 
        <?php
            try {   
                    //selecting data by id 
               $stmt = $con->query('SELECT id, blog_title,blog_content FROM blog ORDER BY id DESC');

                while($row = $stmt->fetch_array()){
                    
                    echo '<div>';
                        echo '<h1><a href="">'.$row['blog_title'].'</a></h1>';
                             echo '<hr>';
                 


                        echo '<p>'.$row['blog_content'].'</p>';                
                                    
                    echo '</div>';

                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        ?>

        
</div>

</div>
