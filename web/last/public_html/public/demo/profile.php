<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<link rel="stylesheet" href="/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/override.css" />
	<link rel="stylesheet" href="/style.css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.css">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>

	<title>click~a</title>

	<script id="chatBroEmbedCode">/* Chatbro Widget Embed Code Start */function ChatbroLoader(chats,async){async=!1!==async;var params={embedChatsParameters:chats instanceof Array?chats:[chats],lang:navigator.language||navigator.userLanguage,needLoadCode:'undefined'==typeof Chatbro,embedParamsVersion:localStorage.embedParamsVersion,chatbroScriptVersion:localStorage.chatbroScriptVersion},xhr=new XMLHttpRequest;xhr.withCredentials=!0,xhr.onload=function(){eval(xhr.responseText)},xhr.onerror=function(){console.error('Chatbro loading error')},xhr.open('GET','//www.chatbro.com/embed.js?'+btoa(unescape(encodeURIComponent(JSON.stringify(params)))),async),xhr.send()}/* Chatbro Widget Embed Code End */ChatbroLoader({encodedChatId: '67oZm'});</script>
</head>
<?php
$page = $_GET['page'] ?? 'profile';
?>

<body>
	<nav class="navbar fixed-top navbar-expand-md">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<?php if ($page == 'vac_filter') : ?>
				<a class="mt-2 ml-auto d-inline-block" href="#"><img src="/img/dummy/filters.png" height="50" alt=""></a>
			<?php endif; ?>
			<form id="search" class="form-inline mt-2 ml-auto mt-md-0">
				<button class="btn my-2 my-sm-0" type="submit"><img src="/img/content/search.svg" alt=""></button>
				<input class="form-control mr-sm-2" type="text" placeholder="Ищу..." aria-label="Search">
			</form>
			<a class="ml-4" href="#" data-toggle="modal" data-target="#staticBackdrop"><img src="/img/content/file-plus.svg" height="40" alt=""></a>
			<a class="mx-4" href="#" data-toggle="modal" data-target="#staticBackdrop2"><img src="/img/content/file-search.svg" height="40" alt=""></a>
		</div>
	</nav>

	<div class="d-flex">
		<?php include '_sidebar.php'; ?>

		<div id="content">
			<div class="row">
				<?php include 'pages/' . $page . '.php'; ?>
			</div>

			<div class="overlay"></div>
		</div>
	</div>

	<div class="side-menu">
		<img src="/img/dummy/msg.png" alt="" width="400">
	</div>

	<div class="modal fade" id="staticBackdrop2" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content" style="border-radius: 26px;overflow: hidden;">
				<div class="modal-body p-0">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="/fm" frameborder="0"></iframe>
					</div>
				</div>
				<div class="modal-footer" style="background-color: #2f2a2a;">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="staticBackdrop" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content" style="background: none;border: none;">
				<div class="modal-body">
					<?php include 'parts/modal.php'; ?>
				</div>
			</div>
		</div>
	</div>

	<script src="/js/jquery-3.5.1.slim.min.js"></script>
	<script src="/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script>
		$(".ms").select2({
            theme: "classic",
            language: "rus"
        })
        $(".mst").select2({
            theme: "classic",
            tags: true,
            language: "rus",
            tokenSeparators: [',']
        })

		$('.md-click').click(function(e) {
			getText();
        });

		$('body').on('click','.swal2-container textarea', function() {
			$(this).focus();
		})

		async function getText () {

			const { value: text } = await Swal.fire({
				input: 'textarea',
				showCancelButton: false,
				confirmButtonText: 'Go',
				showLoaderOnConfirm: true,
				preConfirm: (login) => {
					var promise = new Promise(function(resolve, reject) { 
						setTimeout(() => resolve(login), 1000);
					 })
					return promise;
				},
				allowOutsideClick: () => !Swal.isLoading()
			})

			if (text) {
				getText2(text)
			}
		}

		// console.log(fetch("http://46.48.14.86:5005", {
		// 				headers: {
		// 				'Accept': 'application/json',
		// 				'Content-Type': 'application/json'
		// 				},
		// 				method: "POST",
		// 				body: JSON.stringify({'x': ['data']})
		// 			}))

		async function getText2 (data) {

			const inputOptions = new Promise((resolve) => {
				setTimeout(() => {
					resolve({
						'vac_40295452.json':'vac_40295452.json',
						'vac_43154949.json':'vac_43154949.json',
						'vac_43696650.json':'vac_43696650.json',
					})
				}, 1000)
			})

			const { value: text } = await Swal.fire({
				showCancelButton: false,
				showLoaderOnConfirm: true,
				input: 'radio',
				inputOptions: inputOptions,
				inputValidator: (value) => {
					if (!value) {
					return 'You need to choose something!'
					}
				},
				allowOutsideClick: () => !Swal.isLoading(),
				preConfirm: (json) => {
					return fetch(`/index.php?json=${json}`)
						.then(function(response){ 
							if (!response.ok) {
								throw new Error(response.statusText)
							}
							return response.json() 
						})
						.catch(function(error){ Swal.showValidationMessage(`Request failed: ${error}`) })
				},
			})

			if (text) {
				Swal.fire({
					title: 'Успешно!',
					html: `
						<code>${text}</code>
					`,
					confirmButtonText: 'Lovely!'
				})
			}
		}

		
	</script>
</body>

</html>