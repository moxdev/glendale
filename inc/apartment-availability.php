<?php
/**
 * The Glendale Theme
 *
 * @package The Glendale
 */

/**
 * Dynamically adds apartment availability
 *
 */

function glendale_apartment_availability() {

    if($_GET['plan_id']) { ?>

        <iframe src="http://units.realtydatatrust.com/UnitAvailability.aspx?ils=212&fid=<?php echo $_GET['plan_id']; ?>" width="1200" height="1000"></iframe>

    <?php


    }else { ?>

        <iframe src="http://units.realtydatatrust.com/UnitType.aspx?ils=212&propId=48214" width="1200" height="1000"></iframe>

    <?php

    }
}

// glendale.com/availability/?plan_id=123456
//
//  echo $_GET['plan_id'];
//
//  http://units.realtydatatrust.com/UnitAvailability.aspx?ils=212&fid=95529