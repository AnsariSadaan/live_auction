<?php @include_once('header.php')?>

<?php foreach ($auction as $product) {
                    // print_r($auction); die;
                ?>
    <div class="flex flex-col">
        <img class="w-72" src="<?php echo $product->image; ?>"/>
        <p class=" "><?php echo $product->title; ?></p>
        <p class=""><?php echo $product->description; ?></p>
        <p class=""><?php echo $product->base_price; ?></p>
        <p class=""><?php echo $product->start_time; ?></p>
        <p class=""><?php echo $product->end_time; ?></p>
        <p class=""><?php echo $product->status; ?></p>
        <p>Join Auction</button>
        <?php } ?>
    </div>

</body>
</html>