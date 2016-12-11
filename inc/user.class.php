<?php

/*
* @version $Id: HEADER 15930 2016-08-29 10:47:55Z jmd $
-------------------------------------------------------------------------
GLPI - Gestionnaire Libre de Parc Informatique
Copyright (C) 2003-2016 by the INDEPNET Development Team.

http://indepnet.net/   http://glpi-project.org
-------------------------------------------------------------------------

LICENSE

This file is part of GLPI.

GLPI is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

GLPI is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with GLPI. If not, see <http://www.gnu.org/licenses/>.
--------------------------------------------------------------------------
 */

class PluginTelegrambotUser extends CommonDBTM {

   static function insertUser($user_id, $first_name, $last_name, $username) {
      global $DB;

      $table   = self::getTable();
      $exists  = countElementsInTable(self::getTable(), ['id' => $user_id]);

      if(!$exists) {
         $query = "INSERT INTO `$table` (`id`, `first_name`, `last_name`, `username`)
                  VALUES('$user_id', '$first_name', '$last_name', '$username')";

         $DB->query($query);
      }
   }
}

?>