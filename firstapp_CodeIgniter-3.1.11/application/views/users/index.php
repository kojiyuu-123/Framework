<!--main page contents-->

<main role="main" class="flex-shrink-0">
  <div class="container">
      <h1><?php echo $page_title; ?></h1>
      <table class="table table-striped table-hover">
          <thead>
              <tr>
              <th scope="col">#</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Action</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($users as $user): ?>
                  <tr>
                  <th scope="row"><?php echo $user["id"]; ?></th>
                  <td><?php echo $user["first_name"]; ?></td>
                  <td><?php echo $user["last_name"]; ?></td>
                  <td>
                      <a href="#"><button class="btn btn-primary btn-sm">View</button></a>
                      <a href="<?php echo site_url("users/update/$user[id]"); ?>"><button class="btn btn-outline-primary btn-sm">Edit</button></a>

                      <button class="btn btn-sm">Delete</button>
                  </td>
                  </tr>
              <?php endforeach; ?>
          </tbody>
      </table>
  </div>
</main>
