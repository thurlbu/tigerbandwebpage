<?php
  function getHeader($currentPage) {
    $activeNav = new stdClass();
    $normalNav = array(
      "<a href=\"/\">Home</a>",
      "<a href=\"/this_season/\">This Season</a>",
      "<a href=\"/join/\">Join</a>",
      "<a href=\"/bands/\">Bands</a>",
      "<a href=\"/organizations/\">Organizations</a>",
      "<a href=\"/staff/\">Staff</a>",
      "<a href=\"/sections/\">Sections</a>",
      "<a href=\"/contact/\">Contact</a>");

    $activeNav->home = new stdClass();
    $activeNav->home->value = "<a href=\"/\" class=\"active\">Home</a>";
    $activeNav->home->order = 0;

    $activeNav->this_season = new stdClass();
    $activeNav->this_season->value = "<a href=\"/this_season/\" class=\"active\">This Season</a>";;
    $activeNav->this_season->order = 1;

    $activeNav->join = new stdClass();
    $activeNav->join->value = "<a href=\"/join/\" class=\"active\">Join</a>";
    $activeNav->join->order = 2;

    $activeNav->bands = new stdClass();
    $activeNav->bands->value = "<a href=\"/bands/\" class=\"active\">Bands</a>";
    $activeNav->bands->order = 3;

    $activeNav->organizations = new stdClass();
    $activeNav->organizations->value = "<a href=\"/organizations/\" class=\"active\">Organizations</a>";
    $activeNav->organizations->order = 4;

    $activeNav->staff = new stdClass();
    $activeNav->staff->value = "<a href=\"/staff/\" class=\"active\">Staff</a>";
    $activeNav->staff->order = 5;

    $activeNav->sections = new stdClass();
    $activeNav->sections->value = "<a href=\"/sections/\" class=\"active\">Sections</a>";
    $activeNav->sections->order = 6;

    $activeNav->contact = new stdClass();
    $activeNav->contact->value = "<a href=\"/contact/\" class=\"active\">Contact</a>";
    $activeNav->contact->order = 7;

    $activeIndex = $activeNav->{$currentPage}->order;
    $normalNav[$activeIndex] = $activeNav->{$currentPage}->value;

    return "<nav>" . implode($normalNav) . "</nav>";
  }
?>
