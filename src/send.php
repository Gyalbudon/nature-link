<?php
if (!empty($_POST)) {
    require_once(__DIR__ . '/config/config.php');
	$send = new Monaka\Send();
	$send->run($adminMail, $adminName, $returnMailTitle, $returnMailHeader, $returnMailFooter, $returnURL);
}

?>
@@include('@@webRoot/parts/header.html')

<body>

<main>
    <section  class="form-sended" id="area-7">
		<div class="heading-primary">
			<div class="container">
				<h2 class="heading-primary__text">無料相談・完了画面</h2>
			</div>
		</div>
		<?php if (!empty($_POST)) { ?>
            <div class="container application-container application-confirm">
            <div class="form-sended__wrapper py-5">
                <p class="form-sended__text">
                    <?php echo nl2br(h($completionMessage)); ?>
                </p>

                <div class="form-group mt-5">
                    <input class="btn inquiry-form__btn" type="button" value="トップに戻る" onclick="window.location='<?php echo $returnUrl; ?>';">
                </div>
            </div>
        </div>
    	<?php } ?>
    </section>
</main>

@@include('@@webRoot/parts/footer.html')