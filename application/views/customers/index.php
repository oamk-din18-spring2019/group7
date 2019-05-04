<h2><?php echo $title; ?></h2>
 
<?php foreach ($customers as $customer): ?>
    <h3><?php echo $customer['customer_id']; ?></h3>
    <p><?php echo $customer['username']; ?></p>
    <p><?php echo $customer['password']; ?></p>
    <!-- <p><a href="<?php echo site_url('news/'.$customer['slug']); ?>">View article</a></p> -->
<?php endforeach; ?> 