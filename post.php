<?php
/**
 * post.php — The Markdown Reader
 */
require_once 'includes/Parsedown.php';
$slug = preg_replace('/[^a-z0-9-]/', '', $_GET['slug'] ?? '');
$file_path = "posts/" . $slug . ".md";

if (!$slug || !file_exists($file_path)) {
    header("Location: blog.php");
    exit;
}

$markdown = file_get_contents($file_path);
$Parsedown = new Parsedown();
$postHtml = $Parsedown->text($markdown);

// Set Dynamic Title
preg_match('/# (.*)/', $markdown, $matches);
$pageTitle = $matches[1] ?? "Reflection";

include "includes/header.php";
?>

<article class="single-post section-padding">
  <div class="container narrow">
    <div class="post-content">
      <?= $postHtml ?>
    </div>
    <div class="post-footer-nav" style="margin-top: 50px; border-top: 1px solid #eee; padding-top: 20px;">
       <a href="blog.php" class="text-link">← Back to Reflections</a>
    </div>
  </div>
</article>

<?php include "includes/footer.php"; ?>