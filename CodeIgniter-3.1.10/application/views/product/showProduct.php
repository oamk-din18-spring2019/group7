<?php foreach ($products as $product): ?>
    <h3><?php echo $product['product_id']; ?></h3>
    <p><?php echo $product['name']; ?></p>
    <p><?php echo $product['discription']; ?></p>
    <p><?php echo $product['price']; ?></p>
    <!-- <p><a href="<?php echo site_url('news/'.$product['slug']); ?>">View article</a></p> -->
<?php endforeach; ?> 