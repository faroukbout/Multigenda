<?php require_once __DIR__ .'/../layouts/header.php'; ?>

<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form action="<?= APP_URL ?>/auth/authenticate" method="POST">
                    
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ .'/../layouts/footer.php'; ?>