<?php require_once 'logic.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'head.php'?>
    <title>Управляющая компания «Жэк», Волгоград - адрес и телефон, официальный сайт...</title>
</head>
<body>

    <?php require_once 'header.php'?>

<br>

<div class = "container">
    <h5>Управляющая компания «Жэк» </h5>
    <div class="lftbrdr">
        Данные УК «Жэк» по адресу Волгоградская обл, г. Волгоград, пр-кт. Канатчиков, д. 22, телефон диспетчерской службы 8 (962) 760-10-60, отзывы жителей домов, обслуживаемых компанией о качестве работы и оказываемых услуг, число домов находящихся под управлением — 2.
    </div>
    <div class ="container">
        <span class = "greeen">
            <i class="bi bi-house-door-fill"></i> 2 дома <i class="bi bi-pie-chart-fill"></i> 1015 м<sup>2</sup>
        </span>
        <span>
            <i class="bi bi-graph-up-arrow"></i> <a href ="#">Рейтинг УК и ТСЖ  </a>
        </span>
    </div>
    <br>
    <div class ="col-md-7">
        <table class="table table-borderless">
            <tr>
                <td >Наименование</td>
                <td >Управляющая компания «Жэк»</td>
            </tr>
            <tr>
                <td >Руководитель</td>
                <td >Воробье Евгений Олегович</td>
            </tr>
            <tr>
                <td>Адрес</td>
                <td >Волгоградская обл, г. Волгоград, пр-кт. Канатчиков, д. 22 <a href="#">на карте</a> </td>
            </tr>
            <tr>
                <td>Диспетчерская служба</td>
                <td >8 (962) 760-10-60 </td>
            </tr>
            <tr>
                <td>Телефон (ы)</td>
                <td >+7 (8442) 991-40-47-84-42-99-14-05</td>
            </tr>
            <tr>
                <td >Дома в управлении</td>
                <td >2  <a href="#">см. список</a></td>
            </tr>
            <tr>
                <td >ИНН</td>
                <td >3461008423</td>
            </tr>
            <tr>
                <td>ОГРН</td>
                <td >1133443030380</td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td >ooo.tzko-1@yandex.ru</td>
            </tr>
            <tr>
                <td></td>
                <td ><i class="bi bi-chat-fill"></i><a href="#">Оставить отзыв</a> о работе УК </td>
            </tr>
        </table>
    </div>
    <div class ="row">
        <div class ="col-md-6">
            <span class = "brdrbtm">
                <i class="bi bi-calendar"></i>
                Режим работы
            </span>
            <table class="table table-bordered text-center">
                    <tr class="table-light">
                        <td >Пн</td>
                        <td >Вт</td>
                        <td >Ср</td>
                        <td >Чт</td>
                        <td colspan="4" >Пт</td>
                        <td colspan="2" ><p class = "txtred">Сб</p></td>
                        <td colspan="2" ><p class ="txtred">Вс</p></td>
                    </tr>
                <tr>
                    <td colspan="4"  >08:00 - 17:00</td>
                    <td colspan="4"  >08:00 - 16:00	</td>
                    <td colspan="4"  >выходной</td>
                </tr>
                <tr>
                    <td colspan="8"  >перерыв 12:00 - 13:00</td>
                    <td colspan="4"  >  </td>
                </tr>
            </table>
        </div>
        <div class ="col-md-6">
            <span class ="brdrbtm">
                <i class="bi bi-calendar"></i>
                Раписание приема граждан по личным вопросам
            </span>
            <table class="table table-bordered text-center">
                <tr class="table-light">
                    <td >Пн</td>
                    <td >Вт</td>
                    <td >Ср</td>
                    <td >Чт</td>
                    <td colspan="4" >Пт</td>
                    <td colspan="2" ><p class = "txtred">Сб</p></td>
                    <td colspan="2" ><p class ="txtred">Вс</p></td>
                </tr>
                <tr>
                    <td colspan="4"  >08:00 - 17:00</td>
                    <td colspan="4"  >08:00 - 16:00	</td>
                    <td colspan="4"  >выходной</td>
                </tr>
                <tr>
                    <td colspan="8"  >перерыв 12:00 - 13:00</td>
                    <td colspan="4"  >  </td>
                </tr>
            </table>
        </div>

    </div>
    <br>
    <span class = "brdrbtm">
        <i class="bi bi-calendar"></i>
        Анкета компании
    </span>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="reg-data-tab" data-bs-toggle="pill" data-bs-target="#reg-data" type="button" role="tab" aria-controls="reg-data" aria-selected="true"><i class="bi bi-bag-fill"></i>Регистрационные данные</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="bi bi-person-standing"></i>Доп. информация</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="bi bi-pin-map-fill"></i>На карте</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="reg-data" role="tabpanel" aria-labelledby="reg-data" tabindex="0">
            <div class = "container">
                <table class="table table-striped">
                    <tr>
                        <td class = "col-md-5">Полное наименование</td>
                        <td>ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ "ЖИЛИЩНО-ЭКСПЛУАТАЦИОННАЯ КОМПАНИЯ"</td>
                    </tr>
                    <tr>
                        <td class = "col-md-5">Краткое наименование</td>
                        <td>ООО "ЖЭК""</td>
                    </tr>
                    <tr>
                        <td class = "col-md-5">Организационно-правовая форма</td>
                        <td>Общества с ограниченной ответственностью</td>
                    </tr>
                    <tr>
                        <td class = "col-md-5">ИНН</td>
                        <td>3461008423</td>
                    </tr>
                    <tr>
                        <td class = "col-md-5">ОГРН</td>
                        <td>1133443030380</td>
                    </tr>
                    <tr>
                        <td class = "col-md-5">Адрес регистрации ЮЛ</td>
                        <td>400082, Волгоградская обл, г Волгоград, ул 50 лет Октября, д. 13</td>
                    </tr>
                </table>
            </div>
            <br>
            <span class = "brdrbtm">
            <i class="bi bi-telephone-fill"></i>
            Контактная информация
            </span>
            <div class = "container">
                <table class="table table-striped">
                    <tr>
                        <td class = "col-md-5">Адрес диспетчерской</td>
                        <td>Волгоградская обл, г. Волгоград, пр-кт. Канатчиков, д. 22</td>
                    </tr>
                    <tr>
                        <td class = "col-md-5">Фактическое местонахождение органов управления</td>
                        <td>Волгоградская обл, г. Волгоград, пр-кт. Канатчиков</td>
                    </tr>
                    <tr>
                        <td class = "col-md-5">Контактные телефоны</td>
                        <td>	+7 (8442) 991-40-47-84-42-99-14-05</td>
                    </tr>
                    <tr>
                        <td class = "col-md-5">Телефон диспетчерской службы</td>
                        <td>	+7 (962) 760-10-60</td>
                    </tr>
                    <tr>
                        <td class = "col-md-5">Официальный сайт</td>
                        <td>а</td>
                    </tr>
                    <tr>
                        <td class = "col-md-5">Почтовый адрес</td>
                        <td>	Волгоградская обл, г. Волгоград, пр-кт. Канатчиков, д. 22</td>
                    </tr>
                    <tr>
                        <td class = "col-md-5">ФИО руководителя</td>
                        <td>Воробье Евгений Олегович</td>
                    </tr>
                </table>
            </div>

        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <span class = "brdrbtm">
            <i class="bi bi-person-standing"></i>
            Штатная численность
            </span>
            <div class = "container">
                <table class="table table-striped">
                    <tr>
                        <td class = "col-md-5">Штатная численность персонала, чел.</td>
                        <td>13</td>
                    </tr>
                    <tr>
                        <td class = "col-md-5">Штатная численность административного персонала, чел.</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td class = "col-md-5">Штатная численность инженеров, чел.</td>
                        <td>1</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <div style="overflow:hidden;"><a href="https://yandex.ru/maps/org/domofon_servis/1079960565/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Домофон-Сервис</a><a href="https://yandex.ru/maps/38/volgograd/category/intercoms/184105336/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Домофоны в Волгограде</a><a href="https://yandex.ru/maps/38/volgograd/category/security_and_alarm_systems/184105350/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:28px;">Системы безопасности и охраны в Волгограде</a><iframe src="https://yandex.ru/map-widget/v1/?ll=44.580962%2C48.723238&mode=search&oid=1079960565&ol=biz&sctx=ZAAAAAgBEAAaKAoSCQHcLF4sQkZAESkGSDSBWkhAEhIJkUjb%2BBOV4j8RrmNccXFU3j8iBgABAgMEBSgKOABAxlVIAWIqY29sbGVjdGlvbnNfcmFua2luZ19tb2RlbD1jb2xsZWN0aW9uc19kc3NtagJydZ0BzcxMPaABAKgBAL0BCZcnEMIBPIe01MaVBfP%2Bt%2BztBO2o4pMEm%2F6Gmgb1x%2FuCBLCpzbYEgdS%2Bywb90KKWiALuyPriBPXsybXOBorDrf22AuoBAPIBAPgBAIICM9C60LDQuiDQstGB0YLQsNCy0LjRgtGMINC60LDRgNGC0YMg0LIg0YHQsNC50YIgaHRtbIoCAJICAJoCDGRlc2t0b3AtbWFwcw%3D%3D&sll=44.548003%2C48.723238&source=serp_navig&sspn=0.237236%2C0.094950&text=%D0%BA%D0%B0%D0%BA%20%D0%B2%D1%81%D1%82%D0%B0%D0%B2%D0%B8%D1%82%D1%8C%20%D0%BA%D0%B0%D1%80%D1%82%D1%83%20%D0%B2%20%D1%81%D0%B0%D0%B9%D1%82%20html&z=13" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
        </div>

    </div>
    <br>

    <span class = "brdrbtm">
        <i class="bi bi-house-door-fill"></i>
        Дома в управлении (жилой фонд)
    </span>


    <ul class="nav nav-pills mb-3" id="pills-tab2" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="list-tab" data-bs-toggle="tab" data-bs-target="#list-tab-pane" type="button" role="tab" aria-controls="list-tab-pane" aria-selected="true"><i class="bi bi-card-list"></i>Показать списком</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="map-tab" data-bs-toggle="tab" data-bs-target="#map-tab-pane" type="button" role="tab" aria-controls="map-tab-pane" aria-selected="false"><i class="bi bi-map-fill"></i>Показать на карте</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent2">
        <div class="tab-pane fade show active" id="list-tab-pane" role="tabpanel" aria-labelledby="list-tab" tabindex="0">
            <table class="table table-striped">
                <thead>
                <tr>
                    <td class = "col-md-1">№</td>
                    <td class = "col-md-4">Адрес</td>
                    <td class = "col-md-3">Начало управления</td>
                    <td class = "col-md-1">Этажей</td>
                    <td class = "col-md-1">Квартир</td>
                    <td class = "col-md-1">Год</td>
                    <td class = "col-md-1">Площадь м<sup>2</sup></td>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class = "col-md-1">1</td>
                    <td class = "col-md-4"><a class ="refffnodec">	ул. им. капитана Тряскина, 3, Волгоград</a></td>
                    <td class = "col-md-3">16.04.2015</td>
                    <td class = "col-md-1">2</td>
                    <td class = "col-md-1">15</td>
                    <td class = "col-md-1">1948</td>
                    <td class = "col-md-1">915.2</td>

                </tr>
                <tr>
                    <td class = "col-md-1">2</td>
                    <td class = "col-md-4"><a class ="refffnodec">		ул. им. Лермонтова, 9, Волгоград</a></td>
                    <td class = "col-md-3">16.04.2015</td>
                    <td class = "col-md-1">1</td>
                    <td class = "col-md-1">3</td>
                    <td class = "col-md-1">1950</td>
                    <td class = "col-md-1">99.7</td>

                </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="map-tab-pane" role="tabpanel" aria-labelledby="map-tab" tabindex="0">
            <div style="overflow:hidden;"><a href="https://yandex.ru/maps/org/domofon_servis/1079960565/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Домофон-Сервис</a><a href="https://yandex.ru/maps/38/volgograd/category/intercoms/184105336/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Домофоны в Волгограде</a><a href="https://yandex.ru/maps/38/volgograd/category/security_and_alarm_systems/184105350/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:28px;">Системы безопасности и охраны в Волгограде</a><iframe src="https://yandex.ru/map-widget/v1/?ll=44.580962%2C48.723238&mode=search&oid=1079960565&ol=biz&sctx=ZAAAAAgBEAAaKAoSCQHcLF4sQkZAESkGSDSBWkhAEhIJkUjb%2BBOV4j8RrmNccXFU3j8iBgABAgMEBSgKOABAxlVIAWIqY29sbGVjdGlvbnNfcmFua2luZ19tb2RlbD1jb2xsZWN0aW9uc19kc3NtagJydZ0BzcxMPaABAKgBAL0BCZcnEMIBPIe01MaVBfP%2Bt%2BztBO2o4pMEm%2F6Gmgb1x%2FuCBLCpzbYEgdS%2Bywb90KKWiALuyPriBPXsybXOBorDrf22AuoBAPIBAPgBAIICM9C60LDQuiDQstGB0YLQsNCy0LjRgtGMINC60LDRgNGC0YMg0LIg0YHQsNC50YIgaHRtbIoCAJICAJoCDGRlc2t0b3AtbWFwcw%3D%3D&sll=44.548003%2C48.723238&source=serp_navig&sspn=0.237236%2C0.094950&text=%D0%BA%D0%B0%D0%BA%20%D0%B2%D1%81%D1%82%D0%B0%D0%B2%D0%B8%D1%82%D1%8C%20%D0%BA%D0%B0%D1%80%D1%82%D1%83%20%D0%B2%20%D1%81%D0%B0%D0%B9%D1%82%20html&z=13" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
        </div>
    </div>
