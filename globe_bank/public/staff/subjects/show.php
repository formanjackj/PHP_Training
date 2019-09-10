<?php require_once('../../../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="subjects listing">
    <?php $id = $_GET['id'] ?? '1'; ?>

    <h1>This Subject - <?php echo h($id); ?></h1>

    <?php echo h($id); ?>

    <a href="show.php?name=<?php echo u('John Doe'); ?>">Link</a><br />
    <a href="show.php?company=<?php echo u('Widgets&More'); ?>">Link</a><br />
    <a href="show.php?query=<?php echo u('!#*?'); ?>">Link</a><br />
  </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
// this should work
//6b813fc38c9ff52ae4ed9282837ce3535962224f
