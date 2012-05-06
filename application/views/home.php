
    <div id="slider">
        <ul class="rap">
                <li><img src="<?php echo base_url();?>img/slider/slide1.jpg" alt="" /></li>
                <li><img src="<?php echo base_url();?>img/slider/slide2.jpg" alt="" /></li>
                <li><img src="<?php echo base_url();?>img/slider/slide3.jpg" alt="" /></li>
                <li><img src="<?php echo base_url();?>img/slider/slide4.jpg" alt="" /></li>
                <li><img src="<?php echo base_url();?>img/slider/slide5.jpg" alt="" /></li>
            </ul>
            <a href="#" class="prev">prev</a> 
            <a href="#" class="next">next</a>
    </div> <!-- end slider -->

    <div id="home_content"> 
 
        <div id="welcome">
        <h2>WELCOME TO SYAMSAKIDS</h2>
 
        <?php foreach ($abouts as $about): ?>
            <P id="about"><?php echo substr($about->content,0,1024); ?> ....</P>
        <?php endforeach; ?>
        </div> <!-- end welcome -->
       <div id="latestproduct">
            <h2></h2>
                <?php foreach ($products as $product): ?>

                    <div class="product">
                        <a href="<?php echo base_url() . 'img/catalog/' . $product->image; ?>" alt="<?php echo '<b>'.$product->articleName .'</b></br>'. $product->description .'</br>IDR. '. number_format($product->price) .'</br></br>'; ?>">
                            <?php echo img(array(
                                        'src' => base_url() . 'img/catalog/thumbs/' . $product->image
                                        )); ?>
                        </a>


                            <p>
                                <strong><?php echo $product->articleName; ?></strong> <br>
                                 <?php echo 'IDR. ' . number_format($product->price); ?>
                            </p>
                        </div> <!-- end product-->

                <?php endforeach; ?>


        </div> <!-- end latestproduct -->

    </div> <!-- end content -->

    <script src="<?php echo base_url();?>js/jquery.lightbox-0.5.pack.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url();?>js/lightbox-script.js" type="text/javascript" charset="utf-8"></script>

    <script type="text/javascript">

        $(function(){
            $("#slider").faded({
                speed: 500,
                crossfade: true,
                bigtarget: true,
                sequentialloading: true,
                loadingimg: "img/loading.gif",
                autoplay: false,
                random: false,
                autopagination:true
            });

        });

    </script>    