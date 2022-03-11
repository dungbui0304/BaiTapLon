<?php include('header.php') ?>
<div class="header-left">
    <label class="icon-bar" for="check">
        <i class="fa-solid fa-bars"></i>
    </label>

    <input type="checkbox" class="check-menu" id="check" hidden>
    <label for="check" class="menu-overlay"></label>

    <div for="check" class="menu">
        <label for="check" class="close-icon">
            <i class="fa-solid fa-xmark"></i>
        </label>


        <ul class="menu__list">
            <div class="menu-wrap">
                <i class="fa-solid fa-user"></i>
                <li class="menu__list-item">
                    <a href="" class="menu__list-link">Quản lý tài khoản</a>
                </li>
            </div>
            <div class="menu-wrap">
                <i class="fa-brands fa-blackberry"></i>
                <li class="menu__list-item">
                    <a href="" class="menu__list-link">Nhóm</a>
                </li>
            </div>
            <div class="menu-wrap">
                <i class="fa-solid fa-right-from-bracket"></i>
                <li class="menu__list-item">
                    <a href="" class="menu__list-link">Đăng xuất</a>
                </li>
            </div>
        </ul>
    </div>



    <div class="list-item">
        <a href="./transaction.php" class="list__item-link">
            <span>
                <svg data-v-0698e127="" data-v-e5c19db8="" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24"
                    aria-labelledby="test" version="1.1">
                    <defs data-v-0698e127=""></defs>
                    <g data-v-0698e127="" id="Icons/account/ic_account" stroke="none" stroke-width="1" fill="#BDBDBD"
                        fill-rule="evenodd">
                        <rect data-v-0698e127="" id="blue-background" fill-opacity="0" fill="#FFFFFF" x="0" y="0"
                            width="24" height="24"></rect>
                        <path data-v-e5c19db8=""
                            d="M21,18 L21,19 C21,20.105 20.105,21 19,21 L5,21 C3.895,21 3,20.105 3,19 L3,5 C3,3.895 3.895,3 5,3 L19,3 C20.105,3 21,3.895 21,5 L21,6 L12,6 C10.895,6 10,6.895 10,8 L10,16 C10,17.105 10.895,18 12,18 L21,18 L21,18 Z M12,16 L22,16 L22,8 L12,8 L12,16 L12,16 Z M16,13.5 C15.17,13.5 14.5,12.83 14.5,12 C14.5,11.17 15.17,10.5 16,10.5 C16.83,10.5 17.5,11.17 17.5,12 C17.5,12.83 16.83,13.5 16,13.5 L16,13.5 Z"
                            id="Shape" data-v-0698e127=""></path>
                    </g>
                </svg>
            </span>
            <span>Sổ giao dịch</span>
        </a>
    </div>
    <div class="list-item">
        <a href="./report.php" class="list__item-link">
            <span>
                <svg data-v-e5c19db8="" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>icon/24/collections</title>
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="icon/24/collections" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="baseline-collections_bookmark-24px">
                            <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                            <path d="M4,6 L2,6 L2,20 C2,21.1 2.9,22 4,22 L18,22 L18,20 L4,20 L4,6 Z" id="Shape"
                                fill="#BDBDBD" fill-rule="nonzero"></path>
                            <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                            <path
                                d="M20,2 L8,2 C6.9,2 6,2.9 6,4 L6,16 C6,17.1 6.9,18 8,18 L20,18 C21.1,18 22,17.1 22,16 L22,4 C22,2.9 21.1,2 20,2 Z M20,12 L17.5,10.5 L15,12 L15,4 L20,4 L20,12 Z"
                                id="Shape" fill="#BDBDBD" fill-rule="nonzero"></path>
                        </g>
                    </g>
                </svg>
            </span>
            <span>Báo cáo</span>
        </a>
    </div>
    <div class="list-item">
        <a href="#" class="list__item-link">
            <span>
                <svg data-v-0698e127="" data-v-e5c19db8="" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24"
                    aria-labelledby="test" version="1.1">
                    <defs data-v-0698e127=""></defs>
                    <g data-v-0698e127="" id="Icons/account/ic_account" stroke="none" stroke-width="1" fill="#BDBDBD"
                        fill-rule="evenodd">
                        <rect data-v-0698e127="" id="blue-background" fill-opacity="0" fill="#FFFFFF" x="0" y="0"
                            width="24" height="24"></rect>
                        <path data-v-e5c19db8=""
                            d="M2,10.0058587 C2,8.89805351 2.90017617,8 3.99201702,8 L11.007983,8 C12.1081436,8 13,8.89706013 13,10.0058587 L13,19.9941413 C13,21.1019465 12.0998238,22 11.007983,22 L3.99201702,22 C2.8918564,22 2,21.1029399 2,19.9941413 L2,10.0058587 Z M12.5482654,6.05054411 C12.6911723,6.01747057 12.8397304,6 12.992017,6 L20.007983,6 C21.1081436,6 22,6.89706013 22,8.00585866 L22,17.9941413 C22,19.1019465 21.0998238,20 20.007983,20 L15,20 L15,9.00012623 C15,7.52394198 13.9436521,6.30852264 12.5482654,6.05054411 Z M13,2 L20,2 L20,4 L13,4 L13,2 Z M4,4 L11,4 L11,6 L4,6 L4,4 Z"
                            id="Combined-Shape" data-v-0698e127=""></path>
                    </g>
                </svg>
            </span>
            <span>Ngân sách</span>
        </a>
    </div>
    <hr data-v-e5c19db8="" class="border-tabs">
    <div class="list-item">
        <a href="#" class="list__item-link">
            <span>
                <svg data-v-0698e127="" data-v-e5c19db8="" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24"
                    aria-labelledby="test" version="1.1">
                    <defs data-v-0698e127=""></defs>
                    <g data-v-0698e127="" id="Icons/account/ic_account" stroke="none" stroke-width="1" fill="#BDBDBD"
                        fill-rule="evenodd">
                        <rect data-v-0698e127="" id="blue-background" fill-opacity="0" fill="#FFFFFF" x="0" y="0"
                            width="24" height="24"></rect>
                        <path data-v-e5c19db8=""
                            d="M8,18 C6.895,18 6.01,18.895 6.01,20 C6.01,21.105 6.895,22 8,22 C9.105,22 10,21.105 10,20 C10,18.895 9.105,18 8,18 L8,18 Z M2,2 L2,4 L4,4 L7.595,11.585 L6.245,14.035 C6.09,14.325 6,14.65 6,15 C6,16.105 6.895,17 8,17 L20,17 L20,15 L8.425,15 C8.285,15 8.175,14.89 8.175,14.75 C8.175,14.705 8.185,14.665 8.205,14.63 L9.1,13 L16.55,13 C17.3,13 17.955,12.585 18.3,11.97 L21.875,5.48 C21.955,5.34 22,5.175 22,5 C22,4.445 21.55,4 21,4 L6.215,4 L5.265,2 L2,2 L2,2 Z M18,18 C16.895,18 16.01,18.895 16.01,20 C16.01,21.105 16.895,22 18,22 C19.105,22 20,21.105 20,20 C20,18.895 19.105,18 18,18 L18,18 Z"
                            data-v-0698e127=""></path>
                    </g>
                </svg>
            </span>
            <span>
                Cửa hàng
                <svg data-v-0698e127="" data-v-e5c19db8="" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24"
                    aria-labelledby="test" version="1.1">
                    <defs data-v-0698e127=""></defs>
                    <g data-v-0698e127="" id="Icons/account/ic_account" stroke="none" stroke-width="1" fill="#7C7C7C"
                        fill-rule="evenodd">
                        <rect data-v-0698e127="" id="blue-background" fill-opacity="0" fill="#FFFFFF" x="0" y="0"
                            width="24" height="24"></rect>
                        <path data-v-e5c19db8=""
                            d="M15,15 L8,15 L8,8 L11.5,8 L11.5,7 L8,7 C7.4475,7 7,7.4475 7,8 L7,15 C7,15.5525 7.4475,16 8,16 L15,16 C15.5525,16 16,15.5525 16,15 L16,11.5 L15,11.5 L15,15 L15,15 Z M12.5,7 L12.5,8 L14.2925,8 L9.3775,12.915 L10.085,13.6225 L15,8.7075 L15,10.5 L16,10.5 L16,7 L12.5,7 L12.5,7 Z"
                            data-v-0698e127=""></path>
                    </g>
                </svg>
            </span>
        </a>
    </div>
    <div class="list-item">
        <a href="#" class="list__item-link">
            <span>
                <svg data-v-0698e127="" data-v-e5c19db8="" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24"
                    aria-labelledby="test" version="1.1">
                    <defs data-v-0698e127=""></defs>
                    <g data-v-0698e127="" id="Icons/account/ic_account" stroke="none" stroke-width="1" fill="#BDBDBD"
                        fill-rule="evenodd">
                        <rect data-v-0698e127="" id="blue-background" fill-opacity="0" fill="#FFFFFF" x="0" y="0"
                            width="24" height="24"></rect>
                        <path data-v-e5c19db8=""
                            d="M12,22 C6.4771525,22 2,17.5228475 2,12 C2,6.4771525 6.4771525,2 12,2 C17.5228475,2 22,6.4771525 22,12 C22,17.5228475 17.5228475,22 12,22 Z M10.9369687,14.4494861 L12.8231233,14.4494861 C12.8286627,14.0340315 12.882671,13.6615127 12.9851499,13.3319187 C13.0876287,13.0023247 13.2911984,12.6990473 13.5958651,12.4220776 C13.8617561,12.1728048 14.1193341,11.9207661 14.3686069,11.6659539 C14.6178797,11.4111417 14.8394522,11.1452547 15.033331,10.8682849 C15.2272099,10.5913152 15.3823106,10.294962 15.4986379,9.97921643 C15.6149652,9.6634709 15.673128,9.3228032 15.673128,8.95720311 C15.673128,8.45311813 15.5941928,8.00166418 15.43632,7.60282772 C15.2784473,7.20399126 15.047181,6.86609321 14.7425142,6.58912344 C14.4378475,6.31215368 14.0667136,6.10165981 13.6291013,5.95763553 C13.1914891,5.81361125 12.692951,5.7416002 12.1334721,5.7416002 C11.6238477,5.7416002 11.1516213,5.80945677 10.7167788,5.94517196 C10.2819363,6.08088714 9.90249338,6.28307204 9.57843876,6.55173271 C9.25438413,6.82039339 8.99957577,7.15275212 8.81400602,7.54881889 C8.62843628,7.94488565 8.53288315,8.40326374 8.52734375,8.9239669 L10.5464433,8.9239669 C10.5464433,8.65807592 10.5921426,8.43096412 10.6835426,8.24262468 C10.7749426,8.05428524 10.8954227,7.8991845 11.0449863,7.7773178 C11.19455,7.6554511 11.363499,7.56682211 11.5518385,7.51142815 C11.7401779,7.4560342 11.9340538,7.42833764 12.1334721,7.42833764 C12.6320177,7.42833764 13.0100757,7.56543562 13.2676576,7.83963569 C13.5252395,8.11383576 13.6540285,8.51128141 13.6540285,9.03198457 C13.6540285,9.27017857 13.618023,9.48621175 13.5460108,9.68009058 C13.4739987,9.87396942 13.3756759,10.0567667 13.2510395,10.228488 C13.1264031,10.4002092 12.982381,10.5677734 12.8189688,10.7311856 C12.6555567,10.8945978 12.4796835,11.0677013 12.2913441,11.2505013 C12.0420713,11.4942347 11.8315774,11.7241162 11.6598561,11.9401526 C11.4881349,12.156189 11.3482673,12.3846856 11.240249,12.6256493 C11.1322308,12.866613 11.0546805,13.1325 11.0075956,13.4233183 C10.9605107,13.7141365 10.9369687,14.056189 10.9369687,14.4494861 Z M10.7957148,17.0336011 C10.7957148,17.3382679 10.8940376,17.5930762 11.0906861,17.7980338 C11.2873347,18.0029915 11.5684548,18.1054687 11.9340548,18.1054687 C12.2996549,18.1054687 12.5821599,18.0029915 12.7815781,17.7980338 C12.9809963,17.5930762 13.0807039,17.3382679 13.0807039,17.0336011 C13.0807039,16.878498 13.0543922,16.7344759 13.001768,16.6015304 C12.9491437,16.468585 12.874363,16.3522594 12.7774236,16.2525503 C12.6804841,16.1528412 12.5613889,16.0752908 12.4201344,16.0198968 C12.2788798,15.9645029 12.1168549,15.9368063 11.9340548,15.9368063 C11.7512548,15.9368063 11.5892299,15.9645029 11.4479753,16.0198968 C11.3067208,16.0752908 11.1876255,16.1528412 11.0906861,16.2525503 C10.9937467,16.3522594 10.9203508,16.468585 10.8704963,16.6015304 C10.8206417,16.7344759 10.7957148,16.878498 10.7957148,17.0336011 Z"
                            data-v-0698e127=""></path>
                    </g>
                </svg>
            </span>
            <span>
                Trợ giúp
                <svg data-v-0698e127="" data-v-e5c19db8="" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24"
                    aria-labelledby="test" version="1.1">
                    <defs data-v-0698e127=""></defs>
                    <g data-v-0698e127="" id="Icons/account/ic_account" stroke="none" stroke-width="1" fill="#7C7C7C"
                        fill-rule="evenodd">
                        <rect data-v-0698e127="" id="blue-background" fill-opacity="0" fill="#FFFFFF" x="0" y="0"
                            width="24" height="24"></rect>
                        <path data-v-e5c19db8=""
                            d="M15,15 L8,15 L8,8 L11.5,8 L11.5,7 L8,7 C7.4475,7 7,7.4475 7,8 L7,15 C7,15.5525 7.4475,16 8,16 L15,16 C15.5525,16 16,15.5525 16,15 L16,11.5 L15,11.5 L15,15 L15,15 Z M12.5,7 L12.5,8 L14.2925,8 L9.3775,12.915 L10.085,13.6225 L15,8.7075 L15,10.5 L16,10.5 L16,7 L12.5,7 L12.5,7 Z"
                            data-v-0698e127=""></path>
                    </g>
                </svg>
            </span>
        </a>
    </div>
</div>
<?php include('footer.php') ?>