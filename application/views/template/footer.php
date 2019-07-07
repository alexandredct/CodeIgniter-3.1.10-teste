</body>
<footer>
    <p><?= date('d/m/Y H:i:s')?></p>
    <p>Página renderizada em <strong>{elapsed_time}</strong> segundos.</p>
    <p><?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</footer>
