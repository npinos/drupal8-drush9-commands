<?php
/**
 * Created by PhpStorm.
 * User: npinosperfetti
 * Date: 2019-06-15
 * Time: 21:21
 */

namespace Drupal\drupal8_drush9_commands\Commands;

use Drush\Commands\DrushCommands;

/**
 * A Drush commandfile.
 *
 * In addition to this file, you need a drush.services.yml
 * in root of your module, and a composer.json file that provides the name
 * of the services file to use.
 */
class Drupal8Drush9Commands extends DrushCommands {
    /**
     * Prints site name and cache configuration.
     *
     * @command drupal8_drush9_commands:info
     * @aliases info
     * @options name Display site name.
     * @options perf Display performance configuration.
     * @usage drupal8_drush9_commands:info --name
     *   Display 'Site name: Your site name'. info --perf Display 'Cache: enabled'
     */
    public function info($options = ['name' => FALSE, 'perf' => FALSE]) {
        if ($options['name']) {
            $site_name = \Drupal::config('system.site')->get('name');
            $this->output()->writeln('Site name: ' . $site_name);
        }
        elseif ($options['perf']){
            $cache_enabled = \Drupal::config('system.performance')->get('cache.page');
            $cache_enabled ? $this->output()->writeln('Cache is enabled with max age: ' . $cache_enabled['max_age']/60 . ' minutes') :
                $this->output()->writeln('Cache is disabled');
        }
        else {
            $this->output()->writeln('Please select an option --name or --perf');
        }
    }

}