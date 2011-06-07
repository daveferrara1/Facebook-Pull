<ul class="facebook-feed">
<?php foreach ($items as $item): ?>
  <li class="item">
    <span class="facebook-feed-from"><img src="http://graph.facebook.com/<?php echo $item->from->id; ?>/picture" /></span>
    <span class="facebook-feed-message"><?php echo check_markup($item->message); ?></span>
    <span class="facebook-feed-time">Posted <?php echo format_date(strtotime($item->created_time), 'short'); ?></span>
  </li>
<?php endforeach; ?>
</ul>
