<?php
$page_title = 'Order page';
?>
<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>

<body>
    <main class="order-bg">
        <div class="container">
            <div class="row justify-content-center align-items-center vh-100">
                <div class="col-6">
                    <div class="order-img-wrap">
                        <div class="order-img">
                            <img src="img/order-img1.png">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex flex-column justify-content-center align-items-center text-center">
                        <div class="col-12 pb-5">
                            <div class="order-title pb-4">
                                <h3 class="text-pt">Order Now!</h3>
                            </div>
                            <div class="order-content">
                                <p class="font-20 text-mont">Place your order, We will prepare fast!</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="btn-wrap text-center mx-auto">
                                <a href="#" class="btn-animation btn-order">Place Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include 'foot.php'; ?>
</body>