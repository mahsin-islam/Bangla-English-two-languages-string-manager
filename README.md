# Custom string manager for Moodle

This plugin will override core_string_manager_standard to display two strings, English and Bangla, side by side. 

## Installation

1. First install language pack from
https://download.moodle.org/langpack/3.8 bn.zip for Bangla Language

2. Install bn.zip file after unzip at moodledata lang folder

3. Install this plugin

        $ cd /path/to/your/moodle/dirroot
        $ cd local 
        $ git clone git@github.com:mahsin-islam/Moodle-Bangla-English-two-languages-string-manager.git bnenduallang

4. Edit your main `config.php` and add the following line there. Of course, you have to add this line before the `setup.php` is
   included at the end of the file.

        $CFG->customstringmanager = '\local_bnenduallang\bnenduallang_string_manager';

## More documentation

Contact with me mahsin.islam@gmail.com
