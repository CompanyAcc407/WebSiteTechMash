<article class="category_content container">
    <nav class="navigation">
        <a href="#">HOME</a><span>&nbsp;/&nbsp;</span><a href="#">Men</a>
    </nav>
    <div class="wrap-cat">
        <h3>Men</h3>
        <p>All products</p>
    </div>
    <div class="selection">
        <div class="select_dropdown">
            <div class="select">
                <span>Price</span>
                <div class="select_symb"></div>
            </div>
            <input type="hidden" name="price">
            <ul class="select_dropdown-menu" id="select_price">
                <li id="p20">€20-30</li>
                <li id="p30">€30-50</li>
                <li id="p50">€50-100</li>
                <li id="p100">€100 and more</li>
            </ul>
        </div>
        <div class="select_dropdown">
            <div class="select">
                <span>Size</span>
                <div class="select_symb"></div>
            </div>
            <input type="hidden" name="size">
            <ul class="select_dropdown-menu" id="select_size">
                <li id="M">M</li>
                <li id="X">X</li>
                <li id="XL">XL</li>
                <li id="XLL">XLL</li>
            </ul>
        </div>
        <div class="select_dropdown">
            <div class="select">
                <span>Colour</span>
                <div class="select_symb"></div>
            </div>
            <input type="hidden" name="colour">
            <ul class="select_dropdown-menu" id="select_colour">
                <li id="red">red</li>
                <li id="blue">blue</li>
                <li id="gray">gray</li>
                <li id="green">green</li>
            </ul>
        </div>
    </div>
    <div class="product-box">
        <?php foreach ($products['men']['1'] as $product): ?>
            <div class="product">
                <div class="product_img">
                    <img src="<?= $product['img'] ?>" alt="">
                </div>
                <p class="product_name"><?= $product['name'] ?></p>
                <p class="product_price"><?= str_ireplace('.', ',', $product['price']) ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    <ul class="pagination">
        <li><a href="#" class="pagination_link pagination_link__active">1</a></li>
        <li><a href="#" class="pagination_link">2</a></li>
        <li><a href="#" class="pagination_link">3</a></li>
        <li><a href="#" class="pagination_link">4</a></li>
    </ul>
</article>
<div class="check_button__back container">
    <a href="#" class="check_button">Check our lookbook</a>
</div>