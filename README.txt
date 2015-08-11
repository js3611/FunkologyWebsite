This repo contains the source code for the funkology website.

Probably it is not the best idea to keep this on GitHub because
everyone can see. Just be careful, don't add any username/password to
this repo!

----------------------------------------------------------------------

NOTE:

1. The website is written in AngularJS. If you want to learn it, visit https://angularjs.org/ 

2. The code/website is kept as simple as possible because some of you
have no coding experiences and we cannot force you to learn it!

3. As a publicity officer, you are entitled to do whatever you want
with the website but make sure you code neatly for the future
publicity officers!

4. Every year the info needs to be updated. I will list them here so
you won't forget to edit them. First go to dev/app/data/:

i) committee/committee.json 
- Update all the committee members.  
- To make it look authentic, you should use the identical dimensions
  for the images, unless the javascript code enforces it, which I
  can't remember!

ii) crew/crew.json
- Update crew members when new members.

iii) events/events.json
- update the event told by your president. The first event probably
  always is fresher's fair and so on. Make sure you do this 1 month
  before the term starts because people will start to look at these!
- make sure you put all the entries in events.json to past_events.json!

iv) Links
- Check up on all the links and make sure they work! Union usually
  randomly changes the url for different info so the links are usually
  broken every year.... tedious isn't it!

v) Class Calendar (dev/app/partial/classes.html)

- The calendar here should be synced to a google calendar your
  president is using, and the source can be specified. If you go to
  google calendar, choose "share calendar" and go to "Embed This
  Calendar" and copy whatever is in the src="http://...." (the html element starting with
  <iframe….>). ONLY REPLACE THE URL. 

- If you want to include more than one calendar, click "Edit colour,
  size and others" which is on top of the textBox which you previously
  copied from, and you can customise ur calendar however you like.



