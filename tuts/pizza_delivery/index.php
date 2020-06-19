<?php

    //MySQLi or PDO

    include('config/db_connect.php');

    //1. write query for all pizza
    //$sql = 'SELECT * FROM pizzas';
    $sql = 'SELECT title, ingrediants, id FROM pizzas ORDER BY created_at';

    //2. make query & get the result
    $result = mysqli_query($conn, $sql);

    //3. fetch the resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //free resut from memory
    mysqli_free_result($result);

    //close connection to db
    mysqli_close($conn);

    //print_r($pizzas);

    //print_r(explode(',', $pizzas[0]['ingrediants']));

?>

<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php') ?>

    <h4 class="center grey-text">Pizzas!</h4>

    <div class="container">
        <div class="row">

            <?php foreach($pizzas as $pizza): ?>
                
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <img src="img/pizza.svg" class="pizza" alt="pizza">
                        <div class="card-content center">
                            <h6>
                                <?php echo htmlspecialchars($pizza['title']) ?>
                            </h6>
                            <div>
                                <ul>
                                    <?php foreach(explode(',', $pizza['ingrediants']) as $item) { ?>
                                      <li>
                                        <?php echo htmlspecialchars($item) ?>
                                      </li>      
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="card-action right-align">
                            <a href="details.php?id=<?php echo $pizza['id'] ?>" class="brand-text">
                                more info
                            </a>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>  
        </div>
    </div>

    <?php include('templates/footer.php') ?>

</html>