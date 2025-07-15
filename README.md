# BugsBunny: Magento 2 Go To Top Button Module
This Magento 2 extension adds a floating **"Go to Top"** button to the frontend of your store. 
When customers scroll down, the button appears — allowing them to quickly scroll back to the 
top with a smooth animation. It's fully configurable from the admin panel and supports 
custom images.

# Features
Adds a floating **Go To Top** button on all frontend pages.
Enable/Disable** the button from Magento admin.
Upload your own image** for the button.
Set scroll offset** in pixels to control when the button appears.
Fully responsive and works across all themes. 
Uses Magento's native configuration system and frontend architecture.

## Configuration
Stores > Configuration > BugsBunny > Go To Top Button.

# You will find the following options:

- **Active** – Yes/No to enable or disable the button.
- **Image** – Upload a custom image for the scroll button.
- **Offset** – Number of pixels to scroll before the button appears (e.g., 100).

# Uploaded images are saved in: 
 - pub/media/gototopbutton/

# ScreenShots
![button.png](Screenshots/button.png)

# Installation
You can download code from this repo under Magento® 2 following directory:

app/code/BugsBunny/GoToTopButton
Enter following commands to enable the module:

php bin/magento module:enable BugsBunny_GoToTopButton
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f
php bin/magento cache:clean
php bin/magento cache:flush
