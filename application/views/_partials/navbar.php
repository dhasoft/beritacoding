<!-- pastikan aktifkan 'url' di config/autoload.php ($autoload['helper'] = array('url');) -->
<!-- pastikan tentukan base_url di config/config.php ($config['base_url'] = '';) -->

<nav class="navbar">
    <a href="<?= site_url() ?>">Home</a>
    <a href="<?= site_url('article') ?>">Article</a>
    <a href="<?= site_url('page/about') ?>" style="margin-left:auto">About</a>
    <a href="<?= site_url('page/contact') ?>">Contact</a>
    <a href="<?= site_url('search') ?>">Search</a>
    <a href="<?= site_url('auth/login') ?>">Login</a>
    <!-- <a href="<?= site_url('auth/login') ?>" style="margin-left:auto">Login</a> -->
</nav>