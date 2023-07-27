<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel Strategy Design Pattern Tutorial
## آموزش الگوری طراحی استراتژی در لاراول
- کد های لاراول برای اعمال تخفیف
- این کد ها یک سرویس تخفیف ساده را پیاده سازی می کنند که می تواند تخفیف را به دو روش، درصدی و ثابت، اعمال کند.

1. کدها شامل سه فایل PHP است:
    * `DiscountStrategy.php` که یک رابط را تعریف می کند که تمام کلاس های تخفیف باید از آن پیروی کنند.
    * `PercentageDiscount.php` که یک کلاس تخفیف را پیاده سازی می کند که مقدار تخفیف را بر اساس درصد محاسبه می کند.
    * `FixedDiscount.php` که یک کلاس تخفیف را پیاده سازی می کند که مقدار تخفیف را بر اساس یک مقدار ثابت محاسبه می کند.
2. کدهای شما همچنین شامل یک فایل `routes.php` است که یک مسیر API را تعریف می کند که می تواند برای اعمال تخفیف به یک مقدار استفاده شود.
3. کدهای شما همچنین شامل یک کنترلر `OrderController.php` است که این مسیر API را پیاده سازی می کند.

برای استفاده از این کدها، باید آنها را در یک پروژه Laravel بارگذاری کنید. سپس می توانید از مسیر API برای اعمال تخفیف به یک مقدار استفاده کنید.

![percentage](https://github.com/BabakNiknejad/Laravel-strategy-design-pattern/assets/89449079/d4c86db8-ecd4-44e6-af32-2218bd4fe074)
![fixed](https://github.com/BabakNiknejad/Laravel-strategy-design-pattern/assets/89449079/94ea0323-bb9a-4de5-8979-1d1c71e468ab)
