<!DOCTYPE html>
<html lang="en">




<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('') }}/public/concept/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{ url('') }}/public/concept/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('') }}/public/concept/assets/libs/css/style.css">
    <link rel="stylesheet" href="{{ url('') }}/public/concept/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="{{ url('') }}/public/concept/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="{{ url('') }}/public/concept/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet"
        href="{{ url('') }}/public/concept/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ url('') }}/public/concept/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="{{ url('') }}/public/concept/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Log Marketplace </title>


</head>

<body>


    <header class="d-flex flex-wrap align-items-center justify-content-center dark py-3 mb-4 border-bottom">


        <a href="/" class=" justify-content-center my-2 mr-3 me-3 text-dark">
            <strong class=" ">LOG MARKETPLACE</strong>
        </a>



        <ul class="nav col-12 col-md-auto mb-2 ml-3 justify-content-center  mb-md-0">
            <li><a href="/" class="nav-link badge badge-dark px-2 p-2 mr-2 link-secondary">
                    <ion-icon name="home-outline"></ion-icon> Home
                </a></li>
            @if($user != null)
            <li><a href="/fund-wallet" class=" nav-link badge badge-dark p-2 mr-2 px-2 link-dark">
                    <ion-icon name="wallet-outline"></ion-icon> Fund Wallet
                </a></li>
            @endif
            <li><a href="rules" class="badge badge-dark p-2 mr-2 nav-link px-2 mb-2 link-dark">
                    <ion-icon name="help-circle-outline"></ion-icon> Rules
                </a></li>
            @if($user != null)
            <li><a href="/fund-account" class="badge  justify-content-center badge-danger p-2  center-block">
                    <ion-icon name="wallet-outline"></ion-icon>
                    NGN{{ number_format(Auth::user()->wallet, 2) }}
                </a></li>
            @endif
        </ul>

        @if($user == null)


        <ul class="nav col-md-auto mb-2  justify-content-center">
            <li> <a href="/login" class="btn btn-outline-dark mr-2"> Login </a></li>
            <li> <a href="/register" class="btn btn-dark">Register</a></li>
        </ul>




        @else


        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li> <a href="/profile" class="btn btn-secondary mr-2">
                    <ion-icon name="person-circle-outline"></ion-icon> My Account
                </a>
            </li>
            <li> <a href="/log-out" class="btn btn-dark">
                    <ion-icon name="log-out-outline"></ion-icon> Log Out
                </a></li>
        </ul>








        @endif


    </header>


    <div class="container">

        <div class="card p-3">
            <div class="card-body p-3">

            </div>

            <h3>PRIVACY POLICY</h3>

 
            <h5 class="text-muted">EFFECTIVE DATE 20/10/2023</h5>
             
            Log marketplace is committed to protecting your privacy. We are committed to gaining and maintaining your trust by following a core set of Privacy Principles.
            <br><br>

            <strong class="test-muted">Intro</strong>

            <p>We go to great lengths to protect our user’s privacy. Here are some of the things we promise to do:<br><br>
                - We will never publicize your email, password or any personal contact information.<br>
                - We will never sell or offer your information to any third parties under any circumstances or laws.<br>
                - We may use cookies to store your login session in order to log you in automatically.<br>
                - We will never spam or use your email to send anything unrelated to Logmarketplace.</p><br><br>


                <strong>Retaining and Securing Your Information</strong><br>
                We take appropriate security measures designed to protect against unauthorized access to or unauthorized
                alteration, disclosure or destruction of data. <br>These include internal reviews of our data collection,
                storage, and processing practices, and introducing security measures, including physical security measures,
                to guard against unauthorized access to systems where we store personal data.<br><br>
                We restrict access to personal information to log marketplace employees, service providers and agents who
                need to know that information in order to operate, develop or improve our services. These individuals are
                bound by confidentiality obligations.<br><br>

                <strong>Third Party Sites</strong>
                While using the Site you may encounter links to third party websites. Log marketplace is not responsible for
                these sites and has no responsibility or liability whatsoever with regard to privacy matters or any other
                legal matter with respect to such sites. We encourage you to carefully read the privacy policies and the
                terms of use or service of such websites. Our terms of use and our privacy policy apply only to information
                collected by us in accordance with this policy.

            This Privacy Policy explains how our site uses and protects any information that you provide.<br> We take your privacy seriously, so we would like to tell you what information we receive from you and how do we use it. We may ask you to provide specific information by which you can be identified when using this Site and our services. The information you provide will only be used in accordance with this Privacy Policy.<br><br>

            <strong class="test-muted">What information do we collect?</strong><br>
            We collect your personal information that you voluntarily provide to us, the information which personally identifies you, such as your name, e-mail address, and other information that you provide about yourself.
            Personal information also includes navigation information and payment information, where such information can directly or indirectly identify the person. Navigation information is information about your computer and your visits to this Site, for example, your IP address, geographical location, browser type, duration of visit, and viewed pages. We collect and process the payment information of Users when they carry out transactions on the Site.

            <br><br>

            <strong class="test-muted">Access to third party information</strong>
            Log marketplace uses various third-party service providers, such as payment systems, CRM systems, email services, Enkpay and other necessary service providers, to help us provide you services. We may disclose some information about you to our third-party service providers with limited access to perform certain tasks and services on our behalf. We work only with trusted companies to ensure the security of your information and provide only the minimum amount of information necessary to provide our services.
            <br><br>

            <strong class="test-muted">Cookie and analytical data</strong>

            Cookies are very small text files that are stored on your computer when you visit some sites.
            We use cookies to identify your computer and tailor the User interface to your needs. You can disable any already stored cookies on your computer, but they may interfere with the proper operation of our Site and service.
            For a proper log marketplace Site to work, you need to identify yourself as a User of the system and ensure that your session is safe.
            These instructions are not strictly required, but they are necessary to ensure the best user experience, and to tell us which pages you find most interesting (anonymously). This Site will track the pages that you visit using Yandex.Metrica.

            <br><br>
            <strong class="test-muted">How do we use personal information?</strong>

            We use the information that is collected only in accordance with this Privacy Policy in order to provide you with the best services, as well as understanding your needs.
            We send e-mails to the Users of our Site. You can unsubscribe at any time from the newsletter and promotional letters using the “unsubscribe” link in the received letter.
            Sometimes we may contact you on behalf of other Users about a specific offer that may interest you. In this case, we will not transfer your personal information to third parties.
            We will never sell your personal information to third parties.
            We can use your personal information to improve your user experience by personalizing our Site, sending you personalized offers.

            <br><br>
            <strong class="test-muted">Information disclosure</strong>
            Log marketplace is committed to maintaining your trust, and we want you to understand when and with whom we can share information collected about you. We may share the information collected about you that was disclosed at the time of collection, as otherwise disclosed in this Privacy policy, as well as in the following circumstances:
            With your consent, Logs Marketplace may share your contact information with third-party advertising partners. You acknowledge this when you disclose personal information on the Site and allow it to be transferred to third parties who may contact you in various ways. Sometimes Logs marketplace may give you the opportunity to receive further communications from one of our advertising partners. If you decide to refuse by explicitly agreeing to receive messages from a third-party advertiser, your personal information will be governed by this third party’s own privacy policy.
            Transfer of rights. Logs marketplace  may share your information in connection with the transfer of rights, such as the sale of the Site, mergers, acquisitions, sale of assets, or in the event of bankruptcy.
            Legal requirements. Logs marketplace  may disclose information about Users, including contact information, to respond to requests, court orders, court decisions, and other enforcement measures, as well as to fulfill other legal obligations. There may be circumstances where legislation requires log marketplace to disclose information, or when disclosure is required for law enforcement purposes.
            Protection of our Site and Users. We may disclose information to protect the legitimate rights, interests, and safety of the Site; protect the security of Site Users and the public; and other cases referred to in our Policy.
            Finally, we may also share aggregated or anonymous information with third parties to help us develop content that we hope will be of interest to you, or to help these third parties develop their service offerings.
             
            <br><br>

            <strong class="test-muted">Data storage</strong>
            We retain your Personal Data as long as we have a reasonable commercial need to store such data in order to provide you with services or products.
            E-mail addresses and other personal data are securely stored with limited access. Login information is encrypted and stored in a highly secure environment.

            <br><br>
            <strong class="test-muted">Final provisions</strong>
            The Privacy policy is subject to change at any time without prior notice and is the publicly available information on our Site. Any changes will be published on the Site immediately after they are made.
            Log marketplace users agree with this <a herf="policy">Privacy Policy.</a><br>
            If you have any questions about this privacy policy or our handling of your personal information, please contact us.

        </div>

    </div>
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="https://t.me/logsmarkeplace" class="nav-link px-2 text-muted">Telegram</a></li>
                <li class="nav-item"><a href="faq" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="terms" class="nav-link px-2 text-muted">Terms & Condition</a></li>
                <li class="nav-item"><a href="policy" class="nav-link px-2 text-muted">Policy</a></li>
                <li class="nav-item"><a href="rules" class="nav-link px-2 text-muted">Rules</a></li>
                <script src="//code.tidio.co/ycuaokbggutscuhfj1r0d7fqovrh7we7.js" async></script>
            </ul>
            <p class="text-center text-muted">&copy; 2023 Log MarketPlace</p>
        </footer>
    </div>


    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>


</html>
