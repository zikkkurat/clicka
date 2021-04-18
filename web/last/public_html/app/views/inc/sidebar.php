<div id="sidebar" class="d-flex flex-column" style="position:fixed;left:0;top:0;bottom:0">
    <div class="circular--portrait mx-auto">
        <img src="/img/NationNature.png" width="100" alt="" />
    </div>
    <div class="small text-uppercase">Nation<br />nature</div>

    <ul class="menu nav nav-pills nav-flush flex-column my-auto text-center">
        <li><a <?=$page=='index' ?'class="active"':''?>   href="/"><img src="/img/sidebar/s1.svg" alt=""></a></li>
        <li><a <?=$page=='page2'?'class="active"':''?>   href="/vac"><img src="/img/sidebar/s2.svg" alt=""></a></li>
        <li><a <?=in_array($page,['page3','page5','page6'])?'class="active"':''?>   href="/vac_filter">
            <img src="/img/sidebar/s3.svg" alt=""></a>
            <biv class="sub">
                <a class="mt-auto" href="/map">Карта профессий</a>
                <a class="mb-auto" href="/atlas">Атлас профессии</a>
            </biv>
        </li>
        <li><a <?=$page=='page4'?'class="active"':''?>   href="/calendar"><img src="/img/sidebar/s4.svg" alt=""></a></li>
    </ul>

    <ul class="nav nav-pills nav-flush flex-column">
        <li><a href="#"><img src="/img/sidebar/settings.svg" alt=""></a></li>
        <li><a href="/user/logout"><img src="/img/sidebar/user-mini.svg" alt=""></a></li>
        <li><a href="#"><img src="/img/sidebar/warn-mini.svg" alt=""></a></li>
    </ul>
</div>