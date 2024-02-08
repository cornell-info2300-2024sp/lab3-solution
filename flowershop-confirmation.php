<?php
$page_title = 'Flowershop';

$nav_home_class = '';
$nav_citations_class = '';
$nav_cooking_class = '';
$nav_flowershop_class = 'active_page';
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/meta.php' ?>

<body>
  <?php include 'includes/header.php' ?>

  <main class="flowers">

    <h2><?php echo $page_title; ?></h2>

    <p>We've received your sample request. We will contact you shortly.</p>

    <h3>Flower Sample Confirmation</h3>

    <dl>
      <dt>Business Name</dt>
      <dd><!-- TODO: output business name --></dd>

      <dt>Contact Phone</dt>
      <dd><!-- TODO: output contact phone number --></dd>

      <dt>Bouquet</dt>
      <dd><!-- TODO: output bouquet type --></dd>
    </dl>

  </main>

  <?php include "includes/footer.php" ?>
</body>

</html>
