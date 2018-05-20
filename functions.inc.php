<?php

function generateLink($url, $label, $class) {
   $link = '<a href="' . $url . '" class="' . $class . '">';
   $link .= $label;
   $link .= '</a>';
   return $link;
}


function outputPostRow($number)  {
    include("travel-data.inc.php");
    $postId = ${'postId'.$number};
    $userId = ${'userId'.$number};
    $userName = ${'userName'.$number};
    $date = ${'date'.$number};
    $thumb = ${'thumb'.$number};
    $title = ${'title'.$number};
    $excerpt = ${'excerpt'.$number};
    $reviewsNum = ${'reviewsNum'.$number};
    $reviewsRating = ${'reviewsRating'.$number};
    $link = generateLink("post.php?id=$postId", "Read more", "btn btn-primary btn-sm");
    $star = constructRating($reviewsRating);
    echo "<div class=\"row\">
    <div class=\"col-md-4\">";
    echo generateLink("post.php?id=$postId", "<img src=\"images/$thumb\" alt = \"$title\" class=\"img-responsive\"/>", "");
    echo "</div>
    <div class=\"col-md-8\">
      <h2>$title</h2>
      <div class=\"details\"> Posted by ";
    echo generateLink("user.php?id=$userId", "$userName", "");
    echo "
      <span class=\"pull-right\" >$date</span>
      <p class=\"ratings\">";
    echo constructRating($reviewsRating);
    echo " $reviewsNum Reviews </p>
      </div>
      <p class=\"excerpt\">$excerpt</p>
      <p>$link</p>
    </div>
  </div>
  <hr/>";
}

/*
  Function constructs a string containing the <img> tags necessary to display
  star images that reflect a rating out of 5
*/
function constructRating($rating) {
    $imgTags = "";
    
    // first output the gold stars
    for ($i=0; $i < $rating; $i++) {
        $imgTags .= '<img src="images/star-gold.svg" width="16" />';
    }
    
    // then fill remainder with white stars
    for ($i=$rating; $i < 5; $i++) {
        $imgTags .= '<img src="images/star-white.svg" width="16" />';
    }    
    
    return $imgTags;    
}

?>