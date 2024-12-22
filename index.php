<!DOCTYPE html>
<html lang="fa">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/popup.css" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css"
      rel="stylesheet"
    />
    <title>محصولات</title>
  </head>
  <body>
    <img src="assets/images/digikala.png" alt="دیجیکالا" class="logo" />
    <search class="search-cover">
      <div class="search-bar">
        <form action="" method="GET">
          <button type="submit" id="searchButton">
            <span class="mdi mdi-magnify"></span>
          </button>
          <input
            type="text"
            name="query"
            id="searchInput"
            placeholder="جستجو در دیجیکالا..."
            autocomplete="off"
          />
        </form>
      </div>
    </search>
    <hr>
<section class="products">
    <?php
    $c = 14;
    $pColor = 'p-colored';
for ($i = 1; $i <= $c; $i++) {
?>
    <div id="product">
      <div class="title-pic">
        <h3>محصول شماره <?php echo $i; ?></h3>
        <img src="assets/images/products/i (<?php echo $i; ?>).webp" alt="محصول شماره <?php echo $i; ?>" />
      </div>
      <div class="details">
        <p class="title-details">ویژگی‌های محصول<span class="mdi mdi-chevron-down"></span></p>
        <ul>
          <li>
            <p class="title-detail">جنس</p>
            <div class="de-detail">
              <p>پنبه، ویسکوز</p>
            </div>
          </li>
          <li>
            <p class="title-detail">مدل یقه</p>
            <div class="de-detail">
              <p>برگردان</p>
            </div>
          </li>
          <li>
            <p class="title-detail">تنخور لباس</p>
            <div class="de-detail">
              <p>معمولی</p>
            </div>
          </li>
          <li>
            <p class="title-detail">مورد استفاده</p>
            <div class="de-detail">
              <p>روزمره، مهمانی</p>
            </div>
          </li>
          <li>
            <p class="title-detail">نگهداری</p>
            <div class="de-detail">
              <p>با ماشین لباسشویی در دمای ۳۰ درجه سانتیگراد شستشو شود با دمای کم اتو کشی شود از سفید کننده استفاده نشود به منظور اینکه انتخاب بهتری داشته باشید لطفا راهنمای سایز بندی را در عکس آخر مشاهده نمایید</p>
            </div>
          </li>
        </ul>
      </div>
      <div class="btn">
        <button type="button" id="buy" class="p-btn" >خرید کردن</button>
        <button type="button" id="set" class="p-btn">ست کردن</button>
      </div>
    </div>
<?php
}
?>
</section>

<?php include ('views/pop-up-view.php') ?>

    <script src="assets/js/script.js"></script>
  </body>
</html>
