# Event-portal-website

IIT Ropar Event Portal


Brief Discription:

In this Project we have created a dynamic website for viewing and adding different types of events organised in the institute.
Our main aim was to create something which is simple and accessible so we have only 2 pages,main page and a form page.
The main page lists different events with their details and the form page is provided to add a new event.
There are six categories of events Seminar,Club Events,Competition,Cultural and Others.The user can select any one of these and see events of that category. 
The User can also Search for an event by its Name,Description or by publisher of that event.
Once a user has logged in using '@iitrpr.ac.in' account,he can add a new event,he can see the events added by him and can also delete them if required.
To complement the website we have created an Android app for the same.The app shows the events in Horizontally swipeable tabs with each tab representing a category.There is also a feature provided to set a remainder in the Calendar for a particular event.Once the app is used in a device, the user will recieve a notification whenever an new event is added using the Event Portal. 

System Requirement:

For the website:
1. Apache Server 2.2 or above
2. MySql 5.5
3. PHP 5 or above
4. php-curl module enabled
	If WAMP is used then uncomment extension php_curl.dll in 	wamp_folder/bin/apache/Apache-version/php.ini	(Configuraton Setting)
	If LAMP is used then in Ubuntu install php-curl module using command : apt-get install php-curl
5. Internet connection is required for Google Login.


For the android app:
1. Minimum SDK version : Android 2.2 (API Level 8)
2. Target SDK version : Android 4.4 (API Level 19)
3. For the notification feature of the app make sure you have push notification enabled in your android settings


HOW TO OBTAIN AND SETUP:

1. The source code of the website and app will be available on the SVN. The website will be uploaded on Satluj-IIT Ropar's Intranet, it can be accessed from there.
2. The Android App apk will be made available on our website, it can be downloaded and installed.
3. We will try to make it available on Google Play Store as well.


The website file structure need to be hosted as it is, on the server. 
The Google oAuth2 login redirects to a public ip/address. So host the website on a public ip address, just like www.iitrpr.ac.in/moodle
Lets say this public address is "Host_Address" 

For Google login a 'clientID' and 'clientsecret' and 'redirectURI' is used in the code, 'redirectURI' will be 'Host_Address'+'/index.php'.

Either you can contact us to change the 'redirectURI' after you have got the 'Host_Address'. 'clientID' and 'clientsecret' are not dependent on the 'Host_Address', so they don't need to be changed in this case.

Or you can yourself login to the Google Developer Console, create a project, and generate 'clientID', 'clientsecret' for OAuth2 login. And also set the 'redirectURI' as mentioned above.

NOW WE HAVE GOT OUR 'clientID', 'clientsecret' and 'redirectURI', these need to be updated in the source code at the following places:

1. 'clientID' in index.php at line 54.
2. 'clientsecret' in index.php at line 55.
3. 'redirectURI' in index.php at line 56.
4. In the android source files, IIT Ropar Event App\src\com\learn2crack\tab  folder,  edit TabPagerAdapter.java at line 33 :  change url='Host_Address'+'/Events_Final/jsongetdata.php' 
5. Import event.sql file to create table in the database, its available in the website folder. In the source code, table name is used as 'event' by default, you don't need to change that.
6.  You will just need to update MySQL username, password, address at the following locations in the website directory : Events_Final/load.php (line 2) , Events_Final/form/addevent.php (line 18) , Events_Final/form/delevent.php (line 2)

Once the address in android file is changed, it has to be converted into .apk file. The .apk file can be copied to any android device for installation.

How to run:

Open 'Host_Address' in browser to visit the site.
Run Android App by just clicking the app icon.

Contact us:
vipina@iitrpr.ac.in
adityaa@iitrpr.ac.in
gauravku@iitrpr.ac.in
thipparthyjc@iitrpr.ac.in
