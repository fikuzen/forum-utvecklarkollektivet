<h1>Threads</h1>

<?php foreach($threads as $thread): ?>

	<?php echo $thread['Thread']['id']; ?>, <?php echo $thread['Thread']['topic']; ?>
	<!-- Alla inlägg finns i $thread['Thread']['inlay'] -->
	<hr />
	
<?php endforeach; ?>