<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/7a57c86913.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Rosnou-v6.3/demo-files/demo.css">
    <link rel="stylesheet" href="../Rosnou-v6.3/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="portal-ui.css">
    <link rel="stylesheet" href="lk_styleshit.css">
    <link rel="stylesheet" href="flags-alt.css">
</head>
<style>
    body{
        background: #F8F9FB;
    }

</style>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<button type="button" class="btn btn-primary m-4" data-toggle="modal" data-target="#exampleModal" onclick="resize()">
    Лист экзаменационный
</button>
<div class="modal fade bd-example-modal-xl" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modals_width_adaptive" role="document" style="max-width: 1200px;width: calc(100vw - 100px)">
        <div class="modal-content modal-autoheight" style="background-clip: inherit;border: none;border-radius: 10px;">
            <div class="modal-header modals_Header" style="border-bottom: 1px solid #D5E3F0">
                <div class="d-flex flex-row justify-content-between align-items-center w-100">
                    <h4 class="text-color-secondary">Экзаменационный лист</h4>
                    <button class="tertiary_button" data-dismiss="modal" aria-label="Close"><span class="icon-cross-24 text-color-midnight-4"></span></button>
                </div>
            </div>
            <div  class="h-100" style="border-radius: 10px;border: none;padding-right: 8px!important;background-color: #F8F9FB">
                <a class="float_buttons print_statements" onclick="print_statements()"><span class="icon-print-24 text-color-midnight-4"></span></a>
                <div class="p-0 d-flex modal-body-images">
                    <div class="modal-body p-0 d-flex  w-100 justify-content-center" style="padding-top: 32px!important;">
                        <div class="documents_with_exam">
                            <div id="documents_print_statement" class="list_exams">
                                <div class="d-flex flex-row gap-16px-mm justify-content-center">
                                    <div class="Rosnou_Logo_List_exams"></div>
                                    <p class="m-0 text-border-left font-family-rosnou">Автономная некоммерческая организация высшего образования<br>«Российский новый университет» (АНО ВО «РосНОУ»)</p>
                                </div>
                                <div class="d-flex flex-row gap-16px-mm">
                                    <div class="photo_frame"></div>
                                    <div class="display-flex-column w-100 gap-12px-mm">
                                        <div class="d-flex flex-row gap-4px-mm w-100">
                                            <p class="m-0">ФИО:</p>
                                            <p class="m-0 table_line d-flex justify-content-center">{{$data['full_name']}}</p>
                                        </div>
                                        <div class="d-flex flex-row gap-4px-mm w-100">
                                            <p class="m-0">Институт:</p>
                                            <p class="m-0 table_line d-flex justify-content-center"></p>
                                        </div>
                                        <div class="d-flex flex-row gap-4px-mm w-100">
                                            <p class="m-0">Специальность:</p>
                                            <div class="display-flex-column gap-4px-mm w-100">
                                                <p class="m-0 table_line d-flex justify-content-center"></p>
                                                <p class="m-0 table_line d-flex justify-content-center"></p>
                                            </div>
                                        </div>
                                        <div class="d-flex fex-row gap-32px-mm">
                                            <div class="d-flex flex-row gap-4px-mm w-50">
                                                <p class="m-0">Форма обучения:</p>
                                                <p class="m-0 table_line d-flex justify-content-center" style="min-width: max-content">{{$specialty['form']}}</p>
                                            </div>
                                            <div class="d-flex flex-row gap-4px-mm w-50">
                                                <p class="m-0">Экзаменационный лист №:</p>
                                                <p class="m-0 table_line d-flex justify-content-center"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex fex-row gap-32px-mm w-100">
                                    <div class="d-flex flex-row gap-4px-mm w-50">
                                        <p class="m-0">Дата выдачи</p>
                                        <p class="m-0 table_line d-flex justify-content-center">26 июля 2023 г.</p>
                                    </div>
                                    <div class="d-flex flex-row gap-4px-mm w-50">
                                        <p class="m-0">Подпись абитуриента</p>
                                        <p class="m-0 table_line d-flex justify-content-center"></p>
                                    </div>
                                </div>
                                <div class="d-flex fex-row gap-16px-mm">
                                    <div class="d-flex flex-row gap-8px-mm">
                                        <p class="m-0">Секретарь Приемной комиссии</p>
                                        <div class="display-flex-column" style="width: 47mm;margin-top: 4mm">
                                            <p class="m-0 table_line d-flex justify-content-center"></p>
                                            <p class="m-0 text-center"><em>(подпись)</em></p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row gap-4px-mm" style="flex-grow: 1">
                                        <div class="display-flex-column w-100" style="margin-top: 4mm">
                                            <p class="m-0 table_line d-flex justify-content-center"></p>
                                            <p class="m-0 text-center"><em>(фамилия и инициалы)</em></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="display-flex-column gap-8px-mm w-100">
                                    <p class="m-0 text-center" style="font-size: 14pt;font-weight: 700">Результаты вступительных испытаний</p>
                                    <table class="table_exams_list">
                                        <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Наименование предмета</th>
                                            <th>Характер вступительных испытаний</th>
                                            <th>Дата вступительного
                                                испытания</th>
                                            <th>Оценка, отметка (кол-во баллов)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data['entrance_tests'] as $key => $examData)
                                            <tr>
                                                <td>{{$key}}</td>
                                                <td>{{$examData['discipline']}}</td>
                                                <td>Тестирование</td>
                                                <td>{{$examData['date']}}</td>
                                                <td>{{$examData['score']}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex fex-row gap-24px-mm">
                                    <p class="m-0" style="min-width: max-content;">Сумма баллов, полученных
                                        на вступительных испытаниях</p>
                                    <div class="display-flex-column" style="width: 20mm;margin-top: 4mm">
                                        <p class="m-0 table_line d-flex justify-content-center"></p>
                                        <p class="m-0 text-center"><em>(цифрами)</em></p>
                                    </div>
                                    <div class="d-flex flex-row gap-4px-mm">
                                        <div class="display-flex-column" style="width: 68mm;margin-top: 4mm">
                                            <p class="m-0 table_line d-flex justify-content-center"></p>
                                            <p class="m-0 text-center"><em>(прописью)</em></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="display-flex-column gap-8px-mm">
                                    <p class="m-0" style="font-weight: 700">Идентификация поступающего произведена</p>
                                    <div class="d-flex fex-row gap-32px-mm">
                                        <div class="d-flex fex-row gap-8px-mm">
                                            <p class="m-0">Уполномоченное (должностное) лицо</p>
                                            <div class="display-flex-column" style="min-width: 36mm;margin-top: 4mm">
                                                <p class="m-0 table_line d-flex justify-content-center"></p>
                                                <p class="m-0 text-center"><em>(подпись)</em></p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row gap-4px-mm" style="flex-grow: 1">
                                            <div class="display-flex-column w-100" style="margin-top: 4mm">
                                                <p class="m-0 table_line d-flex justify-content-center"></p>
                                                <p class="m-0 text-center"><em>(фамилия и инициалы)</em></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        if ($(".modal-autoheight").length > 0) {
            $(".modal").on("show.bs.modal", resize);
            $(window).on("resize", resize);
        }
    });
    function resize() {
        var winHeight = $(window).height();
        $(".modal-autoheight").css({
            height: (winHeight - 60) + "px"
        });
        $(".modal-autoheight .modal-body-images").css("max-height", (winHeight - 180) + "px");
    }
    function print_statements(){
        $("body").addClass("printSelected");
        $("body").append('<div class="documents_printed"></div>');
        $("#documents_print_statement").css('border','none').css('padding','0');
        $("#documents_print_statement").clone().appendTo(".documents_printed");
        window.print();

        $("body").removeClass("printSelected");
        $(".documents_printed").remove();
        $("#documents_print_statement").css('border','1px solid var(--base-midnight-5)').css('padding','10mm 10mm 0mm 10mm');
    }
</script>
</body>
</html>
