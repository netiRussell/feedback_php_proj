<?php require("includes/header.php"); ?>

<main>
  <div class="container d-flex flex-column align-items-center">
   
    <h2>Feedback</h2>

    <?php // Retrieve info and print error if no feedbacks in the system.
    $sql = "SELECT name,content,date FROM `feedback`";
    $result = mysqli_query($conn, $sql);

    if( $result->num_rows == 0 ): ?>
    <p style="color: red">No feedbacks in the system.</p>

    <?php // If there is some feedback, print it out.
    else:
      while( $feedback = mysqli_fetch_assoc($result) ): ?>
      <div class="card my-3">
        <div class="card-body">
          "<?php echo $feedback["content"]; ?>" <strong>By</strong> <?php echo $feedback["name"]; ?> <strong>On</strong> <?php echo $feedback["date"]; ?> 
        </div>
      </div>
      <?php endwhile;
    endif;
    ?>

</main>

<?php require("includes/footer.php"); ?>

