<footer class="site-footer">
  <svg class="footer-svg-top" id="visual" viewBox="0 0 4000 100" width="4000" height="100"
    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
    <path
      d="M0 46L44.5 48C89 50 178 54 266.8 54.3C355.7 54.7 444.3 51.3 533.2 48C622 44.7 711 41.3 800 40.7C889 40 978 42 1066.8 44C1155.7 46 1244.3 48 1333.2 46.5C1422 45 1511 40 1600 40.3C1689 40.7 1778 46.3 1866.8 50.8C1955.7 55.3 2044.3 58.7 2133.2 56C2222 53.3 2311 44.7 2400 41.3C2489 38 2578 40 2666.8 41.7C2755.7 43.3 2844.3 44.7 2933.2 46.7C3022 48.7 3111 51.3 3200 50.3C3289 49.3 3378 44.7 3466.8 44.5C3555.7 44.3 3644.3 48.7 3733.2 49.5C3822 50.3 3911 47.7 3955.5 46.3L4000 45L4000 101L3955.5 101C3911 101 3822 101 3733.2 101C3644.3 101 3555.7 101 3466.8 101C3378 101 3289 101 3200 101C3111 101 3022 101 2933.2 101C2844.3 101 2755.7 101 2666.8 101C2578 101 2489 101 2400 101C2311 101 2222 101 2133.2 101C2044.3 101 1955.7 101 1866.8 101C1778 101 1689 101 1600 101C1511 101 1422 101 1333.2 101C1244.3 101 1155.7 101 1066.8 101C978 101 889 101 800 101C711 101 622 101 533.2 101C444.3 101 355.7 101 266.8 101C178 101 89 101 44.5 101L0 101Z"
      fill="#669067" stroke-linecap="round" stroke-linejoin="miter"
      style="stroke-dashoffset: 0; stroke-dasharray: none;"></path>
  </svg>
  <section>
    <div style="display: flex;flex-direction: row; justify-content: space-between; align-items:center;">

      <div style=" display: flex;flex-direction: row; gap: 2rem;">
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