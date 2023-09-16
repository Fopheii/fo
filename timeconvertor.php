<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Time Converter | website to check the Calendar</title>
    <!-- Meta tags -->
    <meta name="description" content="Time converter tool. Use this time calculator website to check the Calendar, Weeks in a month, week number, Seconds in a year, Seconds in an hour ect" />
    <meta property="og:title" content="Time Converter | Conversions" />
    <meta property="og:description" content="Time converter tool. Use this time calculator website to check the Calendar, Weeks in a month, week number, Seconds in a year, Seconds in an hour, Seconds in a Day, Months of year, Minutes in a day, Hours in a week, What week is it? Days in a Year, Hours in a Year and Weeks in a Year..." />
    <meta property="og:url" content="https://downloaderi.com/" />
    <meta property="og:site_name" content="Time Converter | Conversions | downloader.com" />
    <!-- custom styles  -->
    <link rel="stylesheet" href="calstyles.css?v=2">
   <style>.active6{color: white;}</style>
</head>
<body>
    <!-- Nav bar  -->
<?php include('navbar.php') ?>


<!-- Main Area -->
    <div id="page-container">
 <div id="et-boc" class="et-boc">
<div class="container content hm_content_area">

<!-- Content -->
<h1 class="text-center"> <a href="https://Downloaderi.com/" class="homepage_title"> Time Converter </a></h1>
        <div class="conversion-category-content">
         <div class="desktop">
         <div class="conversion-page">
         <div class="conversion-form">

          <!-- Form Area  -->
            <div class="time-form-div">

                <div class="form-group">
            <label class="font-weight-bold" for="from-unit">From</label>
            <select class="form-control" id="inputType3">
            <option value="seconds">Seconds</option>
            <option value="minutes">Minutes</option>
            <option value="hours">Hours</option>
            <option value="days">Days</option>
            <option value="centuries">Centuries</option>
            <option value="months">Months</option>
            <option value="weeks">Weeks</option>
            <option value="years">Years</option>
            <option value="decades">Decades</option>
            </select>
                 </div>

                <div class="form-group">
            <label class="font-weight-bold" for="to-unit">To</label>
            <select class="form-control" id="resultType3">
            <option value="minutes">Minutes</option>
            <option value="seconds">Seconds</option>
            <option value="hours">Hours</option>
            <option value="days">Days</option>
            <option value="centuries">Centuries</option>
            <option value="months">Months</option>
            <option value="weeks">Weeks</option>
            <option value="years">Years</option>
            <option value="decades">Decades</option>
             </select>
                </div>

            <div id="input-holder">
            <div class="form-group">
            <label class="font-weight-bold" for="amount">Value</label>
                <div class="input-group">
            <input id="input3" autofocus type="text" inputmode="decimal" autocomplete="off" value="1" class="calc-input form-control">
                </div>
            <div id="amount-error" class="form-text input-error"></div>
            </div>
            </div>

            <div class="form-group">
            <label class="font-weight-bold" for="amount">Result</label>
            <div class="input-group">
            <input id="result3" autofocus type="text" inputmode="decimal" autocomplete="off" value="0.016667" class="calc-input form-control">
            </div>
            <div id="amount-error" class="form-text input-error"></div>
            </div>

            </div>
            </div>
         <!-- End Form Area -->

        <!-- Desc holding div  -->
        <div class="unit-box-row mt-4 time-desc-div">
        <div class=" card mb-3">
        <div id="unit-box-1 card " class="unit-box p-3">
            Second is the time interval equal to 9192631770 periods of the radiation corresponding to the transition between the two hyperfine levels of the ground state of the caesium-133 atom
         </div>
        </div>
            <div class="card">
            <div id="unit-box-2 " class="unit-box p-3">
            <div id="minutes" class="colors">a period of time equal to 60 seconds; one sixtieth of an hour.</div>
            <div id="seconds" class="colors" style="display:none">Second is the time interval equal to 9192631770 periods of the radiation corresponding to the transition between the two hyperfine levels of the ground state of the caesium-133 atom</div>
            <div id="hours" class="colors" style="display:none">An hour is a unit of time conventionally reckoned as ​1⁄24 of a day and scientifically reckoned as 3,599–3,601 seconds</div>
            <div id="days" class="colors" style="display:none">A day is the approximate time it takes for the Earth to complete one rotation. It is defined as exactly 86,400 seconds.</div>
            <div id="centuries" class="colors" style="display:none">A century is a period of 100 years.</div>
            <div id="months" class="colors" style="display:none">A month is 1/12th of a year. In the Gregorian calendar, an average month has exactly 30.436875 days. It was originally based on the time it takes for the moon to rotate the Earth.</div>
            <div id="weeks" class="colors" style="display:none">A week is a period of 7 days.</div>
            <div id="years" class="colors" style="display:none">In the Gregorian calendar, a year has on average 365.2425 days. It is based on the amount of time it takes for the Earth to rotate the sun..</div>
            <div id="decades" class="colors" style="display:none">A decade is a period of 10 years.</div>
            </div>
            </div>
            </div>

            </div>
            </div>
            </div>
            </div>
        </div>

<!-- End Content Area -->

<!-- Footer -->
   <?php include('footer.php') ?>
    </div>
    </div>
    </div>


 
<script src="script.js?v=2"></script>

<script>
    $(function() {
$('#resultType3').change(function() {
$('.colors').hide();
$('#' + $(this).val()).show();
});
});
</script>
</body>
</html>