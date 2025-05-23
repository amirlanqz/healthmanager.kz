<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <title>healthmanager.kz</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <link rel="icon" href="{{ asset('assets/front/img/favicon.png') }}" />

    <!-- Favicon -->
    {{--    <link href="img/favicon.ico" rel="icon" />--}}

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        rel="stylesheet"
    />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
        rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/front/lib/animate/animate.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/front/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />
    <link
        href="{{ asset('assets/front/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}"
        rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/front/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet" />
</head>

<body>
<!-- Spinner Start -->
{{--<div--}}
{{--    id="spinner"--}}
{{--    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"--}}
{{-->--}}
{{--    <div--}}
{{--        class="spinner-grow text-primary"--}}
{{--        style="width: 3rem; height: 3rem"--}}
{{--        role="status"--}}
{{--    >--}}
{{--        <span class="sr-only">Loading...</span>--}}
{{--    </div>--}}
{{--</div>--}}

<nav
    class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn"
    data-wow-delay="0.1s"
>
    <a
        href="index.html"
        class="navbar-brand d-flex align-items-center px-4 px-lg-5"
    >
        <div class="logo">
            <a href="{{ route('home') }}">
                <svg
                    width="110"
                    height="59"
                    viewBox="0 0 110 59"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M5.46723 47.529H4.77795V49.7221H4.35498V45.0381H4.77795V47.1843H5.45156L7.40974 45.0381H7.94237L5.85887 47.341L8.08336 49.7221H7.55073L5.46723 47.529Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M11.2947 48.4062H8.99189L8.47493 49.7221H8.02063L9.93181 45.0381H10.3391L12.2503 49.7221H11.8117L11.2947 48.4062ZM9.13288 48.0772H11.1694L10.1511 45.5238L9.13288 48.0772Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M15.4774 46.2601C15.4774 45.9625 15.3677 45.7275 15.1327 45.5708C14.8977 45.4142 14.5844 45.3202 14.1458 45.3202C13.7855 45.3202 13.4722 45.4142 13.2372 45.5865C13.0022 45.7745 12.8769 45.9938 12.8769 46.2758H12.4539C12.4539 46.0251 12.5323 45.8058 12.6733 45.6021C12.8142 45.3985 13.0179 45.2575 13.2842 45.1478C13.5505 45.0382 13.8325 44.9755 14.1458 44.9755C14.6941 44.9755 15.1171 45.0852 15.4304 45.3202C15.7437 45.5395 15.9003 45.8685 15.9003 46.2758C15.9003 46.5107 15.822 46.7301 15.6497 46.918C15.4774 47.106 15.2581 47.247 14.9917 47.3253C15.6497 47.482 15.9787 47.858 15.9787 48.4533C15.9787 48.8606 15.8063 49.1739 15.4774 49.4245C15.1484 49.6595 14.7098 49.7848 14.1458 49.7848C13.8012 49.7848 13.5035 49.7222 13.2215 49.6125C12.9396 49.4872 12.7359 49.3305 12.5949 49.1269C12.4539 48.9232 12.3756 48.6882 12.3756 48.4219H12.7986C12.7986 48.7196 12.9239 48.9702 13.1745 49.1582C13.4252 49.3462 13.7542 49.4558 14.1301 49.4558C14.5688 49.4558 14.9134 49.3618 15.1641 49.1895C15.4147 49.0172 15.54 48.7666 15.54 48.4689C15.54 48.1556 15.4304 47.905 15.2111 47.7483C14.9917 47.5917 14.6471 47.5133 14.1928 47.5133H13.5505V47.1687H14.1771C14.6001 47.1687 14.9134 47.0904 15.1327 46.9337C15.3677 46.7927 15.4774 46.5577 15.4774 46.2601Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M19.3782 48.4062H17.091L16.5741 49.7221H16.1198L18.0309 45.0381H18.4382L20.3494 49.7221H19.9108L19.3782 48.4062ZM17.2163 48.0772H19.2528L18.2346 45.5238L17.2163 48.0772Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M22.3389 47.0277L23.7644 45.0539H24.2814L22.6052 47.3567L24.3284 49.7222H23.8114L22.3389 47.6857L20.8507 49.7222H20.3494L22.0726 47.3567L20.3964 45.0539H20.9133L22.3389 47.0277Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M28.3544 48.2653C28.2918 48.7509 28.1038 49.1425 27.7905 49.3932C27.4615 49.6595 27.0385 49.7848 26.5059 49.7848C26.1299 49.7848 25.801 49.6908 25.5033 49.5185C25.2213 49.3462 24.9864 49.0955 24.8297 48.7822C24.6731 48.4689 24.5947 48.0929 24.5947 47.6856V47.0747C24.5947 46.6517 24.6731 46.2914 24.8297 45.9624C24.9864 45.6335 25.2213 45.3985 25.5033 45.2262C25.7853 45.0538 26.1456 44.9598 26.5216 44.9598C27.0699 44.9598 27.4928 45.1008 27.8061 45.3671C28.1195 45.6335 28.3074 46.0094 28.3544 46.4951H27.9158C27.8061 45.6961 27.3362 45.3045 26.5216 45.3045C26.0673 45.3045 25.6913 45.4611 25.425 45.7744C25.1587 46.0878 25.0177 46.5264 25.0177 47.0903V47.67C25.0177 48.2026 25.143 48.6412 25.4093 48.9702C25.6756 49.2992 26.0359 49.4558 26.4902 49.4558C26.9445 49.4558 27.2735 49.3618 27.5085 49.1582C27.7278 48.9545 27.8688 48.6569 27.9315 48.2653H28.3544Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M32.4275 45.3829H30.6886V49.7222H30.2657V45.3829H28.5425V45.0539H32.4275V45.3829Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M35.3412 48.4062H33.0384L32.5214 49.7221H32.0671L33.9783 45.0381H34.3856L36.2968 49.7221H35.8582L35.3412 48.4062ZM33.1637 48.0772H35.2002L34.182 45.5238L33.1637 48.0772Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M40.4953 49.7221H40.0567V47.482H37.1586V49.7221H36.7356V45.0381H37.1586V47.1373H40.0567V45.0381H40.4953V49.7221Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M45.0695 48.2653C45.0069 48.7509 44.8189 49.1425 44.5056 49.3932C44.1766 49.6595 43.7536 49.7848 43.221 49.7848C42.845 49.7848 42.5161 49.6908 42.2184 49.5185C41.9364 49.3462 41.7015 49.0955 41.5448 48.7822C41.3881 48.4689 41.3098 48.0929 41.3098 47.6856V47.0747C41.3098 46.6517 41.3881 46.2914 41.5448 45.9624C41.7015 45.6335 41.9364 45.3985 42.2184 45.2262C42.5004 45.0538 42.8607 44.9598 43.2367 44.9598C43.785 44.9598 44.2079 45.1008 44.5212 45.3671C44.8345 45.6335 45.0225 46.0094 45.0695 46.4951H44.6309C44.5212 45.6961 44.0513 45.3045 43.2367 45.3045C42.7824 45.3045 42.4064 45.4611 42.1401 45.7744C41.8738 46.0878 41.7328 46.5264 41.7328 47.0903V47.67C41.7328 48.2026 41.8581 48.6412 42.1244 48.9702C42.3907 49.2992 42.751 49.4558 43.2053 49.4558C43.6596 49.4558 43.9886 49.3618 44.2236 49.1582C44.4429 48.9545 44.5839 48.6569 44.6466 48.2653H45.0695Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M46.9494 47.529H46.2601V49.7221H45.8372V45.0381H46.2601V47.1843H46.9337L48.8919 45.0381H49.4245L47.341 47.341L49.5655 49.7221H49.0486L46.9494 47.529Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M52.7926 48.4062H50.4898L49.9729 49.7221H49.5186L51.4297 45.0381H51.837L53.7482 49.7221H53.3096L52.7926 48.4062ZM50.6308 48.0772H52.6673L51.6491 45.5238L50.6308 48.0772Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M56.9124 49.7221V47.8109H55.4555L54.3433 49.7221H53.8733L55.0639 47.7013C54.7349 47.5916 54.4842 47.435 54.3119 47.2313C54.1396 47.012 54.0613 46.7613 54.0613 46.448C54.0613 46.0094 54.2179 45.6648 54.5156 45.4141C54.8132 45.1635 55.2362 45.0381 55.8001 45.0381H57.3354V49.7221H56.9124ZM54.4999 46.448C54.4999 46.7613 54.6096 47.012 54.8132 47.2C55.0169 47.388 55.3145 47.482 55.6748 47.482H56.8967V45.3828H55.7845C55.3772 45.3828 55.0482 45.4768 54.8289 45.6648C54.6096 45.8528 54.4999 46.1034 54.4999 46.448Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M62.4269 48.4062H60.1241L59.6071 49.7221H59.1528L61.064 45.0381H61.4713L63.3825 49.7221H62.9439L62.4269 48.4062ZM60.2494 48.0772H62.2859L61.2677 45.5238L60.2494 48.0772Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M67.3616 48.2653C67.2989 48.7509 67.1109 49.1425 66.7819 49.3932C66.453 49.6595 66.03 49.7848 65.4974 49.7848C65.1214 49.7848 64.7924 49.6908 64.4948 49.5185C64.2128 49.3462 63.9778 49.0955 63.8212 48.7822C63.6645 48.4689 63.5862 48.0929 63.5862 47.6856V47.0747C63.5862 46.6517 63.6645 46.2914 63.8212 45.9624C63.9778 45.6335 64.2128 45.3985 64.4948 45.2262C64.7768 45.0538 65.1371 44.9598 65.513 44.9598C66.0613 44.9598 66.4843 45.1008 66.7976 45.3671C67.1109 45.6335 67.2989 46.0094 67.3459 46.4951H66.9073C66.7976 45.6961 66.3276 45.3045 65.513 45.3045C65.0587 45.3045 64.6828 45.4611 64.4164 45.7744C64.1501 46.0878 64.0092 46.5264 64.0092 47.0903V47.67C64.0092 48.2026 64.1345 48.6412 64.4008 48.9702C64.6671 49.2992 65.0274 49.4558 65.4817 49.4558C65.936 49.4558 66.265 49.3618 66.5 49.1582C66.7193 48.9545 66.8603 48.6569 66.9229 48.2653H67.3616Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M71.685 48.2653C71.6223 48.7509 71.4344 49.1425 71.121 49.3932C70.8077 49.6438 70.3691 49.7848 69.8365 49.7848C69.4605 49.7848 69.1315 49.6908 68.8339 49.5185C68.5362 49.3462 68.3169 49.0955 68.1603 48.7822C68.0036 48.4689 67.9253 48.0929 67.9253 47.6856V47.0747C67.9253 46.6517 68.0036 46.2914 68.1603 45.9624C68.3169 45.6335 68.5519 45.3985 68.8339 45.2262C69.1159 45.0538 69.4762 44.9598 69.8521 44.9598C70.4004 44.9598 70.8234 45.1008 71.1367 45.3671C71.45 45.6335 71.638 46.0094 71.685 46.4951H71.2464C71.1367 45.6961 70.6667 45.3045 69.8521 45.3045C69.3978 45.3045 69.0219 45.4611 68.7556 45.7744C68.4892 46.0878 68.3483 46.5264 68.3483 47.0903V47.67C68.3483 48.2026 68.4736 48.6412 68.7399 48.9702C69.0062 49.2992 69.3665 49.4558 69.8208 49.4558C70.2751 49.4558 70.6041 49.3618 70.8391 49.1582C71.074 48.9545 71.1994 48.6569 71.262 48.2653H71.685Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M76.1654 47.6386C76.1654 48.0616 76.0871 48.4532 75.9304 48.7665C75.7738 49.0955 75.5388 49.3462 75.2412 49.5185C74.9435 49.6908 74.5989 49.7848 74.2072 49.7848C73.612 49.7848 73.142 49.5968 72.7817 49.2052C72.4214 48.8135 72.2334 48.2809 72.2334 47.6229V47.1373C72.2334 46.7144 72.3117 46.3384 72.484 46.0094C72.6407 45.6804 72.8757 45.4298 73.1733 45.2575C73.471 45.0851 73.8156 44.9911 74.2072 44.9911C74.5989 44.9911 74.9435 45.0851 75.2412 45.2575C75.5388 45.4298 75.7738 45.6804 75.9304 45.9937C76.0871 46.3071 76.1811 46.683 76.1811 47.0903V47.6386H76.1654ZM75.7425 47.1373C75.7425 46.5734 75.6015 46.1347 75.3352 45.8214C75.0532 45.5081 74.6772 45.3358 74.2072 45.3358C73.7373 45.3358 73.3613 45.4924 73.0793 45.8214C72.7974 46.1347 72.6564 46.589 72.6564 47.1687V47.6543C72.6564 48.2026 72.7974 48.6412 73.0793 48.9702C73.3613 49.2992 73.7373 49.4558 74.2072 49.4558C74.6929 49.4558 75.0688 49.2992 75.3352 48.9702C75.6015 48.6412 75.7425 48.2026 75.7425 47.6386V47.1373Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M76.9331 45.0539H77.3717V49.3932H80.2229V45.0539H80.6458V49.3932H81.1471L81.1158 50.8658H80.7241V49.7222H76.9331V45.0539Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M85.0479 45.0538H85.4709V49.7221H85.0479V45.7118L82.1654 49.7221H81.7268V45.0381H82.1654V49.0328L85.0479 45.0538Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M89.2775 48.4062H86.9747L86.4577 49.7221H86.0034L87.9146 45.0381H88.3219L90.2488 49.7221H89.8101L89.2775 48.4062ZM87.1 48.0772H89.1365L88.1183 45.5238L87.1 48.0772Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M90.6716 45.0539H91.1103V49.3932H93.977V45.0539H94.4V49.3932H94.9013L94.87 50.8658H94.4783V49.7222H90.6873V45.0539H90.6716Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M98.7864 45.0538H99.2094V49.7221H98.7864V45.7118L95.904 49.7221H95.4653V45.0381H95.904V49.0328L98.7864 45.0538Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M102.922 49.7221V47.8109H101.465L100.353 49.7221H99.8828L101.073 47.7013C100.744 47.5916 100.494 47.435 100.321 47.2313C100.149 47.012 100.071 46.7613 100.071 46.448C100.071 46.0094 100.227 45.6648 100.525 45.4141C100.823 45.1635 101.246 45.0381 101.81 45.0381H103.345V49.7221H102.922ZM100.509 46.448C100.509 46.7613 100.619 47.012 100.823 47.2C101.026 47.388 101.324 47.482 101.684 47.482H102.906V45.3828H101.794C101.387 45.3828 101.058 45.4768 100.838 45.6648C100.635 45.8528 100.509 46.1034 100.509 46.448Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M0.563957 52.2599L2.42815 56.3956L4.308 52.2599H4.87196V56.9282H4.44899V54.8917L4.48032 52.8082L2.60047 56.9282H2.27149L0.391636 52.8239L0.422969 54.8761V56.9282H0V52.2443H0.563957V52.2599Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M8.64734 54.6881H6.28185V56.5993H9.00764V56.9282H5.85889V52.2443H8.99198V52.5732H6.28185V54.3434H8.64734V54.6881Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M13.3627 56.9282H12.9241V54.6881H10.0416V56.9282H9.61865V52.2443H10.0416V54.3434H12.9397V52.2443H13.3784V56.9282H13.3627Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M17.1381 54.6881H14.7726V56.5993H17.4984V56.9282H14.3496V52.2443H17.4827V52.5732H14.7726V54.3434H17.1381V54.6881Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M21.8377 56.5993H22.3703V58.0718H21.9474V56.9282H18.125V58.0562H17.702V56.5836H18.0467C18.2973 56.3329 18.5166 55.9726 18.6733 55.5027C18.8299 55.0327 18.9239 54.5001 18.9553 53.9361L19.0493 52.2443H21.8534V56.5993H21.8377ZM18.5323 56.5993H21.3991V52.5889H19.4409L19.3782 53.9361C19.3469 54.5001 19.2529 55.0014 19.1119 55.4714C18.9709 55.9413 18.7829 56.3173 18.5323 56.5993Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M26.224 54.7038H25.6601V56.9283H25.2371V54.7038H24.6575L22.9343 56.9283H22.386L24.2658 54.5158L22.5113 52.2599H23.0283L24.6261 54.3748H25.2371V52.2599H25.6601V54.3748H26.2554L27.8532 52.2599H28.3702L26.6157 54.5158L28.4955 56.9439H27.9629L26.224 54.7038Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M31.7069 54.6881H29.3414V56.5993H32.0672V56.9282H28.9185V52.2443H32.0515V52.5732H29.3414V54.3434H31.7069V54.6881Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M33.0856 55.0327V56.9282H32.6626V52.2443H34.3858C34.9184 52.2443 35.3257 52.3696 35.639 52.6202C35.9367 52.8709 36.0933 53.2155 36.0933 53.6385C36.0933 54.0771 35.9523 54.4218 35.6547 54.6567C35.3571 54.8917 34.9341 55.0171 34.3858 55.0171H33.0856V55.0327ZM33.0856 54.6881H34.3858C34.7931 54.6881 35.1221 54.5941 35.3414 54.4218C35.5607 54.2338 35.6704 53.9831 35.6704 53.6542C35.6704 53.3252 35.5607 53.0745 35.3414 52.8866C35.1221 52.6986 34.8244 52.5889 34.4171 52.5889H33.0856V54.6881Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M40.4796 54.8448C40.4796 55.2678 40.4013 55.6594 40.2447 55.9727C40.088 56.3017 39.853 56.5523 39.5554 56.7246C39.2577 56.897 38.9131 56.991 38.5215 56.991C37.9262 56.991 37.4562 56.803 37.0959 56.4113C36.7356 56.0197 36.5476 55.4871 36.5476 54.8291V54.3435C36.5476 53.9205 36.6259 53.5446 36.7983 53.2156C36.9549 52.8866 37.1899 52.636 37.4875 52.4636C37.7852 52.2913 38.1298 52.1973 38.5215 52.1973C38.9131 52.1973 39.2577 52.2913 39.5554 52.4636C39.853 52.636 40.088 52.8866 40.2447 53.1999C40.4013 53.5132 40.4953 53.8892 40.4953 54.2965V54.8448H40.4796ZM40.0567 54.3435C40.0567 53.7795 39.9157 53.3409 39.6494 53.0276C39.3674 52.7143 38.9914 52.542 38.5215 52.542C38.0515 52.542 37.6755 52.6986 37.3935 53.0276C37.1116 53.3409 36.9706 53.7952 36.9706 54.3748V54.8605C36.9706 55.4087 37.1116 55.8474 37.3935 56.1764C37.6755 56.5053 38.0515 56.662 38.5215 56.662C39.0071 56.662 39.3831 56.5053 39.6494 56.1764C39.9157 55.863 40.0567 55.4087 40.0567 54.8448V54.3435Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M41.2629 56.9282V52.2443H42.7512C43.2994 52.2443 43.7068 52.3539 43.9887 52.5576C44.2707 52.7612 44.4117 53.0745 44.4117 53.4662C44.4117 53.7012 44.3334 53.9205 44.1924 54.0928C44.0514 54.2651 43.8477 54.4061 43.6128 54.4844C43.9104 54.5471 44.1454 54.6724 44.3177 54.8917C44.49 55.0954 44.584 55.346 44.584 55.6123C44.584 56.0196 44.443 56.3486 44.1454 56.5836C43.8477 56.8186 43.4561 56.9282 42.9391 56.9282H41.2629ZM41.6859 54.3591H42.8608C43.2211 54.3591 43.4874 54.2808 43.6911 54.1241C43.8947 53.9675 43.9887 53.7638 43.9887 53.4662C43.9887 53.1685 43.8947 52.9492 43.6911 52.8082C43.4874 52.6672 43.1741 52.5889 42.7668 52.5889H41.6859V54.3591ZM41.6859 54.6881V56.5993H42.9705C43.3308 56.5993 43.6284 56.5209 43.8477 56.3486C44.0671 56.1763 44.1767 55.9413 44.1767 55.628C44.1767 55.346 44.0671 55.111 43.8634 54.9387C43.6598 54.7664 43.3778 54.6881 43.0175 54.6881H41.6859Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M49.5185 53.4662C49.5185 53.1686 49.4088 52.9336 49.1739 52.7769C48.9389 52.6203 48.6256 52.5263 48.1869 52.5263C47.8266 52.5263 47.5133 52.6203 47.2783 52.7926C47.0434 52.9806 46.918 53.1999 46.918 53.4819H46.4951C46.4951 53.2312 46.5734 53.0119 46.7144 52.8083C46.8554 52.6046 47.059 52.4636 47.3253 52.354C47.5917 52.2443 47.8736 52.1816 48.1869 52.1816C48.7352 52.1816 49.1582 52.2913 49.4715 52.5263C49.7848 52.7456 49.9415 53.0746 49.9415 53.4819C49.9415 53.7169 49.8631 53.9362 49.6908 54.1242C49.5185 54.3121 49.2992 54.4531 49.0329 54.5315C49.6908 54.6881 50.0198 55.0641 50.0198 55.6594C50.0198 56.0667 49.8475 56.38 49.5185 56.6306C49.1895 56.8656 48.7509 56.9909 48.1869 56.9909C47.8423 56.9909 47.5447 56.9283 47.2627 56.8186C46.9807 56.6933 46.7771 56.5366 46.6361 56.333C46.4951 56.1293 46.4167 55.8944 46.4167 55.628H46.8397C46.8397 55.9257 46.965 56.1763 47.2157 56.3643C47.4663 56.5523 47.7953 56.662 48.1713 56.662C48.6099 56.662 48.9546 56.568 49.2052 56.3956C49.4558 56.2233 49.5812 55.9727 49.5812 55.675C49.5812 55.3617 49.4715 55.1111 49.2522 54.9544C49.0329 54.7978 48.6882 54.7194 48.2339 54.7194H47.5917V54.3748H48.2183C48.6412 54.3748 48.9545 54.2965 49.1739 54.1398C49.4088 53.9988 49.5185 53.7639 49.5185 53.4662Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M54.4374 56.5993H54.9701V58.0718H54.5471V56.9282H50.7247V58.0562H50.3018V56.5836H50.6464C50.897 56.3329 51.1164 55.9726 51.273 55.5027C51.4297 55.0327 51.5237 54.5001 51.555 53.9361L51.649 52.2443H54.4531V56.5993H54.4374ZM51.132 56.5993H53.9988V52.5889H52.0406L51.978 53.9361C51.9466 54.5001 51.8526 55.0014 51.7116 55.4714C51.5707 55.9413 51.367 56.3173 51.132 56.5993Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M55.9728 55.0327V56.9282H55.5498V52.2443H57.273C57.8056 52.2443 58.2129 52.3696 58.5262 52.6202C58.8396 52.8709 58.9805 53.2155 58.9805 53.6385C58.9805 54.0771 58.8395 54.4218 58.5419 54.6567C58.2443 54.8917 57.8213 55.0171 57.273 55.0171H55.9728V55.0327ZM55.9728 54.6881H57.273C57.6803 54.6881 58.0093 54.5941 58.2286 54.4218C58.4479 54.2338 58.5576 53.9831 58.5576 53.6542C58.5576 53.3252 58.4479 53.0745 58.2286 52.8866C58.0093 52.6986 57.7116 52.5889 57.3043 52.5889H55.9728V54.6881Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M61.8161 55.6123H59.5133L58.9963 56.9282H58.542L60.4532 52.2443H60.8605L62.7717 56.9282H62.333L61.8161 55.6123ZM59.6542 55.2834H61.6908L60.6725 52.7299L59.6542 55.2834Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M63.2258 56.9282V52.2443H64.714C65.2623 52.2443 65.6696 52.3539 65.9516 52.5576C66.2336 52.7612 66.3746 53.0745 66.3746 53.4662C66.3746 53.7012 66.2963 53.9205 66.1553 54.0928C66.0143 54.2651 65.8106 54.4061 65.5756 54.4844C65.8733 54.5471 66.1083 54.6724 66.2806 54.8917C66.4529 55.0954 66.5469 55.346 66.5469 55.6123C66.5469 56.0196 66.4059 56.3486 66.1083 56.5836C65.8263 56.8186 65.419 56.9282 64.902 56.9282H63.2258ZM63.6645 54.3591H64.8394C65.1997 54.3591 65.466 54.2808 65.6696 54.1241C65.8733 53.9675 65.9673 53.7638 65.9673 53.4662C65.9673 53.1685 65.8733 52.9492 65.6696 52.8082C65.466 52.6672 65.1527 52.5889 64.7454 52.5889H63.6801V54.3591H63.6645ZM63.6645 54.6881V56.5993H64.949C65.3093 56.5993 65.607 56.5209 65.8263 56.3486C66.0456 56.1763 66.1553 55.9413 66.1553 55.628C66.1553 55.346 66.0456 55.111 65.842 54.9387C65.6383 54.7664 65.3563 54.6881 64.996 54.6881H63.6645Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M71.027 54.8448C71.027 55.2678 70.9487 55.6594 70.792 55.9727C70.6354 56.3017 70.4004 56.5523 70.1027 56.7246C69.8051 56.897 69.4605 56.991 69.0688 56.991C68.4735 56.991 68.0036 56.803 67.6433 56.4113C67.283 56.0197 67.095 55.4871 67.095 54.8291V54.3435C67.095 53.9205 67.1733 53.5446 67.3456 53.2156C67.5023 52.8866 67.7373 52.636 68.0349 52.4636C68.3325 52.2913 68.6772 52.1973 69.0688 52.1973C69.4605 52.1973 69.8051 52.2913 70.1027 52.4636C70.4004 52.636 70.6354 52.8866 70.792 53.1999C70.9487 53.5132 71.0427 53.8892 71.0427 54.2965V54.8448H71.027ZM70.604 54.3435C70.604 53.7795 70.463 53.3409 70.1967 53.0276C69.9148 52.7143 69.5388 52.542 69.0688 52.542C68.5989 52.542 68.2229 52.6986 67.9409 53.0276C67.6589 53.3409 67.5179 53.7952 67.5179 54.3748V54.8605C67.5179 55.4087 67.6589 55.8474 67.9409 56.1764C68.2229 56.5053 68.5989 56.662 69.0688 56.662C69.5544 56.662 69.9304 56.5053 70.1967 56.1764C70.463 55.8474 70.604 55.4087 70.604 54.8448V54.3435Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M75.5546 54.8448C75.5546 55.2678 75.4763 55.6594 75.3196 55.9727C75.163 56.286 74.928 56.5523 74.6303 56.7246C74.3327 56.897 73.988 56.991 73.5964 56.991C73.0011 56.991 72.5312 56.803 72.1708 56.4113C71.8105 56.0197 71.6226 55.4871 71.6226 54.8291V54.3435C71.6226 53.9205 71.7009 53.5446 71.8732 53.2156C72.0299 52.8866 72.2648 52.636 72.5625 52.4636C72.8601 52.2913 73.2048 52.1973 73.5964 52.1973C73.988 52.1973 74.3327 52.2913 74.6303 52.4636C74.928 52.636 75.163 52.8866 75.3196 53.1999C75.4763 53.5132 75.5703 53.8892 75.5703 54.2965V54.8448H75.5546ZM75.1316 54.3435C75.1316 53.7795 74.9906 53.3409 74.7243 53.0276C74.4423 52.7143 74.0664 52.542 73.5964 52.542C73.1264 52.542 72.7505 52.6986 72.4685 53.0276C72.1865 53.3566 72.0455 53.7952 72.0455 54.3748V54.8605C72.0455 55.4087 72.1865 55.8474 72.4685 56.1764C72.7505 56.5053 73.1264 56.662 73.5964 56.662C74.082 56.662 74.458 56.5053 74.7243 56.1764C74.9906 55.863 75.1316 55.4087 75.1316 54.8448V54.3435Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M77.7944 54.2338L79.22 52.2599H79.737L78.0608 54.5628L79.784 56.9283H79.267L77.7944 54.8917L76.3062 56.9283H75.8049L77.5281 54.5628L75.8519 52.2599H76.3689L77.7944 54.2338Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M80.7396 55.0327V56.9282H80.3167V52.2443H82.0399C82.5725 52.2443 82.9798 52.3696 83.2931 52.6202C83.6064 52.8709 83.7474 53.2155 83.7474 53.6385C83.7474 54.0771 83.6064 54.4218 83.3088 54.6567C83.0111 54.8917 82.5881 55.0171 82.0399 55.0171H80.7396V55.0327ZM80.7396 54.6881H82.0399C82.4472 54.6881 82.7761 54.5941 82.9954 54.4218C83.2148 54.2338 83.3244 53.9831 83.3244 53.6542C83.3244 53.3252 83.2148 53.0745 82.9954 52.8866C82.7761 52.6986 82.4785 52.5889 82.0712 52.5889H80.7396V54.6881Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M86.5829 55.6123H84.2801L83.7631 56.9282H83.3088L85.22 52.2443H85.6273L87.5385 56.9282H87.1155L86.5829 55.6123ZM84.4211 55.2834H86.4576L85.4393 52.7299L84.4211 55.2834Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M91.7526 56.9282H91.314V54.6881H88.4159V56.9282H87.9929V52.2443H88.4159V54.3434H91.314V52.2443H91.7526V56.9282Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M95.528 54.6881H93.1625V56.5993H95.8883V56.9282H92.7395V52.2443H95.8726V52.5732H93.1625V54.3434H95.528V54.6881Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M100.243 56.9282H99.8047V54.6881H96.9066V56.9282H96.4836V52.2443H96.9066V54.3434H99.8047V52.2443H100.243V56.9282Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M104.551 52.2599H104.974V56.9282H104.551V52.9179L101.669 56.9282H101.23V52.2443H101.669V56.239L104.551 52.2599Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M108.687 56.9282V55.0171H107.23L106.118 56.9282H105.648L106.839 54.9074C106.51 54.7977 106.259 54.6411 106.087 54.4374C105.914 54.2181 105.836 53.9675 105.836 53.6542C105.836 53.2155 105.993 52.8709 106.29 52.6202C106.588 52.3696 107.011 52.2443 107.575 52.2443H109.11V56.9282H108.687ZM106.275 53.6542C106.275 53.9675 106.384 54.2181 106.588 54.4061C106.792 54.5941 107.089 54.6881 107.449 54.6881H108.671V52.5889H107.559C107.152 52.5889 106.823 52.6829 106.604 52.8709C106.384 53.0589 106.275 53.3095 106.275 53.6542Z"
                        fill="#2A3275"
                    ></path>
                    <path
                        d="M18.5949 13.1747L32.8348 32.8035H25.5974L14.2713 17.1537L5.96858 24.7201V32.8191H0.125366V0H5.96858V16.7934L10.7779 12.3914L15.1329 8.41235L24.2972 0.031328H32.9758L18.5949 13.1747Z"
                        fill="#263470"
                    ></path>
                    <path
                        d="M108.609 26.9916V32.8348H83.2463L83.215 32.8975H75.8209L75.8523 32.8348L80.3796 26.9916L88.4473 16.5271L92.16 11.7491L96.6403 5.93721H75.7739V0.0626635H101.168L101.183 0.0469971H108.546V0.0626635L104.003 5.93721L95.8414 16.5114L92.16 21.2894L87.7737 26.9759H108.609V26.9916Z"
                        fill="#263470"
                    ></path>
                    <path
                        d="M68.1293 27.0072L59.3566 9.8222L49.362 9.8692L40.6364 27.0072L37.6443 32.8818H44.2238L47.2159 27.0072L54.375 12.9396L61.5341 27.0072L64.5419 32.8818H71.1057L68.1293 27.0072Z"
                        fill="#263470"
                    ></path>
                    <path
                        d="M52.9181 5.70221L54.375 9.10161L56.3175 5.70221L59.1686 9.43058L54.375 0.031311L49.55 9.50891L52.9181 5.70221Z"
                        fill="#263470"
                    ></path>
                    <path
                        d="M0.125366 36.3595L21.2424 36.5475C21.2424 36.5475 26.4903 33.712 28.5268 33.618C31.237 33.4927 37.1115 36.4848 37.1115 36.4848L44.6779 36.4378L45.0539 36.7511L54.3748 18.4225L64.2127 37.7067C64.2127 37.7067 64.6984 37.4247 65.1683 37.2681C65.6383 37.1114 72.5468 37.2368 74.0506 36.8765C76.2125 36.3595 80.3012 30.109 81.9617 30.1873C83.7319 30.2656 86.536 34.9026 87.2723 35.6389C88.0086 36.3752 88.5412 36.7668 89.6691 36.8295C90.9693 36.8921 93.1625 36.7981 94.0084 36.7981C95.058 36.7981 97.6115 36.6571 97.6115 36.6571L108.64 36.6101V38.3177H97.2199C97.2199 38.3177 95.4183 38.3333 94.1808 38.3647C93.3505 38.3803 91.22 38.396 89.4968 38.49C88.6822 38.537 87.3193 37.6911 86.4264 36.7041C85.5334 35.7172 82.98 32.3178 82.0087 32.3491C81.3194 32.3805 76.8861 37.8007 75.8365 38.3803C74.7869 38.96 67.5965 38.5996 66.9699 38.96C66.3432 39.3203 64.0874 43.9102 64.0874 43.9102L54.3748 24.6887L46.1035 40.7928L44.3646 38.4587L36.9235 38.5057C36.9235 38.5057 30.1874 35.4352 28.6365 35.4352C27.2736 35.4352 21.5244 38.5527 21.5244 38.5527L0.125366 38.2863V36.3595Z"
                        fill="#9A2727"
                    ></path>
                </svg>
            </a>
        </div>
    </a>
    <button
        type="button"
        class="navbar-toggler me-4"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link active">Главная</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Контакты</a>
            <a href="{{ route('posts.all') }}" class="nav-item nav-link">Блог</a>
            <a href="{{ route('all.managers') }}" class="nav-item nav-link">Менеджеры</a>
        </div>
        <a
            href="{{ route('membership.store') }}"
            class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block"
        >Вступить в сообщество<i class="fa fa-arrow-right ms-3"></i
            ></a>
    </div>
</nav>

@if(request()->routeIs('home'))

    <div class="container-fluid header bg-primary p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white mb-5">
                    Республиканское общественное объединение «Казахстанская ассоциация менеджеров здравоохранения»
                </h1>
                <div class="row g-4">
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">30</h2>
                            <p class="text-light mb-0">Докторов</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">45</h2>
                            <p class="text-light mb-0">Менеджеров</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">15</h2>
                            <p class="text-light mb-0">Учредителей</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ asset('assets/front/img/carousel-3.jpg')}}" alt="" />
                        <div class="owl-carousel-text"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif

