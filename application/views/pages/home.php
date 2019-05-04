<section id="showcase">
    <div class="container">
        <h1>OuLe Best Online Flower&Gift Shop</h1>
        <p> We offer best flowers and gift in affordable prices,you can send for birthday,anniversary,wedding or any occasion</p>
    </div>
</section>

<section id="newsletter">
    <div class="container">
        <h1>Subscribe To Our Newsletter</h1>
        <form>
        <?php $this->load->view('subscriber/subscribe');?>
        </form>
    </div>
</section>

<section id="boxes">
    <div class="container"> 
        <div class="box">
            <a href="Popular.html"> <img src="<?= $img_url . "logo_hot.png"; ?>"></a>
            <h3>Popular Choices</h3>
            <p> The most popular flowers and gifts in our shop are the flowers most frequently chosen by our customers</p>
        </div>
        <div class="box">
            <a href="recommended.html"><img src="<?= $img_url . "logo_recommended.png"; ?>"></a>
            <h3>Recommended Flowers</h3>
            <p> Recommended flowers and gifts are the ones we suggest to you to use according to professionals opinions</p>
        </div>
        <div class="box">
            <a href="gifts.html"><img src="<?= $img_url . "logo_gift.png"; ?>"></a>
            <h3>Gifts</h3>
            <p> Here you can find gifts to offer your beloved one on the special occasion.</p>
        </div>
        <div class="box1" >
            <a href="services.html"><img src="<?= $img_url . "logo_joinus.png"; ?>"></a>
            <h3>Join US</h3>
            <p>If you are intrested or you liked one of our products pelase dont hesitate to make an account so you can order some flowers now!</p>
        </div>
    </div>
</section>