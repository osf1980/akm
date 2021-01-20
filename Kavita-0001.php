<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<title>  For Mobile </title>
<style>
body {
  background-color: rgba(255, 255, 255, 0.8);
}
/* Portrait */
@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 568px)
  and (-webkit-min-device-pixel-ratio: 2)
  and (orientation: portrait) {
div{
  width: 320px;
  width: 100%;
  height: auto;

 }
 }

/* Landscape */
@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 568px)
  and (-webkit-min-device-pixel-ratio: 2)
  and (orientation: landscape) {

div{
  width: 550px;
  width: 100%;
  height: auto;

 }

 }

.item {
  background-color: #f0f0f3;
  border: 1px solid rgba(0, 0, 0, 0.8);
 }

#p1 {  background-color: rgba(255, 255, 255, 0.8);

  margin-top: 15px;
  margin-bottom: 15px;
  margin-right: 15px;
  margin-left: 15px;

  padding-top: 15px;
  padding-right: 15px;
  padding-bottom: 15px;
  padding-left: 15px;

  line-height: 20px;
  font-size: 14px;
  text-align: left;

}

h3 {
  margin-top: 15px;
  margin-bottom: 15px;
  margin-right: 15px;
  margin-left: 15px;

  padding-top: 15px;
  padding-right: 15px;
  padding-bottom: 15px;
  padding-left: 15px;

  line-height: 32px;
  font-size: 24px;
  text-align: left;


}


</style>
</head>
<body>

<div class="item">
 
<?php
include_once 'class.banglaDate.php';
$bn = new BanglaDate(time());
$an = ($bn->get_date());
include_once 'banglayear.php';
echo $DateAndTime;?><br>

<h3><strong>   প্রভাতী  </strong></h3>

<p id="p1"> 
<br>  ভোর হলো দোর খোলো
<br>  খুকুমণি ওঠ রে!
<br>  ঐ ডাকে যুঁই-শাখে
<br>  ফুল-খুকি ছোটরে!
<br>  রবি মামা দেয় হামা
<br>  গায়ে রাঙা জামা ঐ,
<br>  দারোয়ান গায় গান
<br>  শোন ঐ, রামা হৈ!'

<br>  ত্যাজি নীড় করে ভিড়
<br>  ওড়ে পাখি আকাশে
<br>  এন্তার গান তার
<br>  ভাসে ভোর বাতাসে।
<br>  চুলবুল বুলবুল
<br>  শিস্ দেয় পুষ্পে,
<br>  এইবার এইবার
<br>  খুকুমণি উঠবে!
<br>  খুলি হাল তুলি পাল
<br>  ঐ তরী চললো,
<br>  এইবার এইবার
<br>  খুকু চোখ খুললো।
<br>  আলসে নয় সে
<br>  ওঠে রোজ সকালে
<br>  রোজ তাই চাঁদা ভাই
<br>  টিপ দেয় কপালে।

<br>  উঠলো ছুটলো ওই
<br>  খোকা খুকি সব,
<br>  ''উঠেছে আগে কে''
<br>  ঐ শোনো কলরব।
<br>  নাই রাত মুখ হাত
<br>  ধোও, খুকু জাগো রে!
<br>  জয়গানে ভগবানে
<br>  তুষি' বর মাগো রে।

<br>Writer(s): কাজী নজরুল ইসলাম

 </p>

 </div>





</body>
</html>

