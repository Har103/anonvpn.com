<h1>Blogposts List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Content</th>
      <th>Slug</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($blogposts as $blogpost): ?>
    <tr>
      <td><a href="<?php echo url_for('blog/edit?id='.$blogpost->getId()) ?>"><?php echo $blogpost->getId() ?></a></td>
      <td><?php echo $blogpost->getTitle() ?></td>
      <td><?php echo $blogpost->getContent() ?></td>
      <td><?php echo $blogpost->getSlug() ?></td>
      <td><?php echo $blogpost->getCreatedAt() ?></td>
      <td><?php echo $blogpost->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('blog/new') ?>">New</a>
