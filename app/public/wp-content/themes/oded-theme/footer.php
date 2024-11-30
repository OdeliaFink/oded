<footer class="site-footer">
  <section>
    <div style="display: flex;flex-direction: row; justify-content: space-between; align-items:center;
   margin-top: 9px;">

      <div style="display: flex;flex-direction: row; gap: 2rem;">
        <p>email</p>
        <p>linkedin</p>
      </div>
      <div class="footer-logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <h1>ODED</h1>
        </a>
      </div>
    </div>
    <div class="footer-content">
      <p>&copy; <?php echo date('Y'); ?> ODED STUDIOS</p>

    </div>
  </section>
</footer>
<?php wp_footer(); ?>
</body>

</html>