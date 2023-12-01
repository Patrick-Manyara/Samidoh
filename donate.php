<?php
$page = 'donate';
include_once 'header.php';
?>
<section class="page-banner bg_cover position-relative z-1 MoveBelow">
    <div class="shape shape-one scene HiddenOnMob"><span data-depth="1"><img src="assets/images/shape/shape-1.png" alt=""></span></div>
    <div class="shape shape-two scene HiddenOnMob"><span data-depth="2"><img src="assets/images/shape/shape-2.png" alt=""></span></div>
    <div class="shape shape-three scene HiddenOnMob"><span data-depth="3"><img src="assets/images/shape/shape-3.png" alt=""></span></div>
    <div class="shape shape-four scene HiddenOnMob"><span data-depth="4"><img src="assets/images/shape/shape-2.png" alt=""></span></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-title">
                    <h1>The Gift of Giving</h1>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="page-banner-img">
                    <img class="KidsImg" src="assets/images/sam/sami12.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Page-banner section ======-->
<!--====== Start Features section ======-->
<section class="features-area pt-210">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-wrapper mb-50 wow fadeInLeft">
                    <div class="section-title mb-30">
                        <span class="sub-title st-one">Donate</span>
                    </div>
                    <p>Your donation is more than a financial contribution; it's a gift of hope, a catalyst for change. Partner with us to create a positive change and transform our society for a better tomorrow.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="TabContainer mb-50 wow fadeInRight">
                    <div style="border-radius: 10px;">
                        <ul class="tabs">
                            <li class="tab active" onclick="changeTab(0)">Choose Amount</li>
                            <li class="tab" onclick="changeTab(1)">Payment Method</li>
                            <li class="tab" onclick="changeTab(2)">Complete Donation</li>
                        </ul>

                        <div id="chooseAmount" class="tab-content active">
                            <div class="TabContentInner">
                                <p>
                                    Your gift will go a long way
                                </p>
                                <input type="number" placeholder="Enter Amount" name="name" required>
                            </div>

                            <button class="MyBtn NextBtn" onclick="changeTab(1)">Next</button>
                        </div>

                        <div id="paymentMethod" class="tab-content">
                            <div class="TabContentInner">
                                <button onclick="changeTab(2)" class="PaymentCard">
                                    <img src="assets/images/sam/mpesa.png" class="PayImg">
                                    <p>Mobile Money</p>
                                </button>
                                <button onclick="changeTab(2)" class="PaymentCard">
                                    <img src="assets/images/sam/visa.png" class="PayImg">
                                    <p>Credit Card</p>
                                </button>
                                <button onclick="changeTab(2)" class="PaymentCard">
                                    <img src="assets/images/sam/paypal.png" class="PayImg">
                                    <p>PayPal</p>
                                </button>
                                <button onclick="changeTab(2)" class="PaymentCard">
                                    <img src="assets/images/sam/bank.png" class="PayImg">
                                    <p>Manual Bank Transfer</p>
                                </button>
                            </div>
                            <button class="MyBtn PrevBtn" onclick="changeTab(0)">Previous</button>
                            <!-- <button class="MyBtn NextBtn" onclick="changeTab(2)">Next</button> -->
                        </div>

                        <div id="completeDonation" class="tab-content">
                            <h6>
                                Thank you for your generous donation. The Samidoh Foundation truly appreciates you.
                            </h6>
                            <button class="MyBtn PrevBtn" onclick="changeTab(1)">Previous</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Features section ======-->


<style>
    .TabContainer {
        border: 1px solid rgba(88, 86, 233, 0.149);
        border-radius: 10px;
    }

    .tabs {
        display: flex;
        list-style: none;
        padding: 0;
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
    }

    .tab {
        flex: 1;
        text-align: center;
        padding: 10px;
        background-color: <?= $maincolor ?>;
        color: white;
        cursor: pointer;
        font-size: 13px;
    }

    .tab:hover {
        background-color: <?= $secondary ?>;
    }

    .tab-content {
        display: none;
        padding: 10px;
    }

    .tab-content.active {
        display: block;
    }

    .tab.active {
        background-color: #063970;
    }

    input {
        margin-bottom: 30px;
        height: 60px;
        border-radius: 5px;
        padding: 0 30px;
        color: #000;
        border: 1px solid rgba(88, 86, 233, 0.2);
        width: 100%;
        font-weight: 500;
    }

    .MyBtn {
        width: 150px;
        border-radius: 10px;
        height: 50px;
        color: white;
    }

    .NextBtn {
        background-color: <?= $maincolor ?>;
    }

    .PrevBtn {
        background-color: <?= $maincolor ?>;
    }

    .PaymentCard {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        display: flex;
        justify-content: start;
        align-items: center;
        margin: 10px 0px;
        padding: 10px;
        border-radius: 10px;
        background-color: white;
        width: 100%;
    }

    .PaymentCard:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
    }

    .PayImg {
        width: 100px;
        height: 40px;
        object-fit: contain;

    }
</style>

<script>
    function changeTab(index) {
        const tabs = document.querySelectorAll('.tab');
        const tabContents = document.querySelectorAll('.tab-content');

        tabs.forEach((tab, i) => {
            if (i === index) {
                tab.classList.add('active');
                tabContents[i].classList.add('active');
            } else {
                tab.classList.remove('active');
                tabContents[i].classList.remove('active');
            }
        });
    }
</script>

<?php include_once 'footer.php'; ?>