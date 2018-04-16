****** Alpha Faucet Script ******


Written by - alamin


For help, go to: https://bitcointalk.org/index.php?topic=1871667.0


****** Alpha Faucet Script ******
*** Alpha Faucet Script ***

Features:

    Caching instead of database.
    No database needed to run. [I hate MySQL]
    Easy to move your faucet, just download all files and upload.
    Dual microwallet support.
    Advanced Proxy and VPN blocker.
    Anti-adblocker.
    Quick blocking if captcha is incorrect for 3 times.
    [Will be available in next update]
    Instead of one IP per addy, Locking IP and addy after every successful claim.
    Errorless PHP script, easily customizable.
    Countdown Timer added.
    Preloader added.
    Integrated with ProLink API.
    Sending user's IP to microwallet, this will help you to prevent frauds.
    Captcha type: ReCaptcha [Custom design, black theme].

[I am not very good at designing. A good design can make this script awesome.]
Installing this script:
Installation is pretty easy.
=> Upload all files to your server.
=> Open libs/config.php file and write your own values.
=> Open root index.php and add your banners and customize.
  If you don't know basic html, follow my guides to add banners.
  Find <body> by searching on text editor. Then find those texts that indicate banners; i.e. 728x90 banner, 160x600 banner etc. Just replace these texts with your banner code.
That's it, your faucet is ready to go...!!!
Advantages:

    No SQL Injection: No SQL Injection is possible because we are not using MySQL Database. "No MySQL, No Injection."
    Speed: According to the algorithm of this script, your faucet will work faster than any other faucet of different script.
    Less Resources: It needs 10 bytes data to save claiming details of each IP and addy. That means, it needs only 1 MB data to save claiming details of 1,04,857 different IPs and addresses. 34 bytes for saving referral address, that means 30,840 referral data can be saved in only 1 MB. Cool, isn't it? Also, we don't need to use any database. This script can be run on maximum free hosting.
    2x Visitor: As it has dual microwallet support, you can promote your site on both microwallet's faucet promoting page. So, you will get visitors from both side!
    Easily Moving: Want to move your faucet to another folder / domain / server? Well, that's very easy. Zip all files, download. Then upload this zip to new place and unzip. That's it.
    No hidden fee: I really hate something like this, 1~5 satoshi fee per claim etc and so on... There is no hidden fee or hidden anything else.
    Open Source: This script is 100% open source. You can customize, edit, contribute to this script.

This script is completely free. But please don't remove the script and design courtesy.
