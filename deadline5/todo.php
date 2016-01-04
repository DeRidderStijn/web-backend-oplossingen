<?php
   session_start();
   $newTodo;
   $showInputError = FALSE;

   if ( isset( $_POST["submit"]))
   {
      if ($_POST["beschrijving"] != "")
      {
         $newTodo = $_POST["beschrijving"];
         $_SESSION["todoList"][] = $newTodo;
      }
      else
      {
         $showInputError = TRUE;
      }
   }

   if ( isset( $_POST["todoDelete"]))
   {
      $needle = ($_POST["todoDelete"]);
      $to_remove = array($needle);
      $_SESSION["todoList"] = array_diff($_SESSION["todoList"], $to_remove);
   }

   if ( isset( $_POST["doneDelete"]))
   {
      $needle = ($_POST["doneDelete"]);
      $to_remove = array($needle);
      $_SESSION["doneList"] = array_diff($_SESSION["doneList"], $to_remove);
   }
   
   if ( isset( $_POST["done"]))
   {
      $needle = ($_POST["done"]);
      $_SESSION["doneList"][] = $needle;
      $to_remove = array($needle);
      $_SESSION["todoList"] = array_diff($_SESSION["todoList"], $to_remove);
   }

   if ( isset( $_POST["undone"]))
   {
      $needle = ($_POST["undone"]);
      $_SESSION["todoList"][] = $needle;
      $to_remove = array($needle);
      $_SESSION["doneList"] = array_diff($_SESSION["doneList"], $to_remove);
   }

?>

<!DOCTYPE html>
<html>
   <head>
      <title>Todo App</title>
      <style>  
      .round-button{

          width:20px;
          height:20px;
          border: 2px solid #f5f5f5;
          border-radius: 50%;
          text-align:center;
          text-decoration:none;

          font-size:10px;
          font-weight:bold;
      }
      .round-button:hover {
         background: #262626;
      }
      .done{
         background:green;
      }
      .delete{
         background:red;
      }
      .undone{
         background:grey;
      }
      </style>
   </head>
   <body>
      <?php if ($showInputError)
      {
         echo "<h3 id='redborder'>Ahh, damn. Lege todos zijn niet toegestaan...</h3> ";
      }

         ?>
      <h1>Todo app </h1>
      <?php 

         if (!empty($_SESSION["todoList"]))
         {
            echo "<ul>";
            foreach($_SESSION["todoList"] as $item)
            { ?>
               <form action="todo.php" method="POST">
                  <button name="done" value="<?= $item ?>" class="round-button done"></button>
                  <?php echo $item ; ?>
                  <button name="todoDelete" value="<?= $item ?>" class="round-button delete"></button>
               </form>
               <?php
            }
            echo "</ul>";
         }
         elseif (!empty($_SESSION["doneList"]))
         {
             echo "<p>Schouderklopje, alles is gedaan! </p>" ;  
         }
         else
         {
            echo "<p> Je hebt nog geen TODO's toegevoegd. Zo weinig werk of meesterplanner? </p>" ;  
         }

         if (!empty($_SESSION["doneList"]))
         {
            echo "<h1>Done and done</h1>";
            echo "<ul>";
            foreach($_SESSION["doneList"] as $item)
            { ?>
               <form action="todo.php" method="POST">
                  <button name="undone" value="<?= $item ?>" class="round-button undone"></button>
                  <?php echo $item ; ?>
                  <button name="doneDelete" value="<?= $item ?>" class="round-button delete"></button>
               </form>
               <?php
            }
            echo "</ul>";
         }
      ?>
   	<form action="todo.php" method="POST">
         <h1>Todo toevoegen</h1>
         <p>
            Beschrijving: <input type="text" id="beschrijving" name="beschrijving">
         </p>
         <input type="submit" id="submit" name="submit" value="Toevoegen">
      </form>
   </body>
</html>