@yield('content')

<div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn"
     data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Адрес</h5>
                <p class="mb-2">
                    <i class="fa fa-map-marker-alt me-3"></i>г. Астана, проспект Республики, 71/1, п.26
                </p>
                <p class="mb-2">
                    <i class="fa fa-phone-alt me-3"></i>+7 701 345 49 39
                </p>
                <p class="mb-2">
                    <i class="fa fa-envelope me-3"></i>info@healthmanager.kz
                </p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social rounded-circle" href="https://www.instagram.com/health_manager.kz/"
                    ><i class="fab fa-instagram"></i
                        ></a>
                    <a class="btn btn-outline-light btn-social rounded-circle" href="https://www.youtube.com/@kazhealthmanagersassociati4193/featured"
                    ><i class="fab fa-youtube"></i
                        ></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Быстрые ссылки</h5>
                <a class="btn btn-link" href="{{ route('home') }}">Главная</a>
                <a class="btn btn-link" href="{{ route('contact') }}">Контакты</a>
                <a class="btn btn-link" href="{{ route('posts.all') }}">Блог</a>
                <a class="btn btn-link" href="{{ route('all.managers') }}">Менеджеры</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Напишите нам</h5>
                <p>Для консультации отправьте свой email</p>
                <div class="position-relative mx-auto" style="max-width: 400px">
                    <input
                        class="form-control border-0 w-100 py-3 ps-4 pe-5"
                        type="text"
                        placeholder="Ваш email"
                    />
                    <button
                        type="button"
                        class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
                    >
                        Отправить
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="index.html">healthmanager.kz</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Back to Top -->
<a
    href="#"
    class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i
    ></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/front/lib/wow/wow.min.js')}}"></script>
<script src="{{ asset('assets/front/lib/easing/easing.min.js')}}"></script>
<script src="{{ asset('assets/front/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{ asset('assets/front/lib/counterup/counterup.min.js')}}"></script>
<script src="{{ asset('assets/front/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/front/lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{ asset('assets/front/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{ asset('assets/front/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{ asset('assets/front/js/main.js')}}"></script>
</body>
</html>
