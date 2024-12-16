<?php @include_once 'header.php'; ?>

<div class="container mx-auto p-1">
    <!-- Page Header -->
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-8 mt-1"  >Live Auction Products</h1>

    <!-- Product Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <?php foreach ($auction as $product) { ?>
      <!-- Single Product Card -->
      <div class="bg-white shadow-md rounded-lg p-3 flex flex-col items-center hover:shadow-xl transition-shadow duration-300">
        <!-- Product Image -->
        <img class="w-48 h-48 object-cover rounded-md mb-3" src="<?php echo $product->image; ?>" alt="Product Image">
        
        <!-- Product Title -->
        <h2 class="text-md font-semibold text-gray-800 mb-1 text-center truncate w-full" title="<?php echo $product->title; ?>">
          <?php echo strlen($product->title) > 20 ? substr($product->title, 0, 20) . '...' : $product->title; ?>
        </h2>
        
        <!-- Product Description -->
        <p class="text-sm text-gray-600 mb-2 text-center truncate w-full" title="<?php echo $product->description; ?>">
          <?php echo strlen($product->description) > 20 ? substr($product->description, 0, 20) . '...' : $product->description; ?>
        </p>
        
        <!-- Product Price -->
        <p class="text-sm font-bold text-gray-900 mb-1">Base Price: $<?php echo $product->base_price; ?></p>
        
        <!-- Start and End Time -->
        <p class="text-xs text-gray-500 mb-1">Start: <?php echo $product->start_time; ?></p>
        <p class="text-xs text-gray-500 mb-2">End: <?php echo $product->end_time; ?></p>
        
        <!-- Auction Status -->
        <p class="text-xs text-<?php echo $product->status === 'Active' ? 'green-600' : 'red-600'; ?> font-semibold mb-3">
          Status: <?php echo $product->status; ?>
        </p>
        
        <!-- Join Auction Button -->
        <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition-colors duration-300 text-sm">
          Join Auction
        </button>
      </div>
      <?php } ?>
    </div>
  </div>

</body>
</html>