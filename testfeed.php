<?php
$url = 'http://duckevents.uoregon.edu/widget/view?schools=oregon&days=7&num=10&types=14720%2C14723%2C14829%2C16401%2C14467%2C14830%2C14468%2C14808%2C15962%2C14827%2C14821%2C15929%2C14472%2C14519%2C14518%2C14820%2C14823%2C14397%2C15085%2C14824%2C15001%2C16497%2C15984%2C16110%2C15983%2C15982%2C14428%2C17347%2C16007%2C15663%2C16398%2C16403%2C14493%2C17118%2C17120%2C17119%2C17122%2C17121%2C14512%2C14388%2C15887%2C14832%2C15629%2C14395%2C14510&format=rss';

$rss = simplexml_load_file($url);

if($rss) {

  echo '<h1>' . $rss->channel->title . '</h1>';
  // echo '<li>' . $rss->channel->pubDate . '</li>';
  
  $items = $rss->channel->item;
  foreach($items as $item)  {
    $title = $item->title;
    $link = $item->link;
    $published_on = strftime('%b, %e %l:%M %p', strtotime($item->pubDate));
    $description = $item->description;

    echo '<h3><a href="'.$link.'">'.$title.'</a></h3>';
    echo '<span>('.$published_on.')</span>';
    echo '<p>'.$description.'</p>';
  }
}
?>

<script type="text/javascript"
src="http://duckevents.uoregon.edu/widget/combo?schools=oregon&days=7&num=10&types=14720%2C14723%2C14829%2C16401%2C14467%2C14830%2C14468%2C14808%2C15962%2C14827%2C14821%2C15929%2C14472%2C14519%2C14518%2C14820%2C14823%2C14397%2C15085%2C14824%2C15001%2C16497%2C15984%2C16110%2C15983%2C15982%2C14428%2C17347%2C16007%2C15663%2C16398%2C16403%2C14493%2C17118%2C17120%2C17119%2C17122%2C17121%2C14512%2C14388%2C15887%2C14832%2C15629%2C14395%2C14510"></script>

