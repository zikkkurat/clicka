<div id="sidebar" class="d-flex flex-column">
    <div class="circular--portrait mx-auto">
        <img src="/img/NationNature.png" width="100" alt="" />
    </div>
    <div class="small text-uppercase">Nation<br />nature</div>

    <ul class="menu nav nav-pills nav-flush flex-column my-auto text-center">
        <li><a <?=$page=='profile' ?'class="active"':''?>   href="?"><img src="/img/sidebar/s1.svg" alt=""></a></li>
        <li><a <?=$page=='vac'?'class="active"':''?>   href="?page=vac"><img src="/img/sidebar/s2.svg" alt=""></a></li>
        <li><a <?=$page=='vac_filter'?'class="active"':''?>   href="?page=vac_filter"><img src="/img/sidebar/s3.svg" alt=""></a></li>
        <li><a <?=$page=='calendar'?'class="active"':''?>   href="?page=calendar"><img src="/img/sidebar/s4.svg" alt=""></a></li>
    </ul>

    <ul class="nav nav-pills nav-flush flex-column">
        <li><a href="#"><img src="/img/sidebar/settings.svg" alt=""></a></li>
        <li><a href="#"><img src="/img/sidebar/user-mini.svg" alt=""></a></li>
        <li><a href="#"><img src="/img/sidebar/warn-mini.svg" alt=""></a></li>
    </ul>
</div>