<ul class="facebook-feed">
<?php foreach ($items as $item): ?>
  <li class="item">
    <span class="facebook-note-picture"><img src="http://graph.facebook.com/<?php echo $feedid; ?>/picture" /></span>
    <span class="facebook-note-title"><?php echo $item->title; ?></span>
    <span class="facebook-note-message"><?php echo $item->content; ?></span>
    <span class="facebook-note-time"><?php echo t('!time ago.', array('!time' => format_interval(time() - strtotime($item->published)))); ?></span>
  </li>
<?php endforeach; ?>
</ul>
