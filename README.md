# Bangla-English-two-languages-string-manager
Bangla English two languages string manager
# Custom string manager for Moodle

This plugin will override core_string_manager_standard to display two strings, English and Bangla, side by side. 

## Installation

1. Install this plugin

        $ cd /path/to/your/moodle/dirroot
        $ cd local
        $ git clone git@github.com:iandavidwild/moodle-local_duallang.git duallang

2. Edit your main `config.php` and add the following line there. Of course, you have to add this line before the `setup.php` is
   included at the end of the file.

        $CFG->customstringmanager = '\local_stringman\bnenduallang_string_manager';

## More documentation

Coontact with me mahsin.islam@gmail.com
