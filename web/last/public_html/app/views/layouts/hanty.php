<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/override.css" />
    <link rel="stylesheet" href="/style.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <title>click~a</title>

    <script id="chatBroEmbedCode">
/* Chatbro Widget Embed Code Start */
function ChatbroLoader(chats,async){async=!1!==async;var params={embedChatsParameters:chats instanceof Array?chats:[chats],lang:navigator.language||navigator.userLanguage,needLoadCode:'undefined'==typeof Chatbro,embedParamsVersion:localStorage.embedParamsVersion,chatbroScriptVersion:localStorage.chatbroScriptVersion},xhr=new XMLHttpRequest;xhr.withCredentials=!0,xhr.onload=function(){eval(xhr.responseText)},xhr.onerror=function(){console.error('Chatbro loading error')},xhr.open('GET','//www.chatbro.com/embed.js?'+btoa(unescape(encodeURIComponent(JSON.stringify(params)))),async),xhr.send()}
/* Chatbro Widget Embed Code End */
ChatbroLoader({encodedChatId: '07obu'});
</script>
</head>

<?php
$page = $this->route['action'];
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

    <!-- <div class="d-flex"> -->
        <?php $this->getPart('inc/sidebar', compact('page')) ?>
        <div id="content" style="padding-left: 200px;    width: 100%;">
            <div class="row">
                <?= $content ?>
            </div>

            <div class="overlay"></div>
        </div>
    <!-- </div> -->

    <!-- <div class="side-menu"> -->
        <!-- <img src="/img/dummy/msg.png" alt="" width="400"> -->
    <!-- </div> -->

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
                    <div class="pnl2">
                        <div class="row">
                            <div class="col-8">
                                <div class="row">
                                    <div class="col-3"><b>Название:</b></div>
                                    <div class="col-9" style="font-size: 2em;line-height: .8;font-weight: bold;">Java разработчик</div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-3"><b>Специализации:</b></div>
                                    <div class="col-9">
                                        <select class="mst form-control" multiple="multiple">
                                            <option selected>IT</option>
                                            <option selected>Программист</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-3"><b>Город:</b></div>
                                    <div class="col-9">Москва</div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-3"><b>Адрес:</b></div>
                                    <div class="col-9">м.Бабушкино</div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-3"><b>Зарплата:</b></div>
                                    <div class="col-9">50 000 - 70 000 рублей</div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-3"><b>Навыки:</b></div>
                                    <div class="col-9">
                                        <select class="mst form-control" id="nv" multiple="multiple">
                                            <option value="0" selected>JAVA SE</option>
                                            <option value="1" selected>Spring Framework</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <img src="/img/video.svg" alt="" width="100" style="background: #171717;box-shadow: 10px 10px 25px rgba(40, 40, 40, 0.4), -10px -10px 25px rgba(11, 10, 10, 0.8);border-radius: 18px;">

                                <select id="ch" class="form-control mb-2">
                                    <option value="NFBmlewLt8w">https://www.youtube.com/watch?v=NFBmlewLt8w</option>
                                    <option value="oJPNMOisyCw">https://www.youtube.com/watch?v=oJPNMOisyCw</option>
                                    <option value="OmApr4hAm1A">https://www.youtube.com/watch?v=OmApr4hAm1A</option>
                                </select>

                                <div class="small"><a href="#" id="add">Добавить видеовизитку</a></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-5">
                                <div class="mb-4"><b>Задачи:</b> <!-- <textarea class="form-control"></textarea> -->
                                </div>
                                <div class="row mb-4">
                                    <div class="col-4"><b>Условия работы:</b></div>
                                    <div class="col-8"><select class="form-control">
                                            <option>Удаленка</option>
                                            <option>Полный рабочий день</option>
                                            <option selected>2/2</option>
                                        </select></div>
                                </div>
                                <div class="mb-4"><b>Этапы воронки:</b>
                                    <select class="ms form-control" multiple="multiple">
                                        <option selected>Резюме</option>
                                        <option>Видеорезюме</option>
                                        <option selected>Tестирование</option>
                                        <option selected>SoftSkills</option>
                                        <option>HardSkills</option>
                                        <option selected>Tестовое задание</option>
                                        <option selected>Cобеседование</option>
                                        <option selected>Tрудоустройство</option>
                                    </select>
                                    <div class="mt-4"><a href="#"><b>Тестовое задание:</b> <i class="fas fa-plus-circle"></i></a> </div>
                                </div>
                            </div>
                            <div class="col-7">
                                <a href="#"><img src="/img/dummy/calendar-mini.png" width="90%" alt=""></a>
                            </div>
                        </div>

                        <a href="#" data-dismiss="modal"><img src="/img/sidebar/s2.svg" width="74" alt="" style="position: absolute; right:50px; bottom:50px; background: #171717;box-shadow: 0px 0px 40px rgba(0, 133, 255, 0.5), 10px 10px 25px rgba(40, 40, 40, 0.4), -10px -10px 25px rgba(11, 10, 10, 0.8);border-radius: 60px;"></a>
                        <a href="#" class="md-click"><img src="/img/list/hh.svg" alt="" style="position: absolute; right:60px; bottom:200px;"></a>
                        <a href="#" data-dismiss="modal"><img src="/img/list/l2.svg" alt="" style="position: absolute; right:75px; bottom:150px;"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/jquery-3.5.1.min.js"></script>
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

        $('#add').click(function() {
            $.get('/profile?id=' + $('#ch').val(), function(res) {
                var sel = [];
                var l = $('#nv').val().length;
                JSON.parse(res).forEach(function(val, i, arr) {
                    var id = l + i - 1;
                    var data = {
                        id: id,
                        text: val
                    };
                    // var newOption = new Option(data.text, data.id, false, false);
                    // $('#nv').append(newOption);

                    if ($('#nv').find("option[value='" + data.id + "']").length) {
                        // $('#nv').val(data.id).trigger('change');
                    } else {
                        sel.push(i)
                        var newOption = new Option(data.text, data.id, true, true);
                        $('#nv').append(newOption);
                    }
                })

                $('#nv').trigger('change');
            })
        })

        $('.md-click').click(function(e) {
            getText();
        });

        $('body').on('click', '.swal2-container textarea', function() {
            $(this).focus();
        })

        async function getText() {

            const {
                value: text
            } = await Swal.fire({
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


        async function getText2(data) {

            const inputOptions = new Promise((resolve) => {
                setTimeout(() => {
                    resolve({
                        'vac_40295452.json': 'vac_40295452.json',
                        'vac_43154949.json': 'vac_43154949.json',
                        'vac_43696650.json': 'vac_43696650.json',
                    })
                }, 1000)
            })

            const {
                value: text
            } = await Swal.fire({
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
                    return $.get('/profile?id=' + json, function(res) {
                                var sel = [];
                                var l = $('#nv').val().length;
                                JSON.parse(res).forEach(function(val, i, arr) {
                                    var id = l + i - 1;
                                    var data = {
                                        id: id,
                                        text: val
                                    };
                                    // var newOption = new Option(data.text, data.id, false, false);
                                    // $('#nv').append(newOption);

                                    if ($('#nv').find("option[value='" + data.id + "']").length) {
                                        // $('#nv').val(data.id).trigger('change');
                                    } else {
                                        sel.push(i)
                                        var newOption = new Option(data.text, data.id, true, true);
                                        $('#nv').append(newOption);
                                    }
                                })

                                $('#nv').trigger('change');
                            })
                        // .then(function(response) {
                        //     if (!response.ok) {
                        //         throw new Error(response.statusText)
                        //     }
                        //     return response.json()
                        // })
                        // .catch(function(error) {
                        //     Swal.showValidationMessage(`Request failed: ${error}`)
                        // })
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

    <?php foreach ($scripts as $script) {
        echo $script;
    } ?>
</body>

</html>