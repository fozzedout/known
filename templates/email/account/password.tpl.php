<div style="font-weight: bold; font-size: 30px; line-height: 32px; color: #333" align="center">
    Forgot your password?
</div><br>
<hr/>
<br>
We heard you forgot your password. Don't worry. It happens to the best of us.
<br><br>
You can reset your password by clicking the link below (or copy and paste it into your browser).
<br><br>

<a href="<?php echo \Idno\Core\Idno::site()->config()->getDisplayURL() ?>account/password/reset/?email=<?php echo urlencode($vars['email']) ?>&code=<?php echo urlencode($vars['code']) ?>" style="color: #73b2e3; text-decoration: none;"><?php echo \Idno\Core\Idno::site()->config()->getDisplayURL() ?>account/password/reset/?email=<?php echo urlencode($vars['email']) ?>&code=<?php echo urlencode($vars['code']) ?></a>
<br><br>