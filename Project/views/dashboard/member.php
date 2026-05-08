<?php

require_once __DIR__ .
'/../../helpers/auth_helper.php';

auth_check('member');

$pageTitle = "Member Dashboard";

?>

<?php require_once __DIR__ .
'/../layouts/header.php'; ?>


<link rel="stylesheet"
      href="/Library-Management-System/Project/public/css/member.css">


<?php require_once __DIR__ .
'/../layouts/navbar.php'; ?>


<div class="container">

    <h1>Member Dashboard</h1>

    <h3>
        Welcome,
        <?= $_SESSION['name'] ?>
    </h3>

    <p class="role">
        Role:
        <?= $_SESSION['role'] ?>
    </p>


    <!-- ========================= -->
    <!-- SUMMARY CARDS -->
    <!-- ========================= -->

    <div class="dashboard-cards">

        <!-- Active Loans -->

        <div class="card">

            <h2>0</h2>

            <p>Active Loans</p>

        </div>


        <!-- Upcoming Due -->

        <div class="card">

            <h2>0</h2>

            <p>Upcoming Due Dates</p>

        </div>


        <!-- Outstanding Fines -->

        <div class="card">

            <h2>0</h2>

            <p>Outstanding Fines</p>

        </div>

    </div>


    <!-- ========================= -->
    <!-- ACTION BUTTONS -->
    <!-- ========================= -->

    <div class="actions">

        <a href="/Library-Management-System/Project/profile">

            My Profile

        </a>

        <a href="/Library-Management-System/Project/logout">

            Logout

        </a>

    </div>

</div>


<script src="/Library-Management-System/Project/public/js/member.js"></script>

<?php require_once __DIR__ .
'/../layouts/footer.php'; ?>