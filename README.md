<p align="center">
<picture>
<img width="160" height="160"  alt="Port_Pro_Panel" src="https://raw.githubusercontent.com/port-pro/Port-Pro-Panel/master/pro/xlogo.png">
</picture>
  </p> 
<h1 align="center"/>Port_Pro_Panel</h1>
<h6 align="center">Port_Pro_Panel SSH User Management<h6>
<p align="center">
<img alt="GitHub all releases" src="https://img.shields.io/github/downloads/xpanel-cp/XPanel-SSH-User-Management/total">
<img alt="GitHub release (latest by date)" src="https://img.shields.io/github/v/release/xpanel-cp/XPanel-SSH-User-Management">
<a href="https://t.me/J_O_K_E_R_EGY" target="_blank">
<img alt="Telegram Channel" src="https://img.shields.io/endpoint?label=Channel&style=flat-square&url=https%3A%2F%2Ftg.sumanjay.workers.dev%2FXpanelssh&color=blue">
</a>
</p>
 
<p align="center">
	<a href="./README-EN.md">
	English
	</a>
	/
	<a href="./README.md">
	فارسی
	</a>
</p>


### فهرست
- [معرفی](#معرفی)<br>
- [پرتکل](#پرتکل-)<br>
- [امکانات](#امکانات)<br>
- [نصب](#نصب) <br>
  - [بهینه سازی سرور](#بهینه-سازی-سرور)<br>
  - [فعال سازی SSL](#فعال-سازی-ssl)<br>
- [حمایت از ما](#حمایت-از-ما-hearts)<br>
 
## معرفی <br>
ایکس پنل یک نرم افزار تحت وب جهت مدیریت اکانت SSH می باشد. با کمک پنل تحت وب ایکس پنل می توانید کاربران را مدیریت کرده و محدودیت اعمال کنید.

## پرتکل <br>
پرتکل هایی که ایکس پنل پشتیبانی می کند برپایه اتصال SSH  هستند.<br>
**SSH-DIRECT | SSH-TLS | SSH-DROPBEAR | SSH-DROPBEAR-TLS | SSH-WEBSOCKET | SSH-WEBSOCKET-TLS** <br><br>
پورت های 443 و 80 و 8880 بصورت پیش فرض برای وب سرور رزور شده است. <br>
Websocket HTTP Payload<br>
`GET /ws HTTP/1.1[crlf]Host: sni.domain.com[crlf]Upgrade: websocket[crlf][crlf]` <br>
Websocket SSL Payload<br>
`GET wss://sni.domain.com/ws HTTP/1.1[crlf]Host: sni.domain.com[crlf]Upgrade: websocket[crlf][crlf]` <br>

## امکانات <br>
:green_circle: ایجاد کاربر بدون محدودیت <br>
:green_circle: اعمال محدودیت در حجم مصرفی و تاریخ انقضا<br>
:green_circle: قابلیت محاسبه تاریخ انقضا در اولین اتصال<br>
:green_circle: اعمال محدودیت در چند کاربره بودن اکانت<br>
:green_circle: مشاهده کاربران آنلاین<br>
:green_circle: امکان بکاپ گیری از کاربران و ریستور بکاپ<br>
:green_circle: ربات تلگرام <br>
:green_circle: تنظیم پورت ورود برای پنل<br>
:green_circle: فیک آدرس (جلوگیری از فیلترینگ) <br>
:green_circle: محدودیت IP(جلوگیری از ورود کاربران به برخی سایت ها)<br>
:green_circle: اتصال API<br>
:green_circle: [مولتی سرور](https://github.com/port-pro/Xcs-Multi-Management-Port_Pro_Panel) <br>

## Telegram Channel:
https://t.me/J_O_K_E_R_EGY

## حمایت از ما :hearts:
حمایت های شما برای ما دلگرمی بزرگی است<br> 
<p align="left">
<a href="https://www.port-pro.online" target="_blank"><img src="https://raw.githubusercontent.com/port-pro/Port-Pro-Panel/master/pro/donate_light_icons_mono.png" alt="Donate Crypto on Plisio" width="240" height="80" /></a><br>
	
|                    TRX                   |                       ---                         |                    ---                       |
| ---------------------------------------- |:-------------------------------------------------:| -------------------------------------------------:|
| ```TFUJG8283c3GtWU6HTKppQw17JJnPy9K6i``` |  ```---``` | ```---``` |	

</p>	

# نصب


**سیستم عامل مورد نیاز**

Ubuntu 18+ (پیشنهادی :Ubuntu 20)<br>

تغییر نام کاربری، کلمه عبور و پورت همچنین حذف Port_Pro_Panel از روی سرور (نسخه 3.6 به بالاتر)
```
bash /root/Port_Pro_Panel.sh OR bash Port_Pro_Panel.sh  OR Port_Pro_Panel
```
برای نصب کافیست دستور زیر را وارد کنید<br>

**Nginx Web Server**

```
bash <(curl -Ls https://raw.githubusercontent.com/port-pro/Port-Pro-Panel/master/install.sh --ipv4)
```
<br>

**Apache Web Server**

```
bash <(curl -Ls https://raw.githubusercontent.com/port-pro/Port-Pro-Panel/master/apache.sh --ipv4)
```

حل مشکل عدم ارتباط  تماس صوتی و تصویری در اپلیکشن
```
bash <(curl -Ls https://raw.githubusercontent.com/port-pro/Port-Pro-Panel/master/fix-call.sh --ipv4)
```
دستور بالا را در ترمینال وارد کنید سپس برای UDPGW پورت جدید تعریف کنید بهتر است به جای پورت 7300 پورت 7301 یا 7302 را تنظیم کنید
<br>
<br>

## بهینه سازی سرور
نصب و حذف تنظیمات با دستور زیر 
```
bash <(curl -Ls https://raw.githubusercontent.com/port-pro/Port-Pro-Panel/master/TCP-Tweaker --ipv4)
```
## فعال سازی SSL
```
bash <(curl -Ls https://raw.githubusercontent.com/port-pro/Port-Pro-Panel/master/ssl.sh --ipv4)
```
با استفاده از دستور بالا می توانید SSL را روی پنل نصب نمائید. به نکات زیر توجه کنید <br>
1- حتما قبل از نصب SSL پنل را بروز کنید<br>
2- از هیچ دستور دیگری برای فعال سازی SSL استفاده نکنید<br>
3- دامنه یا ساب دامنه را به IP سرور متصل کنید <br>
4- دستور بالا را در ترمینال وارد کنید و مراحل نصب را پیش بروید<br>
SSL بر روی پورتی که روی پنل تعریف کرده اید نصب فعال شد. <br>



## Stargazers over time

[![Stargazers over time](https://starchart.cc/xpanel-cp/XPanel-SSH-User-Management.svg)](https://starchart.cc/xpanel-cp/XPanel-SSH-User-Management)


