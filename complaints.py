import webapp2
import cgi
import datetime
import json
import models

from google.appengine.ext import ndb
from google.appengine.api import users

#get req for a new complaint
class HandleNewComplaint(webapp2.RequestHandler):
  def get(self):    
    #checking if user is logged in or not. If not, request is not served and 
    # instead redirected to login page, then req sent again.
    # Generally this shouldnt be the case since the guy was asked to 
    # sign in when visiting the complaint page.
    # user = users.get_current_user();
    # if not user:
    #   self.redirect(users.create_login_url(self.request.uri))
    # i don't think we need to user_id from the frontend anymore.

    google_id = self.request.get('user_id');  # this is google id
    # checking if user already exists
    q = ndb.gql('SELECT * FROM User WHERE google_id = :1', google_id)
    user = q.get() # returns first result or None
    if user == None: #need to create new user
      name = self.request.get('name')
      email = self.request.get('email')
      newuser = models.User(id=google_id, name=name, email=email, google_id=google_id)
      newuser.put()
      userKey = newuser.key
      print ">>>>> New user created."
    else:
      userKey = user.key
      print ">>>>> Old user."
    title = self.request.get('title')
    lat = float(self.request.get('lat'))
    lon = float(self.request.get('lon'))
    subtitle = self.request.get('subtitle')
    content = self.request.get('content')
    tags = json.loads(self.request.get('tags'))
    img_links = json.loads(self.request.get('img_links'))

    #### Added New
    location = ndb.GeoPt(lat=lat, lon=lon)
    newcomplaint = models.Complaint(user_id=userKey, title=title, location=location, subtitle=subtitle, content=content, tags=tags, img_links=img_links)
    newcomplaint.put()

class HandleUpvote(webapp2.RequestHandler):
  def get(self):    
    #### For upvoting complaints 
    user_id = self.request.get('user_id')
    q = ndb.gql('SELECT * FROM User WHERE google_id = :1', user_id)
    userkey = ndb.get_key()
    if not len(q): #need to create new user
        name = self.request.get('name')
        email = self.request.get('email')
        newuser = models.User(id=user_id, name=name, email=email, google_id=user_id)
        newuser.put()
    #
    # ### Why the statement userkey = newuser
    #
    complaint_id = self.request.get('complaint_id')
    q = ndb.gql('SELECT * FROM Complaint WHERE id = :1', complaint_id)
    if not len(q):
    # # Throw error saying complaint id doesn't exist
        q[0].votes +=1
        q.put()
    #
    q = ndb.gql('SELECT * FROM User WHERE google_id = :1', user_id)
    q[0].voted_set.append(complaint_id)
    q.put()

class HandleReport(webapp2.RequestHandler):
    def get(self):
        #### Reporting abuse a complaint
        user_id = self.request.get('user_id')
        q = ndb.gql('SELECT * FROM User WHERE google_id = :1', user_id)
        userkey = ndb.get_key()
        if not len(q): #need to create new user
            name = self.request.get('name')
            email = self.request.get('email')
            newuser = models.User(id=user_id, name=name, email=email, google_id=user_id)
            newuser.put()
    #### Why the statement userkey = newuser
        complaint_id = self.request.get('complaint_id')
        q = ndb.gql('SELECT * FROM Complaint WHERE id = :1', complaint_id)
        if not len(q):
    #   Throw error saying complaint id doesn't exist
            q[0].abuse_reports +=1
            q.put() 
    #
        q = ndb.gql('SELECT * FROM User WHERE google_id = :1', user_id)
        q[0].abused_set.append(complaint_id)
        q.put()





    #looking if this user exists in our db, if not then add user
    ############debug::
    # self.response.write('hello world<br><br>'+
    #                     'backend user id: ' + user.user_id()+
    #                     '<br>get param user id: ' + user_id+
    #                     'got: '+title+
    #                     'and '+location+
    #                     'and '+subtitle+
    #                     'and '+content                        
    #                     )
    # print 'tags: '
    # for tag in tags:
    #   print tag
    # print 'img_links: '
    # for img_link in img_links:
    #   print img_link
    # self.response.write('backend user id: ' + user.user_id())
    # self.response.write('<br>get param user id: ' + user_id)
    # self.response.write('got: '+title+location+subtitle+content+tags+img_links)