<br>
    <div class ="col-md-11">
        <div class="row">
                <div class = "col-md-1">
                    <a href="#"><img src="user.jpg" alt class ="pic"></img></a>
                </div>
            <div class = "col-md-10">
                <h6>
                    <span><a class = "refff2" href = "#">Екатерина</a></span>
                    <small>23 июля 2022 в 12:41</small>
                    <span class ="bgorng">Прилегающая территория</span>
                </h6>
                <p></p>
                Здравствуйте. Пишу повторно о просьбе заменить, подсыпать песок в песочницу. Лето проходит а так и нет песка. Дом по улице 8 Воздушной армии #48, семь ветров.
                <p></p>
                <div class ="container text-end">
                    <span class = "text-primary"><i class="bi bi-hand-thumbs-up-fill"></i></span>
                    <span>0</span>
                    <span class = "text-primary"><i class="bi bi-hand-thumbs-down-fill"></i></span>
                </div>

            </div>
        </div>
        <div class="row">
            <div class = "col-md-1">
                <a href="#"><img src="user.jpg" alt class ="pic"></img></a>
            </div>
            <div class = "col-md-10">
                <h6>
                    <span><a class = "refff2" href = "#">Елена</a></span>
                    <small>13 апреля 2022 в 13:17</small>
                    <span class ="bgorng">Прилегающая территория</span>
                </h6>
                <p></p>
                Прилегающие территории домов расположенных по адресу: г. Волгоград, ул.им .Пос .С. Чекалина, д. 66, 69, 70, 71 не убираются.
                Во дворах домов скопилось много мусора: упавшие деревья, строительный мусор, бытовой хлам.
                Убедительная просьба, направить машину и вывезти скопившейся мусор.
                <p></p>
                <div class ="container text-end">
                    <span class = "text-primary"><i class="bi bi-hand-thumbs-up-fill"></i></span>
                    <span>0</span>
                    <span class = "text-primary"><i class="bi bi-hand-thumbs-down-fill"></i></span>
                </div>

            </div>
        </div>
        <div class="row">
            <div class = "col-md-1">
                <a href="#"><img src="user.jpg" alt class ="pic"></img></a>
            </div>
            <div class = "col-md-10">
                <h6>
                    <span><a class = "refff2" href = "#">Игорь</a></span>
                    <small>12 июля 2021 в 23:51</small>
                    <span class ="bgorng">Качество обслуживания</span>
                </h6>
                <p></p>
                В подъездах грязно
                <p></p>
                <div class ="container text-end">
                    <span class = "text-primary"><i class="bi bi-hand-thumbs-up-fill"></i></span>
                    <span>0</span>
                    <span class = "text-primary"><i class="bi bi-hand-thumbs-down-fill"></i></span>
                </div>

            </div>
        </div>
        <div class="row">
            <div class = "col-md-1">
                <a href="#"><img src="user.jpg" alt class ="pic"></img></a>
            </div>
            <div class = "col-md-10">
                <h6>
                    <span><a class = "refff2" href = "#">Генадий</a></span>
                    <small>02 июня 2021 в 21:51</small>
                    <span class ="bgorng">Состояние дома</span>
                </h6>
                <p></p>
                На таращанцев 19, в подьезде нет никакого освещения, ходить невозможно, если не исправят, буду писать жалобу выше стоящим
                <p></p>
                <div class ="container text-end">
                    <span class = "text-primary"><i class="bi bi-hand-thumbs-up-fill"></i></span>
                    <span>0</span>
                    <span class = "text-primary"><i class="bi bi-hand-thumbs-down-fill"></i></span>
                </div>

            </div>
        </div>
        <div class="row">
            <div class = "col-md-1">
                <a href="#"><img src="user.jpg" alt class ="pic"></img></a>
            </div>
            <div class = "col-md-10">
                <h6>
                    <span><a class = "refff2" href = "#">Татьяна</a></span>
                    <small>09 апреля 2021 в 10:41</small>
                    <span class ="bgorng">Прилегающая территория</span>
                </h6>
                <p></p>
                придомовая территория(двор) вообще не убирается
                <p></p>
                <div class ="container text-end">
                    <span class = "text-primary"><i class="bi bi-hand-thumbs-up-fill"></i></span>
                    <span>0</span>
                    <span class = "text-primary"><i class="bi bi-hand-thumbs-down-fill"></i></span>
                </div>

            </div>
        </div>
        <div class="row">
            <div class = "col-md-1">
                <a href="#"><img src="user.jpg" alt class ="pic"></img></a>
            </div>
            <div class = "col-md-10">
                <h6>
                    <span><a class = "refff2" href = "#">Петр</a></span>
                    <small>24 октября 2020 в 16:49</small>
                    <span class ="bgorng">Качество обслуживания</span>
                </h6>
                <p></p>
                Отопление не дают, на телефон не отвечают, должны дать отопление 12.10.2020, на дворе 24.10 холодные трубы
                <p></p>
                <div class ="container text-end">
                    <span class = "text-primary"><i class="bi bi-hand-thumbs-up-fill"></i></span>
                    <span>0</span>
                    <span class = "text-primary"><i class="bi bi-hand-thumbs-down-fill"></i></span>
                </div>

            </div>
        </div>
    </div>
    <br>
    <div class = "row">
        <div class ="col-md-10">
        <h5>
            <i class="bi bi-chat-fill text-primary"></i>
            Отзывы о работе управляющей компании (ТСЖ)
        </h5>
        Большая просьба оставлять развернутые отзывы и жалобы о работе управлящей компании (ТСЖ), тарифах на услуги, о качестве ремонта и обслуживания дома и прилегающей территории, с указанием подробностей в формате "где", "когда", "что случилось". А также, если присутствуют ошибки в описании или данных. Спасибо.
        <br><br>
            <div class = "row">

                <div class ="col-md-6">
                    О чем отзыв
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Без темы</option>
                        <option value="1">Качество обслуживания</option>
                        <option value="2">Моя квартира</option>
                        <option value="3">Тарифы</option>
                        <option value="4">Платежи за ЖКУ</option>
                        <option value="5">Состояние дома</option>
                        <option value="6">Прилегающая территория</option>
                        <option value="7">Вывоз мусора</option>
                        <option value="8">Работы по капремонту</option>
                        <option value="9">Ошибка в данных</option>
                    </select>
                </div>
                <div class ="col-md-6">
                    Ваше имя
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-label="Username">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    Ваш отзыв
    <textarea class="form-control" rows="6" name="comment" id="textz" required=""></textarea>
    <br>
    <button type="button" class="btn btn-primary">Добавить отзыв</button>


</div>





</body>
</html>