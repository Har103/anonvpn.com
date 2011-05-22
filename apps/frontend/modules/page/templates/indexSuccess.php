<h1>Pages List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Keywords</th>
      <th>Description</th>
      <th>Content</th>
      <th>Slug</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($pages as $page): ?>
    <tr>
      <td><a href="<?php echo url_for('page/edit?id='.$page->getId()) ?>"><?php echo $page->getId() ?></a></td>
      <td><?php echo $page->getTitle() ?></td>
      <td><?php echo $page->getKeywords() ?></td>
      <td><?php echo $page->getDescription() ?></td>
      <td><?php echo $page->getContent() ?></td>
      <td><?php echo $page->getSlug() ?></td>
      <td><?php echo $page->getCreatedAt() ?></td>
      <td><?php echo $page->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('page/new') ?>">New</a>
