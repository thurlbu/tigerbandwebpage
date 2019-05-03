<?php
  function getHeader($currentPage) {
    $activeNav = new stdClass();
    $normalNav = array(
      "<a href=\"/drumline/\">Home</a>",
      "<a href=\"/drumline/about/\">About</a>",
      "<a href=\"/drumline/video_auditions/\">Video Auditions</a>",
      "<a href=\"/drumline/callback_auditions/\">Callback Auditions</a>",
      "<a href=\"/drumline/music/\">Music</a>",
      "<a href=\"/drumline/contact/\">Contact</a>");

    $activeNav->home = new stdClass();
    $activeNav->home->value = "<a href=\"/drumline/\" class=\"active\">Home</a>";
    $activeNav->home->order = 0;

    $activeNav->about = new stdClass();
    $activeNav->about->value = "<a href=\"/drumline/about/\" class=\"active\">About</a>";;
    $activeNav->about->order = 1;

    $activeNav->video_auditions = new stdClass();
    $activeNav->video_auditions->value = "<a href=\"/drumline/video_auditions/\" class=\"active\">Video Auditions</a>";
    $activeNav->video_auditions->order = 2;

    $activeNav->callback_auditions = new stdClass();
    $activeNav->callback_auditions->value = "<a href=\"/drumline/callback_auditions/\" class=\"active\">Callback Auditions</a>";
    $activeNav->callback_auditions->order = 3;

    $activeNav->music = new stdClass();
    $activeNav->music->value = "<a href=\"/drumline/music/\" class=\"active\">Music</a>";
    $activeNav->music->order = 4;

    $activeNav->contact = new stdClass();
    $activeNav->contact->value = "<a href=\"/drumline/contact/\" class=\"active\">Contact</a>";
    $activeNav->contact->order = 5;

    $activeIndex = $activeNav->{$currentPage}->order;
    $normalNav[$activeIndex] = $activeNav->{$currentPage}->value;

    return "<nav>" . implode($normalNav) . "</nav>";
  }
?>
