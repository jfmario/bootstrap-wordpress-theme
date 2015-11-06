
# Bootstrap Wordpress Theme

by: John F. Marion

version: 0.0

## About

This **Bootstrap Wordpress Theme** is a very bare-bones Wordpress Theme
that you can use. It makes use of the Bootstrap CSS themes available from
[Bootswatch.com](http://bootswatch.com). I threw it together quickly for 
something I wanted to do, and it is still work in progress. It works, though.

The header is a navbar at the top that includes the name of the blog. The
sidebar is the right. The sidebar has the search and archive widgets
*hardcoded* in, so you should either remove those widgets from within
Wordpress or delete my hardcoded ones ( More under "Customizing" ). By 
default, all your widgets will be placed inside Bootstrap panel-primary
divs. For the
main content, if it is multiple posts they will have h3 tags for the title,
if it is a page
or single post it will have an h1 tag. The footer contains some
acknowledgements.

## Customizing

At the moment, I haven't made any theme options availabe through the
Wordpress GUI, but there a few easy customizations. I tried to put
somewhat helpful comments in the code where you might do some tweaks.

### Choose Your Own Bootstrap

If you would prefer a different Bootstrap theme from whichever I happen to 
have as the default, go to **header.php** and change the CSS link near the 
top to the one you want. If you want to look at different options,
go to [BootstrapCDN](https://www.bootstrapcdn.com/bootswatch/) and look
at the them. Choose any url and it should work fine.

### Fix My Sidebar

I commented in **sidebar.php** about how you could delete stuff from the file.
I chose to hardcode some things in, and as I use this for websites I will
probably hardcode the entire sidebar. The reason for this is that is 
difficult/impossible to get into the styling of any possible widgets you
might have and make them look right. I wanted more variance that having
everything in a panel-primary. 

To get only your widgets, clean up **sidebar.php** to including only the 
opening and closing div lines and the two php lines in the middle. If you
want to add your own hardcoded widgets, you can use mine as a template.


### Delete the Footer

I have included standard acknowledgements to WordPress, Twitter, and myself
in the default footer. If you delete **footer.php**, WordPress will insert
an acknowledgement to itself at the bottom. If you want to have no
acknowledgements in your WordPress, I have including comments in **footer.php**
indicating 
the part of the footer that can safely be eliminated.

### Add Tailored Pages

There are many pages
that go into a complete WordPress theme, so if you want more tailored pages
copy the contents of **basic.php** as a starting point. See 
[WordPress Template Hierarchies](https://developer.wordpress.org/themes/basics/template-hierarchy/)
for more on how this works.

## Files Included

* ***404.php***: This is the code for how your site will look if a user tried to 
get to a page that does not exist.
* ***basic.php***: This is not actually used in the theme. It is a good template
if you want to write your own tailored pages for the theme.
* ***comments.php***: The template for the comment interface.
* ***footer.php***: The bottom of all the pages.
* ***function.php***: Registration of the main menu.
* ***header.php***: The top of all the pages.
* ***index.php***: The default template and the template for multi-post pages.
* ***README.md***: The file that you are currently reading.
* ***searchform.php***: Customized code for the search widget and 404.php pages.
* ***sidebar.php***: The side of all the pages.
* ***singular.php***: The template for single-entry pages.
* ***style.css***: I have added no styling to Bootstrap at the moment. This file 
contains metadata about the theme.