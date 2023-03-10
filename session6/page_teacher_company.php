<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Essay Speed Checker</title>
    <link rel="stylesheet" href="styles/style-page_teacher.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="enter-company">
        <div id="queue_mode">
            <h1>ON QUEUE please wait for Admin to accept...</h1>

        </div>
        <div id="step1">
            <h1>ENTER COMPANY NAME</h1>
        </div>
        <div id="step2">
            <input type="text" id="company_name">
        </div>
        <div id="step3">
            <h1>ENTER COMPANY CODE</h1>
        </div>
        <div>
            <div id="step4">
                <input type="password" id="company_code">
            </div>
            <div id="step5">
                <button id="in-company">ENTER</button>
            </div>
            <div>
                <button id="no-company">✖</button>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>
<script src="js/script_page_teacher_company.js"></script>

</html>