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
// GNU General Public License for details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Theme mimoodle version file.
 *
 * @package    theme_evolved
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$plugin->version   = 2014092300;
$plugin->maturity = MATURITY_STABLE;              // this version's maturity level.
$plugin->release = '1.0.1 Tin Lizzy (Build: 20140923)';
$plugin->requires  = 2014050800;
$plugin->component = 'theme_evolved';
$plugin->dependencies = array(
    'theme_bootstrapbase'  => 2014050800,
    'theme_clean'  => 2014050800,
);
