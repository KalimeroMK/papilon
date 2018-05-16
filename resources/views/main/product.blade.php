@extends('layouts.main')
<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="{{$product->title}}">
<meta itemprop="description" content="{!! str_limit(strip_tags($product->description), 300, '...')!!}">
<meta itemprop="image" content="{{$product->image}}">
<!-- Twitter Card data -->
<meta name="twitter:card" content="{{$product->image}}">
<meta name="twitter:site" content="@zaebalovek">
<meta name="twitter:title" content="{{$product->title}}">
<meta name="twitter:description" content="{!! str_limit(strip_tags($product->description), 300, '...')!!}">
<meta name="twitter:creator" content="@zaebalovek">
<meta name="twitter:image" content="{{$product->image}}">
<!-- Open Graph data -->
<meta property="og:locale" content="en_US"/>
<meta property="og:title" content="{{$product->title}}"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="{{$product->slag}}"/>
<meta property="og:image" content="{{$product->image}}"/>
<meta property="og:description" content="{!! str_limit(strip_tags($product->description), 300, '...')!!}"/>
<meta property="og:site_name" content="{{$product->title}}"/>
@include('layouts.menu')
@section('content')
    <section> <!-- Main slider -->
        <div id="frontpage-slider" class="single-product-slide">
            <div class="flexslider">
                <ul class="slides">
                    @foreach($sliders as $slider)
                        <li class="slide "
                            style="background-image:url('/assets/img/sliders/{{ $slider->image }}');"></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section> <!-- Main slider end -->
    <div class="col-md-12 pb-5" id="single-tabs">
        <div class="container">

            <ul class="nav nav-tabs" id="single-tabs-nav" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="desc-tab" data-toggle="tab" href="#desc" role="tab"
                       aria-controls="desc" aria-selected="true">Опис</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="other"
                       aria-selected="false">Услови</a>
                </li>
                <li class="nav-item price-button">
                    <a class="nav-link" id="price-list" data-toggle="modal" href="#price-list-content" role="modal"
                       aria-controls="price-list" aria-selected="false">Ценовник</a>
                </li>
                <li class="nav-item reserve-button">
                    <a class="nav-link" id="reserve" href="#">Резервирај</a>
                </li>
            </ul>


            <div class="col-md-12" id="single-offer-content">
                <div class="row">
                    <div class="col-md-9">
                        <h2>{{ $product->title }}</h2>
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
                <div class="tab-content" id="single-tabs-content">
                    <div class="tab-pane fade show active" id="desc" role="tabpanel" aria-labelledby="desc-tab">
                        <div class="row">
                            <div class="col-md-12 border-top border-bottom py-4 my-3">
                                <p class="light-text">
                                    {!! $product->description !!}
                                </p>
                            </div>
                            <hr/>

                            <div class="col-md-12 px-0">
                                <div class="location">
                                    <div class="col-md-4">
                                        <h5>Локација:</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <p class="light-text">{!! $product->location !!}</p>
                                    </div>
                                </div>
                                <div class="amenities">
                                    <div class="col-md-4">
                                        <h5>Хотелски содржини:</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <p class="light-text">{!! $product->hotelinfo !!}</p>
                                    </div>
                                </div>
                                <div class="amenities">
                                    <div class="col-md-4">
                                        <h5>Соби:</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <p class="light-text">{!! $product->roominfo !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="other-tab">
                        <div class="pane-content">
                            <h5 class="my-3">Општи услови на патување &nbsp; на агенции членки на
                                СКТМ</h5>
                            <p>1. СОДРЖИНА НА АРАНЖМАНОТ</p>
                            <p>Организаторот на патувањето гарантира реализација на аранжманот според описот на
                                програмата. Содржината на аранжманот ќе се оствари во потполност и на опишаниот начин,
                                освен во случај на влијание на ”виша сила” која не можела да се предвиди (војна,
                                терористички акции, штрајк, елементарни непогоди, сообраќајни и технички проблеми во
                                превозот или слично).</p>
                            <br>
                            <h5>2. ПРИЈАВА-ДОГОВОР И УПЛАТА</h5>
                            <p>Пријава-догово
                                р за патување се прави до пополнување на местата, со уплата на аконтација
                                на цената назначена на секоја поединечна програма. Пријави може да се извршат во
                                агенциите на Т.А. ПАПИЛОН и во сите други агенции овластени за продажба на програмите.
                                При пријавувањето купувачот уплаќа аванс од 40% од вредноста на аранжманот, а остатокот
                                по потврдување на резервацијата од службата за резервации и тоа најдоцна до 15 дена пред
                                реализација на аранжманот. Доколку патникот до тој рок не изврши доплата на аранжманот,
                                организаторот ќе смета дека патникот се откажува од аранжманот и ќе ги наплати трошоците
                                за отказ на аранжманот согласно условите од Член.6 – “право на патникот за откажување од
                                патувањето”. При пријавувањето, патникот потпишува пријава-договор со изјава –
                                “Изјавувам дека сум запознаен/а со програмата и со Општите услови на патување и дека во
                                целост ги прифаќам!” со што Општите услови на патување стануваат обврска за
                                организаторот и за патникот.</p>
                            <br>
                            <h5>3. ЦЕНА НА АРАНЖМАНОТ</h5>
                            <p>Цените за сите патувања се објавени во Денари или во Евра со обврска за плаќање во
                                денарска противвредност според пазарниот курс, објавен од страна на организаторот. Секое
                                барање за дополнителни услуги подразбира дополнителни плаќања. Организаторот го задржува
                                правото на промена на цената на аранжманот во случај на промена на цените на хотелските,
                                превозните и други услуги, како и во случај на промена на девизните курсеви на пазарот.
                                За зголемување на цената до 10% не е потребна согласност на купувачот (се пресметува на
                                остатокот од уплатата). При зголемување поголемо од 10% купувачот има право да го
                                раскине договорот без обврска да ја надокнади штетата произлезена од отказот.</p>
                            <br>
                            <h5>4. КАТЕГОРИЗАЦИЈА И ОПИС НА УСЛУГИТЕ</h5>
                            <p>Понудените хотели и апартмани се опишани според официјалната категоризација во време на
                                издавањето на каталогот. Квалитетот на услугите го стандардизираат локалните туристички
                                власти. Стандардите на сместување и услуги се различни по дестинации и не се
                                споредуваат. Организаторот не презема одговорност за било каква друга усна или писмена
                                информација која не е во согласност со описот на услугите во понудената програма.</p>
                            <br>
                            <h5>5. ПРАВО НА ОРГАНИЗАТОРОТ ЗА ИЗМЕНИ ВО ПРОГРАМАТА И ОТКАЗ НА АРАНЖМАНОТ</h5>
                            <p>Организаторот има право да ја измени програмата (во времетраење или содржина) во случај
                                на виша сила или вонредни околности кои не можел да ги предвиди, избегне или отстрани.
                                Учесникот на патувањето има право на рефундација на износот за нереализираните услуги.
                                Во ретки случаи кога нема можност за сместување во резервираниот објект поради технички
                                причини или “over booking” од страна на хотелиерот, организаторот ќе го смести патникот
                                според можностите во дадениот момент, во објект од иста категорија или од повисока
                                категорија, без надомест. Организаторот го задржува правото да го одложи или откаже
                                аранжманот во случај на недоволен број на пријавени патници од предвидениот минимум за
                                одреден аранжман. Организаторот е должен да ги информира сите купувачи за отказот
                                најмалку 5 дена пред почетокот на реализацијата на аранжманот и да им ги врати во целост
                                уплатените средства најдоцна во рок од 8 дена од денот на откажувањето.</p>
                            <br>
                            <h5>6. ПРАВО НА ПАТНИКОТ ЗА ОТКАЖУВАЊЕ НА ПАТУВАЊЕТО</h5>
                            <p>Патникот може во секој момент да се откаже од патувањето и тоа треба да го направи во
                                писмена форма. Датумот на писмениот отказ претставува основа за пресметка и наплата на
                                отказните трошоци (во однос на основната цена на аранжманот), според следната скала:
                                <br>• за отказ до 30 дена пред патувањето се наплатува 5%
                                <br>• за отказ од 29 до 22 дена пред
                                патувањето 10%
                                <br>• за отказ од 21 до 15 дена пред патувањето 20%
                                <br>• за отказ од 14 до 08 дена
                                пред патувањето 50%
                                <br>• за отказ од 07 до 01 дена пред патувањето 90%
                                <br>• ако патникот не се
                                појави или го откаже аранжманот на денот на неговата реализација, организаторот ќе го
                                наплати целокупниот износ на аранжманот односно 100%
                                <br>• Во случај на отказ на веќе
                                потврдена “резервација на упит” организаторот ќе наплати отказни трошоци во висина на
                                уплатената аконтација.
                                <br>• Доколку патникот го менува терминот на тргнување на истиот
                                аранжман најмалку 15 дена пред денот на претходно потврденото тргнување, доколку е можно
                                организаторот ќе изврши промена на резервацијата и ќе наплати само манипулативни трошоци
                                во износ од 10 Евра, по пријава-договор.
                                <br>• Доколку патникот се откаже од аранжманот пред
                                почетокот на патувањето, поради причини кои не можел да ги предвиди, избегне или
                                отстрани (болест, повреда или смрт во потесното семејство, елементарна непогода или
                                слично), а врз основа на важечка потврда од надлежните органи, во тој случај не ги плаќа
                                отказните трошоци по наведената скала туку само реалните реалните трошоци произлезени од
                                откажување на аранжманот, кои организаторот е обврзан да ги плати без право на
                                рефундација.
                                <br>• Доколку патникот сака дополнително да се осигура од гореспоменатите,
                                непредвидливи причини за отказ на аранжманот, настанати во периодот од потпишување на
                                договорот за патување до почетокот на патувањето, препорачуваме да се осигура од “ризик
                                на откажување на договорено туристичко патување” кај Осигурителната компанија. Оваа
                                осигурителна полиса може да се договори и уплати на продажното место, истовремено при
                                самата уплата на аранжманот.
                                <br>• Доколку патникот се откажува од аранжманот по почетокот на
                                патувањето (за време на патување или за време на престој во местото на престојување),
                                поради настани кои се резултат на “виша сила” (воени настани, терористички акти,
                                елементарни непогоди, сообраќајни незгоди или слично), кои ниту патникот ниту
                                организаторот можел да ги предвиди, избегне или отстрани, организаторот не сноси
                                одговорност ниту има обврска за возврат на средства за нереализирани услуги, освен
                                доколку крајниот давател на услугите прифати и изврши рефундација на истите.</p>
                            <br>
                            <h5>7. ОБВРСКИ И ПРАВА НА ОРГАНИЗАТОРОТ НА ПАТУВАЊЕТО</h5>
                            <p>Организаторот е обврзан да се грижи за реализација на услугите и за изборот на
                                извршителите на услугите со внимание на добар организатор, и да се грижи за интересите
                                на патниците согласно со професионалните принципи во туризмот. Организаторот е должен да
                                му ги овозможи на патникот сите услуги наведени за поединечниот аранжман во програмата,
                                и одговоара за евентуално неизвршување на услугите или дел од услугите. Организаторот
                                исклучува секаква одговорност во случај на промени и неизвршување на услуги предизвикани
                                од дејство на виша сила како и од доцнење на превозните средства, за кои превозникот не
                                одговара според позитивните прописи и меѓународните конвенции. Организаторот на
                                патувањето не прифаќа никаква одговорност доколку дипломатско-конзуларното
                                претставништво го одбие издавањето на влезна виза или доцни со издавањето на визата, или
                                ако емиграционото одделение на странска земја не одобри влез на одреден патник, ниту за
                                било кои други последици кои произлегуваат поради евентуалната неисправност или губење
                                на патните документи на патникот. Во овие случаи патникот сам ги плаќа дополнителните
                                трошоци.</p>
                            <br>
                            <h5>8. ОБВРСКИ И ПРАВА НА ПАТНИКОТ</h5>
                            <p>Патникот е обврзан да се грижи лично, неговите документи и предмети да ги исполнуваат
                                условите предвидени со граничните, царинските, здравствените и другите прописи на
                                својата земја како и земјата во која патува, да се придржува кон куќниот ред во
                                угостителските и хотелските објекти, како и во превозните средства, и да соработува со
                                претставникот на организаторот и извршителите на услугите во добра намера. Во случај на
                                непочитување на овие обврски, патникот одговара на организаторот за направената штета.
                                Патниците кои свесно го нарушуваат редот во објектите односно возилото можат да бидат
                                отстранети од аранжманот. Патникот е должен да поседува важечки пасоши, да се информира
                                кај организаторот дали за земјата во која патува (или за земјите низ кои се патува
                                транзит) е потребна виза, за таа навреме се обезбеди. Патникот е должен да се информира
                                за девизните и царинските прописи во својата земја и земјите во кои патува. Патникот е
                                должен да ги чува и лично одговара за сите свои документи, парични средства и личен
                                багаж за сето време на патувањето.</p>
                            <br>
                            <h5>9. ПРЕВОЗ</h5>
                            <p>Патникот е обврзан да се прилагоди кон превозот и неговата организација, во согласност со
                                пропишаните правила и прописи. При патување со авионски превоз, да ја провери својата
                                резервација за лет – во агенцијата, најдоцна 72 часа пред полетување. Да се јави на
                                аеродромот и местото “check-in” и предавање на багаж, во вообичаеното време – час и
                                половина пред полетување. Да се информира за правилата за патување со авионски превоз
                                (за истите може да се обрати во агенцијата). При патување со автобуски превоз, да
                                поседува важечка резервација на седиште и да се пријави кај претставникот на агенцијата
                                половина час пред тргнување на автобусот. Да го почитува редот во возилото, во взаемен
                                интерес со другите патници и персоналот, како и безбедноста во сообраќајот. Во случај на
                                непридржување на саатниците на тргнување или на попатните застанувања и одмори, како и
                                поради евентуално задржување на граничните премини поради неисправни патни документи или
                                царински прекршок, возилото не е обврзано да го чека патник повеќе од вообичаеното
                                време.</p>
                            <br>
                            <h5>10. БАГАЖ</h5>
                            <p>Патникот има право на бесплатен превоз на багаж, до 15кг на чартер летовите и 20кг на
                                редовните авионски линии. Кај автобускиот чартер превоз, дозволен е бесплатен багаж од
                                една патна торба (до 20кг) по патник. За секој килограм багаж, односно патна торба
                                повеќе од дозволеното, се плаќа во зависност од дестинацијата на патување. Деца до 2
                                години на авионскиот превоз и деца кои не плаќаат билет во автобусот, немаат право на
                                бесплатен багаж. Како багаж, не се дозволува внесување на трговска стока, храна,
                                пијалоци, лекови наркотици, хемиски средства, оружје, животни, растенија, амбалажи и
                                слични предмети. При внесување и изнесување на багажот од возилото, патникот со лично
                                присуство одговара за истиот. За време на реализација на аранжманот за багажот се грижи
                                самиот патник. Поради тоа препорачуваме пред патувањето да се направи полиса за Патничко
                                осигурување со осигурување на багаж, преку осигурителна компанија, која може да се
                                уплати во агенцијата. Организаторот не одговара за уништениот или изгубениот багаж, како
                                и за изгубениот багаж или драгоцености за време на престојот во хотелот (Ви
                                препорачуваме наем на сеф на хотелската рецепција).</p>
                            <br>
                            <h5>11. ЗДРАВСТВЕНИ ПРОПИСИ И ЗАШТИТА</h5>
                            <p>Патникот е должен да се информира кај надлежната здравствена институција и да ги почитува
                                здравствените прописи за патување во одредена земја (потреба од вакцина или здравствен
                                документ). Во случај на болест или незгода во текот на користењето на аранжманот,
                                трошоците за лечење или евентуални лекарски интервенции ги плаќа патникот. Поради тоа Ви
                                препорачуваме, пред патувањето да се направи полиса за Патничко осигурување преку
                                Осигурителна компанија, која може да се уплати во агенција.</p>
                            <br>
                            <h5>12. СМЕСТУВАЊЕ ВО СОБИ И АПАРТМАНИ</h5>
                            <p>Доколку патникот-закупувач не договорил соба-апартман со посебни карактеристики, ќе
                                прифати било која официјално регистрирана соба-апартман за сместување во договорениот
                                објект, опишана во каталогот и ценовникот. Доколку е можно, организаторот ќе се обиде да
                                одговори на дополнителните барања на патникот (комфор, ориентација на собата, кат и
                                слично) но, не може да гарантира исполнување на таквото барање. Вообичаеното сместување
                                во собите е од 14:00 часот, а напуштањето на собите е до 10:00 часот (доколку во куќниот
                                ред не е поинаку назначено).</p>
                            <br>
                            <h5>13. РЕШАВАЊЕ НА ПРИГОВОРИ</h5>
                            <p>Во случај на непотполно или неквалитетно извршување на услугите, патникот има право на
                                соодветно обештетување, исклучиво доколку приложи писмен приговор до организаторот.
                                Секој патник-носител (потписник) на договорот има право на приговор врз основа на
                                неизвршена договорена услуга. Организаторот нема да прима во процедура групни приговори
                                кои ги поднесуваат повеќе носители на договори врз основа на еден приговор. Постапка за
                                поднесување приговор:
                                <br>• Веднаш на самото место патникот ја рекламира неадекватната
                                услуга кај претставникот на организаторот, а доколку истиот го нема, кај извршителот на
                                услугите. Патникот е должен да соработува со претставникот и со извршителот на услугите
                                во добра намера за да се отстранат причините за приговорот. Доколку патникот на самото
                                место не го прифати понуденото решение за рекламација кое одговара на уплатената услуга,
                                организаторот нема да ја уважи дополнителната рекламација на патникот и нема да одговори
                                на истата.
                                <br>• Ако причината за рекламацијата не биде отстранета, патникот за тоа
                                составува со претставникот писмена потврда (записник).
                                <br>• Најдоцна 8 дена по завршувањето
                                на аранжманот, патникот поднесува писмен приговор во продажното место каде што го
                                уплатил аранжманот, и ја приложува писмената потврда (записникот) потпишана од
                                претставникот како и евентуалните сметки за дополнителни трошоци. Организаторот ќе ги
                                прими во процедура само потполно документираните приговори поднесени во наведениот рок
                                од 8 дена.
                                <br>• Организаторот е должен да донесе писмено решение во рок од 14 дена од
                                приемот на приговорот во продажното место. Организаторот може да го одложи рокот на
                                решението на приговорот заради комплетирање на информациите и проверка на наведените
                                рекламации кај извршителот на услугите. Организаторот ќе ги решава само оние рекламации
                                за кои во местото на одмор не можеле да бидат одтстранети причините кои ги предизвикале.
                                <br>• Додека организаторот не донесе решение по приговорот, патникот се откажува од
                                посредување на било кое друго лице, судска постапка или давање информации во јавните
                                медиуми.
                                <br>• Највисока надокната по приговорот може да постигне сума до износот на
                                рекламираниот дел од услугите, но таа не може да ги вклучува веќе искористените услуги
                                како и севкупниот износ на аранжманот. Со ова се исклучува правото на купувачот за
                                наплата на “идеална штета”. Нарушување на постапката за решавање на приговори: Во
                                контекст на точка 13. и пропишаната постапка за поднесување и решавање на приговор,
                                евентуалното непридржување на купувачот-патникот кон истата, или пак нарушување на
                                отпочнатата постапка со било каква активност спомената или не, во петтата ставка од
                                истата дава причина за неприфаќање на истите приговори, прекинување на отпочнатата
                                постапка и воедно поднесување на тужба пред надлежните органи од страна на
                                организаторот, за наплата на претрпената штета и нарушениот углед во јавноста.</p>
                            <br>
                            <h5>14. НАДЛЕЖНОСТ НА СУДОТ</h5>
                            <p>Во согласност со точка 13. од овие услови, купувачот на услугите од одредена програма има
                                право на рекламација кај организаторот на патувањето. Доколку купувачот не е задоволен
                                со решението на организаторот, има право да побара дополнителна арбитража и мислење од
                                страна на судот на честа на СКТМ или од страна на надлежниот Суд во Скопје.</p>
                            <p>&nbsp;</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class=" col-md-12 map">
        <div class="row">

            <style>
                #map {
                    height: 400px;
                    width: 100%;
                }
            </style>

            <div id="map"></div>
        @section('scripts')
            <!-- Google Maps -->
                <script type="text/javascript"
                        src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyA75bnzyJ_5j2Ger9Erjo1Q-0XucnZbst4"></script>
                <script>

                    $(document).ready(function () {
// Google Maps

                        map = new google.maps.Map(document.getElementById('map'), {
                            center: {lat: {{ $product->lat }}, lng: {{ $product->lng }} },
                            zoom: 18,
                            draggable: false
                        });

                        var marker = new google.maps.Marker({
                            position: {lat: {{ $product->lat }}, lng: {{ $product->lng }} },
                            map: map,
                        });


                    });
                </script>
            @endsection

        </div>
    </div>

    <!-- PRICE LIST MODAL BOX -->
    <!-- The Modal -->
    <div class="modal fade" id="price-list-content">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Ценовник</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    {!!  $product->price !!}
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Затвори</button>
                </div>

            </div>
        </div>
    </div>
    <!-- PRICE LIST MODAL BOX END -->


    <!-- Single content End -->


    <!-- Related offers -->
    <div id="promo-offers" class="container my-4 py-4">
        <div class="row">
            <div class="col-md-12">
                <h2 class="my-3 section-title">Слични понуди</h2>
            </div>
            @foreach($product1 as $product1)
                <div class="col-md-4">
                    <div class="promo-offer">
                        <div class="single-offer">
                            <img src="/assets/img/products/medium/{{ $product1->image }}" class="img-fluid"
                                 alt="{{ $product1->title }}"/>
                            <p>{{$product1->cat->name}}</p>
                            <h3 class="entry-title"><a href="/product/{{$product1->slug }}">{{ $product1->title }}</a>
                            </h3>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <!-- Related offers end -->

@endsection

