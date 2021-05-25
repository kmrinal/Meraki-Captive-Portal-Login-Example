Cisco [Meraki's](https://meraki.cisco.com/) Captive portal login example.

This PHP example handles WiFi login flow as Meraki likes it. 

To make it work, 

1. publish this code to a server (Apache2 or Nginx)
2. update Meraki settings and enable Click-Through splash page authentication for your ESSID
    Dashboard --> Configure --> Splash Page: Click-through
3. setup 'Splash Page' url so that Meraki WiFi router redirects users to Captive Portal Pages. 
    Dashboard --> Configure --> Splash Page --> Custom URL (URL from step 1)
4. update Walled garden to allow unauthorzed access to your severs domain.
    Dashboard --> Configure --> Access Control --> SSID:yourSSID --> Walled Garden (add your server domain from step 1 here)