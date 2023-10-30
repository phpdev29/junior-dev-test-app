<?php include('layout/head.php');?>
    <body class="d-flex flex-column min-vh-100" id="body">
        <form method="post" id="form" action="/delete">
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <p class="navbar-item">Product List</p>
                </div>
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-success" class="add" href="/add-products">
                                <span class="icon-text">
                                    <span class="icon">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </span>
                                    <span>ADD</span>
                                </span>
                            </a>
                            <button class="button is-light" class="mass-delete" type="submit" name="mass-delete">
                                <span class="icon-text">
                                    <span class="icon">
                                        <i class="fa-solid fa-trash"></i>
                                    </span>
                                    <span>MASS DELETE</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
            <ul class="border-bottom"></ul>
            <br><br>
            <div class="row">
                <?php if (is_array($data) > 0) : ?>
                    <?php foreach($data as $product) : ?>
                    <div class="card">
                        <label class="checkbox">
                            <input type="checkbox" class="delete-checkbox" name="checkbox[]" value="<?php echo $product['sku']; ?>">
                        </label>
                        <div class="card-body text-center">
                            <small class="text-muted">
                                <p class="h6"><?php echo $product['sku'] ?? '' ?></p>
                            </small>
                            <small class="text-muted">
                                <p class="h6"><?php echo $product['name'] ?? '' ?></p>
                            </small>
                            <small class="text-muted">
                            <p class="h6"><?php echo $product['price'] ?? '' ?></p>
                            </small>
                            <small class="text-muted">
                                <p class="h6"><?php echo $product['attribute'] ?? '' ?></p>
                            </small>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </form>
        <?php include('layout/footer.php'); ?>
    </body>