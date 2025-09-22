<div class="col-md-6">
  <div class="page-header">
    <h1><?php echo $title ?></h1>
  </div>
  <form action="users/create" method ="post">
    <div>
      <label for="firstname">Firstname</label>
      <input type="text" id="firstname" name="firstname" placeholder="Alex" />
    </div>
    <div>
      <label for="lastname">Lastname</label>
      <input type="text" id="lastname" name="lastname" placeholder="Doe" />
    </div>
    <div>
      <label for="email">E-mail</label>
      <input type="email" id="email" name="email" placeholder="alex.doe@gmail.com" />
    </div>
    <div>
      <label for="password">Paswword</label>
      <input type="password" id="password" name="password" placeholder="" />
    </div>
    <div>
      <input type="submit" class="btn btn-lg btn-primary" />
    </div>
  </form>
</div>