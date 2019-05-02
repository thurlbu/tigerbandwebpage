<?php
  function getHeader($currentPage) {
    $activeNav = new stdClass();
    $normalNav = array(
      "<a href=\"/drumline/\">Home</a>",
      "<a href=\"/drumline/about/\">About</a>",
      "<a href=\"/drumline/auditions/\">Auditions</a>",
      "<a href=\"/drumline/music/\">Music</a>",
      "<a href=\"/drumline/contact/\">Contact</a>");

    $activeNav->home = new stdClass();
    $activeNav->home->value = "<a href=\"/drumline/\" class=\"active\">Home</a>";
    $activeNav->home->order = 0;

    $activeNav->about = new stdClass();
    $activeNav->about->value = "<a href=\"/drumline/about/\" class=\"active\">About</a>";;
    $activeNav->about->order = 1;

    $activeNav->auditions = new stdClass();
    $activeNav->auditions->value = "<a href=\"/drumline/auditions/\" class=\"active\">Auditions</a>";
    $activeNav->auditions->order = 2;

    $activeNav->music = new stdClass();
    $activeNav->music->value = "<a href=\"/drumline/music/\" class=\"active\">Music</a>";
    $activeNav->music->order = 3;

    $activeNav->contact = new stdClass();
    $activeNav->contact->value = "<a href=\"/drumline/contact/\" class=\"active\">Contact</a>";
    $activeNav->contact->order = 4;

    $activeIndex = $activeNav->{$currentPage}->order;
    $normalNav[$activeIndex] = $activeNav->{$currentPage}->value;

    return "<nav>" . implode($normalNav) . "</nav>";
  }
?>
