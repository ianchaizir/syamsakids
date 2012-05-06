    
    <div id="footer">
       <?php foreach ($mainContacts as $mainContact): ?>
            <div id="contact">
                <h2></h2>
                    <p>
                        <?php if (isset($mainContact->phone1) && $mainContact->phone1 <> '-' || isset($mainContact->phone2) && $mainContact->phone2 <> '-' || isset($mainContact->fax) && $mainContact->fax <> '-'): ?>
                            <?php echo '<br>'. 'Phone Numbers: ';?>
                            <?php if (isset($mainContact->phone1) && $mainContact->phone1 <> '-' || isset($mainContact->phone2) && $mainContact->phone2 <> '-'): ?>
                                <?php echo '<br>'. 'Office: '; ?>
                                <?php if (isset($mainContact->phone1) && $mainContact->phone1 <> '-'): ?>
                                    <?php echo $mainContact->phone1; ?>
                                <?php endif; ?>
                                <?php if (isset($mainContact->phone2) && $mainContact->phone2 <> '-'): ?>
                                    <?php echo ' / ' . $mainContact->phone2; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php if (isset($mainContact->fax) && $mainContact->fax <> '-'): ?>
                                <?php echo '<br>'. 'Fax: ' . $mainContact->fax; ?>
                            <?php endif; ?>
                            </br>
                        <?php endif; ?>

                        <?php if (isset($mainContact->email1) && $mainContact->email1 <> '-' || isset($mainContact->email2) && $mainContact->email2 <> '-'): ?>
                            <?php echo '<br>'. 'Email Address: '; ?>
                            <?php if (isset($mainContact->email1) && $mainContact->email1 <> '-'): ?>
                                <?php echo '<br>'. $mainContact->email1; ?>
                            <?php endif; ?>
                            <?php if (isset($mainContact->email2) && $mainContact->email2 <> '-'): ?>
                                <?php echo '<br>'. $mainContact->email2; ?>
                            <?php endif; ?>
                            </br>
                        <?php endif; ?>
                        
                        <?php if (isset($mainContact->Address) && $mainContact->Address <> '-'): ?>
                            <?php echo '<br>'. 'Address: ' .'<br>'. $mainContact->Address; ?>
                        <?php endif; ?>
                    </p>
            </div> <!-- contact -->
            
            <div id ="social">
                    <h2></h2>
                    <p><br>Quisque mi quam, placerat at pretium sit amet, 
                        mollis vitae nisl. Nunc vulputate feugiat velit, ut 
                        ullamcorper dui semper quis.
                    </p>
                    <ul>
                        <li id="facebook"><a href="<?php echo 'https://www.facebook.com/' . $mainContact->social1; ?>" target="_blank"><img src="<?php echo base_url();?>img/site/facebook.png"></a></li>
                        <li id="twitter"><a href="https://twitter.com/intent/follow?screen_name=<?php echo $mainContact->social2; ?>"><img src="<?php echo base_url();?>img/site/twitter.png"></a></li>
                    </ul>
            </div> <!-- social -->

            <div id="copyright">
                <p>Copyright &copy; 2012 websoluty</p>
            </div> <!-- end copyright -->
        <?php endforeach; ?>
    </div> <!-- end footer -->
    
    <script src="<?php echo base_url();?>js/link-script.js" type="text/javascript" charset="utf-8"></script>

</body>
</html>