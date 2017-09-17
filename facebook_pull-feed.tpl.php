<ul class="facebook-feed">
<?php foreach ($items as $item): ?>
  <li class="item">
  <?php if (isset($item->from)): ?>
    <span class="facebook-feed-picture"><img alt="<?php echo $item->from->name; ?>" src="//graph.facebook.com/<?php echo $item->from->id; ?>/picture" /></span>
    <span class="facebook-feed-from"><a href="//facebook.com/profile.php?id=<?php echo $item->from->id; ?>"><?php echo $item->from->name; ?></a></span>
  <?php endif; ?>
  <?php if (isset($item->story) && isset($item->from)): ?>
    <span class="facebook-feed-story"><?php echo str_replace($item->from->name, '', $item->story); ?></span>
  <?php endif; ?>
    <span class="facebook-feed-message">
      <?php if (isset($item->message)) echo $item->message; ?>
      <?php if (isset($item->link) && isset($item->type) && $item->type === 'link'): ?>
        <?php if (isset($item->description)) echo $item->description; ?>
        <?php if (isset($item->name)) echo l($item->name, $item->link); ?>
      <?php endif; ?>
      <?php if (isset($item->type) && isset($item->link) && isset($item->picture) && in_array($item->type, array('photo', 'video'))): ?>
        <?php echo l('<img src="' . $item->picture . '" />', $item->link, array('html' => true, 'attributes' => array('target' => '_blank'))); ?>
      <?php endif; ?>
      <?php if (isset($item->question) && isset($item->type) && $item->type === 'question'): ?>
        <?php echo $item->question; ?>
      <?php endif; ?>
    </span>
    <span class="facebook-feed-time">
      <?php if (isset($item->created_time)): ?>
        <?php echo t('!time ago.', array('!time' => format_interval(time() - strtotime($item->created_time)))); ?>
      <?php endif; ?>
    </span>
  </li>
<?php endforeach; ?>
</ul>
