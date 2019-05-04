<section id="newsletter">
            <div class="container">
              <h1 style="margin-left:120px;">Find out Popular Flower here !</h1>
            
            </div>
        </section>     

    <section id="main">
        <div class="container">
            <article id="main-col">
                <h1 class="page-title">Popular Flowers</h1>
                <ul id="services">
                <?php foreach ($products as $product): ?>
                    <li>
                        <span><img class="imglist" src="<?= $img_url .  $product['img']; ?>"></span>
                        <h3><?php echo $product['name']; ?></h3>
                        <p>Information about the flower</p>
                        <p>Pricing: $1,000 - $3,000</p>
                        <button type="submit" class="button_1">Order</button>
                    </li>
                <?php endforeach; ?>
            </ul>
        </article>
        <aside id="sidebar">
        <form class="quote">
                       
            <?php $this->load->view('messager/message');?>
            </form>
                <div class="dark">
                  <h3>Send us a Message!</h3>
                  
                </div>
              </aside>
      </div>
    </section>