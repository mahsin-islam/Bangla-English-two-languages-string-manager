<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package     local_bnenduallang
 * @copyright   2020 MD MAHSIN UL ISLAM - based on local_stringman by David Mudrak <david@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_bnenduallang;

defined('MOODLE_INTERNAL') || die();

/**
 * Override the get_string() function to display two language strings, in this instance UK English and Bangla.
 *
 * Based on local_stringman by David Mudrak <david@moodle.com> 
 * @copyright 2020 David Mudrak <david@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class bnenduallang_string_manager extends \core_string_manager_standard {

    /**
     * Implementation of the get_string() method to display both simplified Bangla and UK English simultaneously.
     *
     * @param string $identifier the identifier of the string to search for
     * @param string $component the component the string is provided by
     * @param string|object|array $a optional data placeholder
     * @param string $lang moodle translation language, null means use current
     * @return string
     */
    public function get_string($identifier, $component = '', $a = null, $lang = null) {
        
        $string = parent::get_string($identifier, $component, $a, 'en');
        
        $bn = parent::get_string($identifier, $component, $a, 'bn');
         
        if(strlen($bn) > 0) {
            $string .= ' | ' . $bn;
        }
        
        return $string;
    }
}
