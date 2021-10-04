<?php

require('includes/header.inc.php');

if (!isset($_SESSION['id'])) {
    header("location: auth.php");
    exit;
}
?>


<!-- Rules -->
<div class="faq-area pt-100 pb-70">
    <div class="container pt-4">
        <div class="row gx-4 ">
            <div class="col">
                <div>
                    <ul class="sideul">
                        <a href="profile.php" class="side-menu">
                        <li class="sidelist <?php if($page=='profile'){echo 'selected';} ?>">
                            Overviews
                        </li>
                        </a>
                        <a href="myaccount.php" class="side-menu">
                        <li class="sidelist <?php if($page=='myaccount'){echo 'selected';} ?>">
                            My Account
                        </li>
                        </a>
                        <a href="#" class="side-menu">
                        <li class="sidelist">
                            My Performance
                        </li>
                        </a>
                        <a href="mycoupon.php" class="side-menu">
                        <li class="sidelist <?php if($page=='mycoupon'){echo 'selected';} ?>">
                            My Coupons
                        </li>
                        </a>
                        <a href="myevents.php" class="side-menu">
                        <li class="sidelist <?php if($page=='myevents'){echo 'selected';} ?>">
                            My Events
                        </li>
                        </a>
                        <a href="#" class="side-menu">
                        <li class="sidelist">
                            Partner Integrations
                        </li>
                        </a>
                        <a href="membership.php" class="side-menu">
                        <li class="sidelist <?php if($page=='membership'){echo 'selected';} ?>">
                           Subscription
                        </li>
                        </a>
                        <a href="#" class="side-menu">
                        <li class="sidelist">
                            Display Preferences
                        </li>
                        </a>
                        <a href="logout.php" class="side-menu">
                        <li class="sidelist">
                            Logout
                        </li>
                        </a>
                    </ul>
                </div>
            </div>