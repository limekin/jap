
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
          <h6 class="m-0">Menu items</h6>
        </div>
        <div class="card-body pt-0">
            <table class='table' id='data-table'>
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Subcategory</th>
                    <th>Price/piece</th>
                    <th>Details</th>
                </thead>
                <tbody>
                    <?php foreach($menu as $index => $item): ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo $item->title ; ?></td>
                            <td><?php echo $item->product_name; ?></td>
                            <td><?php echo $item->category_name; ?></td>
                            <td><?php echo $item->price; ?></td>
                            <td><?php echo $item->details; ?></td>
                        </tr>
                    <?php endforeach ;?>
                </tbody>
            </table>
          
        </div>
      </div>
    </div>
   
  
  
  </div>
</div>
          