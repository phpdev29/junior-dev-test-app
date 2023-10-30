<?php include('layout/head.php');?>
    <body class="d-flex flex-column min-vh-100" id="body">
            <form id="product_form" method="post" action="/store">
                <nav class="navbar" role="navigation" aria-label="main navigation">
                    <div class="navbar-brand">
                        <p class="navbar-item">Product Add</p>
                    </div>
                    <div class="navbar-end">
                        <div class="navbar-item">
                            <div class="buttons">
                                <button class="button is-success" type="submit" name="save">
                                    <span class="icon-text">
                                        <span class="icon"><i class="fa-solid fa-check"></i></span>
                                        <span>Save</span>
                                    </span>
                                </button>
                                <a class="button is-light" type="button" href="/">
                                    <span class="icon-text">
                                        <span class="icon"><i class="fa-solid fa-x"></i></span>
                                        <span>Cancel</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
                <ul class="border-bottom"></ul>
                <br>
                <div class="field">
                    <label class="label" for="sku">SKU</label>
                    <div class="control">
                        <input class="input" id="sku" name="sku" type="text" placeholder="SKU Number" required>
                        <p class="help is-danger">
                            <label id="sku-error" class="error manual-error" for="sku"></label>
                        </p>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="name">Name</label>
                    <div class="control">
                        <input class="input" id="name" name="name" type="text" autocomplete="off" placeholder="Product Name" required>
                        <p class="help is-danger">
                            <label id="name-error" class="error manual-error" for="name"></label>
                        </p>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="price">Price</label>
                    <div class="control">
                        <input class="input" id="price" name="price" type="text" placeholder="Product Price" required>
                        <p class="help is-danger">
                            <label id="price-error" class="error manual-error" for="price"></label>
                        </p>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="productType">Type Switcher</label>
                    <div class="control">
                        <div class="select">
                            <select id="productType" name="productType" required>
                                <option selected disabled>Select Product Type</option>
                                <option value="DVD">DVD</option>
                                <option value="Furniture">Furniture</option>
                                <option value="Book">Book</option>
                            </select>
                        </div>
                        <p class="help is-danger">
                            <label id="select-error" class="error manual-error" for="productType"></label>
                        </p>
                    </div>
                </div>
                <div class="field" id="dvd">
                    <div class="dvd">
                        <label class="label" for="size">Size (MB)</label>
                        <input class="input" id="size" type="text" name="size" placeholder="Size (MB)">
                    </div>   
                    <p class="help is-danger">
                        <label id="select-error" class="error manual-error" for="size"></label>
                        <br><br>
                    </p> 
                    <p class="subtitle is-6 text-muted">Please provide size</p>
                </div>
                <div class="field" id="furniture">
                    <div class="furniture">
                        <label class="label" for="height">Height (CM)</label>
                        <input class="input" id="height" type="text" name="height" placeholder="Height (CM)">
                        <p class="help is-danger">
                            <label id="select-error" class="error manual-error" for="height"></label>
                            <br>
                        </p>
                        <label class="label" for="width">Width (CM)</label>
                        <input class="input" id="width" type="text" name="width" placeholder="Width (CM)">
                        <p class="help is-danger">
                            <label id="select-error" class="error manual-error" for="width"></label>
                            <br>
                        </p> 
                        <label class="label" for="length">Length (CM)</label>
                        <input class="input" id="length" type="text" name="length" placeholder="Length (CM)">
                        <p class="help is-danger">
                            <label id="select-error" class="error manual-error" for="length"></label>
                            <br><br>
                        </p>  
                        <p class="subtitle is-6 text-muted">Please provide dimensions</p>
                    </div> 
                </div>
                <div class="field" id="book">
                    <div class="book">
                        <label class="label" for="weight">Weight (KG)</label>
                        <input class="input" id="weight" type="text" name="weight" placeholder="Weight (KG)">
                    </div>   
                    <p class="help is-danger">
                        <label id="select-error" class="error manual-error" for="weight"></label>
                        <br><br>
                    </p> 
                    <p class="subtitle is-6 text-muted">Please provide weight</p>
                </div>
            </form>
            <br><br>
        <script src="assets/script.js" type="text/javascript"></script>
        <?php include('layout/footer.php'); ?>
    </body>