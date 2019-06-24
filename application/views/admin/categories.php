
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Dashboard</span>
      <h3 class="page-title">Jaipur Indian Cuisine</h3>
    </div>
  </div>
  <!-- End Page Header -->
 
  <div class="row">
    <!-- Users Stats -->
    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
      <div class="card card-small">
        <div class="card-header border-bottom">
          <h6 class="m-0">CATEGORIES</h6>
        </div>
        <div class="card-body pt-0">
            <table class='table' id='data-table'>
                <thead>
                    <th>#</th>
                    <th>Category</th>
                    <th>Description</th>
                </thead>
                <tbody>
                    <?php foreach($categories as $index => $category): ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo $category->product_name; ?></td>
                            <td><?php echo $category->description; ?></td>
                        </tr>
                    <?php endforeach ;?>
                </tbody>
            </table>
          
        </div>
      </div>
    </div>
   
  
  
  </div>
</div>
          