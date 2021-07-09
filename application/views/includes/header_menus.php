<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- logo -->
            <a class="navbar-brand" href="<?= base_url()?>"><img src="<?= base_url()?>assets/img/logo.svg" alt=""
                    style="height: 30px"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="<?= $home_active_class;?>"><a href="<?= base_url()?>">HOME</a></li>
                <li class="<?= $about_active_class;?>"><a href="<?= base_url()?>Home/about">ABOUT US</a></li>
                <li class="<?= $products_active_class;?>"><a href="product.html">PRODUCTS</a></li>
                <li class="<?= $contact_active_class;?>"><a href="contact.html">WORKS</a></li>
                <li><a data-toggle="modal" data-target="#myModal" href="#myModal">LOGIN</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>