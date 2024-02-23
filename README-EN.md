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

## Contents
- [Introduction](#x-panel-introduction)<br>
- [Protocol](#protocol)<br>
- [Features](#features)<br>
- [Installation guide](#installation-guide) <br>
  - [Server optimization](#server-optimization)<br>
  - [Enabling SSL](#enabling-ssl)<br>
- [Supporting us](#supporting-us-hearts)
<br> 

## X-PANEL Introduction
Port_Pro_Panel is a lightweight web application for SSH accounts management. With the help of Port_Pro_Panel, you can manage users and apply restrictions.	

## Protocol
Port_Pro_Panel supports protocols based on SSH connections.<br>
**SSH-DIRECT | SSH-TLS | SSH-DROPBEAR | SSH-DROPBEAR-TLS | SSH-WEBSOCKET | SSH-WEBSOCKET-TLS** <br><br>

Ports 443, 80, and 8880 are reserved by default for the web server. <br>
Websocket HTTP Payload<br>
`GET /ws HTTP/1.1[crlf]Host: sni.domain.com[crlf]Upgrade: websocket[crlf][crlf]` <br>
Websocket SSL Payload<br>
`GET wss://sni.domain.com/ws HTTP/1.1[crlf]Host: sni.domain.com[crlf]Upgrade: websocket[crlf][crlf]` <br>

### Features and Capabilities
:green_circle: Ability to create multiple users (unlimited)<br>
:green_circle: Restrictions on users’ traffic consumption and expiration date<br>
:green_circle: Ability to calculate the expiration date after the first connection<br>
:green_circle: Ability to set limitation for user account’s concurrent sessions<br>
:green_circle: View online users<br>
:green_circle: Ability to backup and restore users<br>
:green_circle: Telegram Bot support<br>
:green_circle: Setting optional port number for control panel access<br>
:green_circle: Fake address (Evade Censorship)<br>
:green_circle: IP blacklist (Blacklisting adult websites and …)<br>
:green_circle: API support<br>
:green_circle: [Multi-server support](https://github.com/port-pro/Xcs-Multi-Management-Port_Pro_Panel/blob/master/EN-README.md)<br>


### Installation guide
Supported operating systems<br>
- **Ubuntu 18+ (recommended: Ubuntu 20)** <br>

Changing username, password and port as well as removing Port_Pro_Panel from the server (version 3.6 and higher)<br>
```
bash /root/Port_Pro_Panel.sh OR bash Port_Pro_Panel.sh OR Port_Pro_Panel
```

To install the Port_Pro_Panel simply input the following command in the terminal:<br>

**Nginx Web Server**

```
bash <(curl -Ls https://raw.githubusercontent.com/port-pro/Port-Pro-Panel/master/install.sh --ipv4)
```
<br>

**Apache Web Server**

```
bash <(curl -Ls https://raw.githubusercontent.com/port-pro/Port-Pro-Panel/master/apache.sh --ipv4)
```

To resolve audio and video call issues use this command:<br>
```
bash <(curl -Ls https://raw.githubusercontent.com/port-pro/Port-Pro-Panel/master/fix-call.sh --ipv4)
```

### Server optimization
Use the following command to install or remove<br>
```
bash <(curl -Ls https://raw.githubusercontent.com/port-pro/Port-Pro-Panel/master/TCP-Tweaker --ipv4)
```


### Enabling SSL
```
bash <(curl -Ls https://raw.githubusercontent.com/port-pro/Port-Pro-Panel/master/ssl.sh --ipv4)
```
With the above command you can install SSL on the panel **(First pay attention to tips below)** <br>
1- Make sure to update the panel BEFORE installing the SSL<br>
2- Do not use any other commands to activate SSL<br>
3- Set the server’s IP in your domain or subdomain<br>
4- Input the above command in the terminal and proceed with the installation<br>
**SSL is now active on your selected port**



### Supporting us :hearts:
If Port_Pro_Panel has been useful to you with supporting us you can help developing this web application.<br>

<p align="left">
<a href="https://www.port-pro.online" target="_blank"><img src="https://raw.githubusercontent.com/port-pro/Port-Pro-Panel/master/pro/donate_light_icons_mono.png" alt="Donate Crypto on Plisio" width="240" height="80" /></a><br>
	
|                    TRX                   |                       ---                         |                    ---                       |
| ---------------------------------------- |:-------------------------------------------------:| -------------------------------------------------:|
| ```TFUJG8283c3GtWU6HTKppQw17JJnPy9K6i``` |  ```----``` | ```---``` |	

</p>
	


## Stargazers over time

[![Stargazers over time](https://starchart.cc/xpanel-cp/XPanel-SSH-User-Management.svg)](https://starchart.cc/xpanel-cp/XPanel-SSH-User-Management)

