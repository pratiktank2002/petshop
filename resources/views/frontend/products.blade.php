<div id="product-list">
    @foreach ($products as $product)
        // Display product information
    @endforeach
</div>

{{ $products->links('pagination::bootstrap-5') }}

<script>
    $(function() {
        // Add click event listener to pagination links
        $('body').on('click', '.pagination a', function(e) {
            e.preventDefault();

            // Get the page number from the link href attribute
            var page = $(this).attr('href').split('page=')[1];

            // Send AJAX request to get the next set of products
            $.ajax({
                url: '{{ route('products.page', '') }}/' + page,
                type: 'get',
                success: function(data) {
                    // Update the product list with the new products
                    $('#product-list').html(data);
                }
            });
        });
    });
</script>
