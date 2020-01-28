<div class="body-login animated fadeIn">
    <span class="icon-login"><i class="fas fa-user-alt"></i></span>

    <div class="form-login">
        <div class="judul-form mb-3">
            <h3>Member Login</h3>
        </div>
        <form method="POST" id="login">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="Username"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="Username" name="Username" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="Password"><i class="fas fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="Password" name="Password" required>
            </div>
            <div class="col-sm-12">
                <button class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>

    <div class="forgot">
        <a href="#" class="btn-Lupa">Lupa Password</a>
    </div>
</div>

<div class="flash-msg">
    <?= $this->session->flashdata('message'); ?>
</div>