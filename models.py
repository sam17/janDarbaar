import cgi
import datetime
import webapp2

from google.appengine.ext import ndb
from google.appengine.api import users


class Tag(ndb.Model):
  name = ndb.StringProperty(required=True);

class User(ndb.Model):
  email = ndb.StringProperty(required=True);
  name = ndb.StringProperty(required=True);
  pic = ndb.StringProperty();
  google_id = ndb.StringProperty(required=True); #this is the user id sent by frontend
  mycomplaint_set = ndb.KeyProperty(repeated=True,kind='Complaint');
  follow_set = ndb.KeyProperty(repeated=True,kind='Complaint'); # complaints that the user is following.
  pref_location = ndb.GeoPtProperty();
  voted_set = ndb.KeyProperty(repeated=True,kind='Complaint'); # complaints he has voted on.
  abused_set = ndb.KeyProperty(repeated=True,kind='Complaint'); # complaints he has voted on.
  rating = ndb.IntegerProperty(default=1); # users rating. who handles updating ratings?
  occupation = ndb.StringProperty();
  dob = ndb.DateProperty();

class Complaint(ndb.Model):
  user_id = ndb.KeyProperty(kind='User',required=True); # currently just stores user_id given by frontend, no verification..
  title = ndb.StringProperty(required=True);
  location = ndb.GeoPtProperty();
  subtitle = ndb.TextProperty(); # desciptive title
  date = ndb.DateProperty(auto_now_add=True);
  votes = ndb.IntegerProperty(default=0);
  content = ndb.TextProperty();
  tags = ndb.StringProperty(repeated=True); # the tags eg, Civil, Roadworks, etc. They are strings, user is allowed to add their own
  smallAdd = ndb.StringProperty();
  bigAdd = ndb.StringProperty();
  fb_share = ndb.IntegerProperty(default=0);
  gp_share = ndb.IntegerProperty(default=0);
  tw_share = ndb.IntegerProperty(default=0);
  img_links = ndb.StringProperty(repeated=True);
  status_owner = ndb.StringProperty(default="No Action", choices=set(["No Action", "Ongoing", "Solved"])); # whether the problem is solved or not. 
  status_other = ndb.StringProperty(default="No Action", choices=set(["No Action", "Ongoing", "Solved"])); # status as defined by some non-OP.
  abuse_reports = ndb.IntegerProperty(default=0);

