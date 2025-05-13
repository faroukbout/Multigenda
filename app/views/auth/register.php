<?php include '../views/layouts/header.php'; ?>
<div class="container">
  <h2>Register</h2>
  <?php if (isset($_SESSION['error'])): ?>
    <div class="alert alert-danger"><?= $_SESSION['error']; unset($_SESSION['error']); ?></div>
  <?php endif; ?>
  <form action="/register" method="POST">
    <input type="text" name="name" class="form-control mb-2" placeholder="Full Name" required>
    <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
    <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
    <button type="submit" class="btn btn-success">Register</button>
  </form>
</div>
<?php include '../views/layouts/footer.php'; ?>
