import webapp2
import os
import models

import jinja2
import complaints

from google.appengine.api import users

JINJA_ENVIRONMENT = jinja2.Environment(
    loader=jinja2.FileSystemLoader(os.path.dirname(__file__)),
    extensions=['jinja2.ext.autoescape'],
    autoescape=True)


class MainHandler(webapp2.RequestHandler):
  def get(self):

    template_values = {
      
    }
    template = JINJA_ENVIRONMENT.get_template('main.php')
    self.response.write(template.render(template_values))

class BrowsePageHandler(webapp2.RequestHandler):
  def get(self):

    template_values = {
      
    }
    template = JINJA_ENVIRONMENT.get_template('browse.php')
    self.response.write(template.render(template_values))

class ComplaintPageHandler(webapp2.RequestHandler):
  def get(self):
    #checking if user is logged in or not
    ###### not doing this rightnow
    # user = users.get_current_user();
    # if not user:
    #     self.redirect(users.create_login_url(self.request.uri))
    # adding template values:
    # i should be doing db query to fetch all tags too..
    template_values = {
      # 'user_nickname': user.nickname()    ,
      # 'user_email': user.email(),
    }
    template = JINJA_ENVIRONMENT.get_template('complaint.php')
    # self.response.write('user = '+user.nickname() if user else 'no user.')
    self.response.write(template.render(template_values))

class DetailsPageHandler(webapp2.RequestHandler):
  def get(self):
    template_values = {

    }
    template = JINJA_ENVIRONMENT.get_template('detail.php')
    self.response.write(template.render(template_values))

class HowItWorksPageHandler(webapp2.RequestHandler):
  def get(self):
    template_values = {

    }
    template = JINJA_ENVIRONMENT.get_template('howItWorks.php')
    self.response.write(template.render(template_values)) 
    
def RoutesArr(): 
    routesArr = [
        ('/', MainHandler),
        ('/browse', BrowsePageHandler),
        ('/complaint',ComplaintPageHandler),
        ('/details/[0-9]+',DetailsPageHandler),
        ('/howItWorks',HowItWorksPageHandler)
    ]
    # need to add stuff to routesArr.
    routesArr.append(('/post_complaint', complaints.HandleNewComplaint))
    routesArr.append(('/upvote', complaints.HandleUpvote))
    
    return routesArr

