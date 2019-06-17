#How to create custom Drush 9 commands in Drupal 8

This module creates an example Drush 9 command with two options that show site information.
You can use it with --name to show the site name or --perf to show performance configuration.

The module uses the annotations method to configure the command. 
It defines an alias and the two options.

The logic is handled in the Drupal8Drush9Commands class.
Notice the function containing the logic is named 'info' equal to the command we are creating.

Will add more examples in the future.