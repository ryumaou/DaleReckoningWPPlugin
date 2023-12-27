Dale Reckoning for WordPress

The plugin is pretty simple and straight-forward to use, actually.
Just copy it to your plugin directory, go to the Plugin Management page, turn the plugin on and add the tags to your templates.
To use the Forgotten Realms/Dale Reckoning date in your post add < ?php frdate($post->ID,'','') ?>. Obviously, you can change out the formatting codes with anything you want, or simply leave blank spaces in the quotes to have no additional formatting added, like so < ?php frdate($post->ID,'','') ?>. I’d guess that you would want to change the code that is currently < ?php the_date() ?>, but that’s up to you.
To use the Forgotten Realms calendar instead of the “regular” one, simply substituite < ?php get_frcalendar(); ?> for < ?php get_calendar(); ?>. To have the archives show up in a Dale Reckoning format, use this code: < ?php fr_get_archives('type=monthly'); ?> instead of < ?php wp_get_archives('type=monthly'); ?>.

And, really, that’s all there is to it.

The plugin was tested with both WordPress 1.5 and 2.x and should work with both, but I make no promises. And, the calendar doesn’t do the three ten-day “weeks” that they use in the Forgotten Realms, but it’s a fairly good compromise, I think. 

If you don’t know about the Forgotten Realms, you can check it out at the Wizards of the Coast website, where they now have a Forgotten Realms Calendar Tool.
I chose to synchronize my Forgotten Realms year with the year that the Forgotten Realms Campaign Setting was published. In spite of what it says on the Dalereckoning article on the Wikipedia, but based on that officially published supplement, the campaign year of 1372 DR should correspond with 2001 AD. You can edit the file, however, to adjust that to your own particular campaign. Just do a search and replace on 629 with your own, adjusted, modifier. No, I won’t help you do it. Again, this is free, and at that price, you can figure out the math yourself to correct for the current year in your campaign.
Please note: This plugin seems to be working fine with WordPress version 2.5, but I haven’t done rigorous testing, so use at your own risk!
