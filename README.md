<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel Strategy Design Pattern Tutorial
## آموزش الگوی طراحی استراتژی با پیاده سازی در لاراول 
استراتژی یک الگوی طراحی رفتاری (Creational) است که به شما امکان می دهد چندین استراتژی مختلف را برای یک کلاس پیاده سازی کنید و -
استراتژی را که در زمان اجرا استفاده می شود انتخاب کنید. این به شما امکان می دهد کد خود را انعطاف پذیرتر و قابل توسعه تر کنید.
که اگر بخواهید، بتوانید رفتار کلاس خود را بدون تغییر کد کلاس تغییر دهید.
- هنگامی که از پترن استراتژی استفاده می کنید، می توانید استراتژی را که در زمان اجرا استفاده می شود انتخاب کنید.
- برای پیاده سازی Strategy pattern در لاراول، باید از یک interface یا abstract class استفاده کنید
که متدهایی را که باید توسط استراتژی های مختلف پیاده سازی شوند، تعریف می‌کند. سپس، باید کلاس هایی را 
ایجاد کنید که از interface یا abstract class ارث می برند و هر استراتژی را پیاده سازی می کنند. در نهایت، باید کلاسی را
ایجاد کنید که استراتژی را انتخاب کند و متدهایی را که توسط استراتژی ها پیاده سازی می شوند، فراخوانی کند.
- استراتژی یک الگوی طراحی رفتاری (Creational) است که به شما امکان می دهد رفتار یک کلاس را بدون تغییر کلاس تغییر دهید

### الگوریتم استراتژی می تواند در طیف گسترده ای از برنامه ها استفاده شود، از جمله:
- برنامه هایی که نیاز به پشتیبانی از چندین استراتژی برای یک عملیات دارند
- برنامه هایی که نیاز به تغییر استراتژی عملیات در زمان اجرا دارند
- برنامه هایی که نیاز به کد قابل تست دارند


###برای مثال کد های لاراول برای اعمال تخفیف
- این کد ها یک سرویس تخفیف ساده را پیاده سازی می کنند که می تواند تخفیف را به دو روش، درصدی و ثابت، اعمال کند.

1. کدها شامل سه فایل PHP است:
    * فایل`DiscountStrategy.php` که یک رابط را تعریف می کند که تمام کلاس های تخفیف باید از آن پیروی کنند.
    * فایل`PercentageDiscount.php` که یک کلاس تخفیف را پیاده سازی می کند که مقدار تخفیف را بر اساس درصد محاسبه می کند.
    * فایل`FixedDiscount.php` که یک کلاس تخفیف را پیاده سازی می کند که مقدار تخفیف را بر اساس یک مقدار ثابت محاسبه می کند.
2. کدها همچنین شامل یک فایل `api.php` است که یک مسیر API را تعریف می کند که می تواند برای اعمال تخفیف به یک مقدار استفاده شود.
3. کدها همچنین شامل یک کنترلر `OrderController.php` است که این مسیر API را پیاده سازی می کند.

![percentage](https://github.com/BabakNiknejad/Laravel-strategy-design-pattern/assets/89449079/d4c86db8-ecd4-44e6-af32-2218bd4fe074)
![fixed](https://github.com/BabakNiknejad/Laravel-strategy-design-pattern/assets/89449079/94ea0323-bb9a-4de5-8979-1d1c71e468ab)
