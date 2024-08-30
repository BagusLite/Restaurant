<div class="card-body login-card-body">
    <p class="login-box-msg">Sign in</p>

    <form wire:submit.prevent="submit">
      <div class="input-group mb-3">
        <input type="email" class="form-control" type="email" wire:model="email" id="email" placeholder="Email">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="password" class="form-control" type="password" wire:model="password" id="password" placeholder="Password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
