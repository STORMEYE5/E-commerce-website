<?php
// include common.php as it contains the header and footer... website has a constant header and footer throughout

include('common.php');
$title = "Products";
//Ouputs the header for the page and opening body tag

outputHeader($title);
outputNav();
?>

    <div class="products-box">
        <div class="television">
            <div class="title">
                TELEVISION
            </div>
            <div class="row1">
                <img src="../media/xiaomi_q2_65.png" alt="" style="width:250px;height:250px" onclick="openCart('XQ2')">
            </div>
            <div class="row2">
                <img src="../media/xiaomi_p1e_65.png" alt="" style="width:250px;height:250px" onclick="openCart('XP1E')">
            </div>
        </div>
        <div class="phones">
            <div class="title">
                PHONES
            </div>
            <div class="row1">
                <img src="../media/xiaomi_11t_pro.png" alt="" style="width:250px;height:250px" onclick="openCart('X11TP')">
                <img src="../media/xiaomi_12_lite.png" alt="" style="width:250px;height:250px" onclick="openCart('X12L')">
            </div>
            <div class="row2">
                <img src="../media/xiaomi_12s_ultra.png" alt="" style="width:250px;height:250px" onclick="openCart('X12SU')">
                <img src="../media/xiaomi_12t.png" alt="" style="width:250px;height:250px" onclick="openCart('X12T')">
            </div>
        </div>
        <div class="speakers">
            <div class="title">
                SPEAKERS
            </div>
            <div class="row1">
                <img src="../media/JBL_PartyBox_310.webp" alt="" style="width:250px;height:250px" onclick="openCart('JP310')">
                <img src="../media/JBL_PartyBox_110.webp" alt="" style="width:250px;height:250px" onclick="openCart('JP110')">
            </div>
            <div class="row2">
                <img src="../media/JBL_PULSE_5.webp" alt="" style="width:250px;height:250px" onclick="openCart('JP5')">
                <a>
                    <img src="../media/JBL_PartyBox_710.webp" alt="" style="width:250px;height:250px" onclick="openCart('JP710')">
                </a>
            </div>
        </div>
    </div>

    <div class="cart-form">
        <div class="cart-details">
            <div>
                <button class="close-window" onclick="openCart()">X</button>
            </div>
            <div>
                <button class="add-button" id="add_button">ADD TO CART</button>
            </div>
        </div>
    </div>

    <div class="personal_cart">
        <div id="personal_cart_details">
            <div class="product" id="0">
                <div id="image">
                    <img id="image0" src="../media/JBL_PARTYBOX_710.webp" alt="" style="width:100px;height:100px;">
                </div>
                <div id="description">
                    JBL PARTYBOX 710
                    QUANTITY: ?
                </div>
                <div class="remove_product">
                    <button id="remove_product" onclick="remove_product()">
                        X
                    </button>
                </div>
            </div>
        </div>
        <div class="checkout">
            <div class="payment">
                <button id="shop" onclick="display_personal_cart()">SHOP</button>
                <button id="pay">PAY</button>
            </div>
            <div class="button_link">
                <a href="hist.php" id="order_text">
                    <button id="order_history">
                        ORDER HISTORY
                    </button>
                </a>
            </div>
        </div>
    </div>
    <script src="../JavaScript/products.js"></script>

<?php
OutputFooter();
?>