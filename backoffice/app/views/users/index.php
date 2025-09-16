<div class="col-md-12">
      <div class="page-header">
        <h1><?php echo $title?></h1>
      </div>

      <table class="table table-bordered">
        <?php foreach ($users as $user):?>
        <thead>
          <tr>
            <th>id</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $user['id']?></td>
            <td><?php echo $user['firstname']?></td>
            <td><?php echo $user['lastname']?></td>
            <td><?php echo $user['email']?></td>
            <td>
              <button type="button" class="btn btn-primary">Modifier</button>
              <button type="button" class="btn btn-secondary">Supprimer</button>
            </td>
          </tr>
        </tbody>
        <?php endforeach?>
      </table>
    </div>