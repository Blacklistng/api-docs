<?php
    // require('../api/db.php');
    // global $con;

    // $s = query("SELECT * FROM `settings` WHERE `id` = 1", false);
    // $api_cost = $s['api_search']; // this is actually for the boolean search  #30
    // $api_complete_cost = $s['api_search_complete']; // this is for the full data search #50
    // $del_cost = $s['delete_fee'];
    // $company_cost = $s['company_fee'];

    // $company_complete_fee = $s['company_complete_fee']; // this is for the full data company fee

    // $crc_company_fee = $s['company_crc_fee']; //  this is the company crc fee
    // $fc_company_b_fee = $s['company_firstcentral_b_fee']; //  this is the company first central basic fee
    // $fc_company_p_fee = $s['company_firstcentral_p_fee']; //  this is the company first central prime fee

    $api_cost = 30; // this is actually for the boolean search  #30
    $api_complete_cost = 50; // this is for the full data search #50
    $del_cost = 0;
    $company_cost = 10;

    $company_complete_fee = 20; // this is for the full data company fee

    $crc_company_fee = 60; //  this is the company crc fee
    $fc_company_b_fee = 60; //  this is the company first central basic fee
    $fc_company_p_fee = 60;

    ?>

<!doctype html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/png" sizes="56x56" href="logo_icon.svg">
    <title>API Response - Restructure - API Reference</title>

    <style>
    .highlight table td {
        padding: 5px;
    }

    .content aside.success {
        color: #fff;
    }

    .highlight table pre {
        margin: 0;
    }

    .highlight .gh {
        color: #999999;
    }

    .highlight .sr {
        color: #f6aa11;
    }

    .highlight .go {
        color: #888888;
    }

    .highlight .gp {
        color: #555555;
    }

    .highlight .gs {}

    .highlight .gu {
        color: #aaaaaa;
    }

    .highlight .nb {
        color: #f6aa11;
    }

    .highlight .cm {
        color: #75715e;
    }

    .highlight .cp {
        color: #75715e;
    }

    .highlight .c1 {
        color: #75715e;
    }

    .highlight .cs {
        color: #75715e;
    }

    .highlight .c,
    .highlight .cd {
        color: #75715e;
    }

    .highlight .err {
        color: #960050;
    }

    .highlight .gr {
        color: #960050;
    }

    .highlight .gt {
        color: #960050;
    }

    .highlight .gd {
        color: #49483e;
    }

    .highlight .gi {
        color: #49483e;
    }

    .highlight .ge {
        color: #49483e;
    }

    .highlight .kc {
        color: #66d9ef;
    }

    .highlight .kd {
        color: #66d9ef;
    }

    .highlight .kr {
        color: #66d9ef;
    }

    .highlight .no {
        color: #66d9ef;
    }

    .highlight .kt {
        color: #66d9ef;
    }

    .highlight .mf {
        color: #ae81ff;
    }

    .highlight .mh {
        color: #ae81ff;
    }

    .highlight .il {
        color: #ae81ff;
    }

    .highlight .mi {
        color: #ae81ff;
    }

    .highlight .mo {
        color: #ae81ff;
    }

    .highlight .m,
    .highlight .mb,
    .highlight .mx {
        color: #ae81ff;
    }

    .highlight .sc {
        color: #ae81ff;
    }

    .highlight .se {
        color: #ae81ff;
    }

    .highlight .ss {
        color: #ae81ff;
    }

    .highlight .sd {
        color: #e6db74;
    }

    .highlight .s2 {
        color: #e6db74;
    }

    .highlight .sb {
        color: #e6db74;
    }

    .highlight .sh {
        color: #e6db74;
    }

    .highlight .si {
        color: #e6db74;
    }

    .highlight .sx {
        color: #e6db74;
    }

    .highlight .s1 {
        color: #e6db74;
    }

    .highlight .s {
        color: #e6db74;
    }

    .highlight .na {
        color: #a6e22e;
    }

    .highlight .nc {
        color: #a6e22e;
    }

    .highlight .nd {
        color: #a6e22e;
    }

    .highlight .ne {
        color: #a6e22e;
    }

    .highlight .nf {
        color: #a6e22e;
    }

    .highlight .vc {
        color: #ffffff;
    }

    .highlight .nn {
        color: #ffffff;
    }

    .highlight .nl {
        color: #ffffff;
    }

    .highlight .ni {
        color: #ffffff;
    }

    .highlight .bp {
        color: #ffffff;
    }

    .highlight .vg {
        color: #ffffff;
    }

    .highlight .vi {
        color: #ffffff;
    }

    .highlight .nv {
        color: #ffffff;
    }

    .highlight .w {
        color: #ffffff;
    }

    .highlight {
        color: #ffffff;
    }

    .highlight .n,
    .highlight .py,
    .highlight .nx {
        color: #ffffff;
    }

    .highlight .ow {
        color: #f92672;
    }

    .highlight .nt {
        color: #f92672;
    }

    .highlight .k,
    .highlight .kv {
        color: #f92672;
    }

    .highlight .kn {
        color: #f92672;
    }

    .highlight .kp {
        color: #f92672;
    }

    .highlight .o {
        color: #f92672;
    }

    .mylog {
        width: 150px;
        margin: 0 auto;
        margin-top: 31px;
        margin-bottom: 29px;
    }
    </style>
    <link href="stylesheets/screen.css" rel="stylesheet" media="screen" />
    <link href="stylesheets/print.css" rel="stylesheet" media="print" />
    <script src="javascripts/all.js"></script>
</head>

<body class="index" data-languages="[&quot;cURL&quot;]">
    <a href="https://restructure.com.ng" id="nav-button">
        <span>
            <img src="restructure_logo_s.svg" alt="Restructure" />
            <!-- estructure -->
        </span>
    </a>
    <div class="toc-wrapper">
        <img src="restructure_logo_s.svg" class="logo mylog" style="height:40%;width:80%;" alt="Restructure" />
        <div class="lang-selector">
            <a href="#" data-language-name="cURL">cURL</a>
        </div>
        <div class="search">
            <input type="text" class="search" id="input-search" placeholder="Search">
        </div>
        <ul class="search-results"></ul>
        <ul id="toc" class="toc-list-h1">
            <li>
                <a href="#introduction" class="toc-h1 toc-link" data-title="Introduction">Introduction</a>
            </li>
            <li>
                <a href="#authentication" class="toc-h1 toc-link" data-title="Authentication">Authentication</a>
            </li>
            <li>
                <a href="#blacklist_check" class="toc-h1 toc-link" data-title="Blacklist_Check">Restructure Search</a>
                <ul class="toc-list-h2">
                    <li>
                        <a href="#add_blacklist" class="toc-h2 toc-link" data-title="Add a Record">Add
                            Record</a>
                    </li>
                    <li>
                        <a href="#update_blacklist" class="toc-h2 toc-link"
                            data-title="Update a Blacklist Record">Update Record</a>
                    </li>
                    <li>
                        <a href="#delete-blacklist" class="toc-h2 toc-link" data-title="Delete Restructure">Delete
                            Record</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#crc_check" class="toc-h1 toc-link" data-title="CRC_Check">CRC Search</a>
                <ul class="toc-list-h2">
                    <li>
                        <a href="#crc_bvn_name_blacklist" class="toc-h2 toc-link" data-title="CRC BVN NAME Record">CRC
                            BVN / NAME Search</a>
                    </li>
                    <li>
                        <a href="#boolean_blacklist_and_crc" class="toc-h2 toc-link"
                            data-title="Boolean Blacklist and CRC">Boolean Restructure and CRC Search</a>
                    </li>
                    <li>
                        <a href="#full_blacklist_and_crc" class="toc-h2 toc-link"
                            data-title="Full Blacklist and CRC ">Full Restructure and CRC Search</a>
                    </li>
                    <!--full_blacklist_and_crc_bvn_name-->
                    <li>
                        <a href="#full_blacklist_and_crc_bvn_name" class="toc-h2 toc-link"
                            data-title="Full Blacklist and CRC (BVN and NAME) Search ">Full Restructure and CRC (BVN and
                            Name) Search</a>
                    </li>
                    <li>
                        <a href="#crc_error" class="toc-h2 toc-link" data-title="CRC ERROR ">CRC Error</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#fc_check" class="toc-h1 toc-link" data-title="FirstCentral_Check">First Central Search</a>
                <ul class="toc-list-h2">
                    <li>
                        <a href="#fc_basic" class="toc-h2 toc-link" data-title="FirstCentral Basic ">First Central Basic
                            Search</a>
                    </li>
                    <li>
                        <a href="#fc_prime" class="toc-h2 toc-link" data-title="FirstCentral Prime">First Central Prime
                            Search</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#api_response" class="toc-h1 toc-link" data-title="API Response">API Response</a>
            </li>
        </ul>
        <ul class="toc-footer">
            <li><a href='#authentication'>Sign Up for an API Key</a></li>
        </ul>
    </div>
    <div class="page-wrapper">
        <div class="dark-box"></div>
        <div class="content">
            <h1 id='introduction'>Introduction</h1>

            <p>Welcome to the Restructure API! You can use our API to upload or get information of chronic debtors.</p>

            <p>Restructure API are HTTP based RESTful APIs. API request and response format are in JSON.</p>

            <h1 id='authentication'>Authentication</h1>
            <blockquote>
                <p>To authorize, use this code:</p>
            </blockquote>
            <pre class="highlight cURL tab-cURL"><code><span class="c">curl --request POST \</span>
curl <span class="s2">"https://restructure.com.ng/api/"</span>
  -H <span class="s2">"Authorization: YOUR-API-KEY"</span>
</code></pre>
            <blockquote>
                <p>Make sure to replace <code>YOUR-API-KEY</code> with your API key.</p>
            </blockquote>

            <p>Restructure authenticates your API requests using your account’s API keys. If you do not include your key
                when making an API request or use one that is incorrect or outdated, restructure returns an error.
            <p>

            <p>Your API keys are available in the <a href="../web/profile" target="_blank">Dashboard</a> by navigating
                to <code>Profile - > API</code></p>

            <p>Include API key in all API requests to the server in a header that looks like the following:</p>

            <aside class="notice">
                Authorization: <code>YOUR-API-KEY</code>
            </aside>

            <!-- Blacklist Searches Start Here  -->

            <h1 id='blacklist_check'>Restructure Full Search</h1>
            <pre class="highlight cURL tab-cURL"><p>Sample BVN Request:</p><code>curl --request GET \<br>--url <span class="s2">https://restructure.com.ng/api/bvn/{bvnnumber}</span>
            -H <span class="s2">"Authorization: YOUR-API-KEY"</span>
            </code>
            </pre>

            <pre class="highlight cURL tab-cURL"><p>Sample Phone Request:</p><code>curl --request GET \<br>--url <span class="s2">https://restructure.com.ng/api/phone/{phonenumber}</span>
            -H <span class="s2">"Authorization: YOUR-API-KEY"</span>
            </code>
            </pre>

            <pre class="highlight cURL tab-cURL"><p>Sample Email Request:</p><code>curl --request GET \<br>--url <span class="s2">https://restructure.com.ng/api/email/{emailaddress}</span>
            -H <span class="s2">"Authorization: YOUR-API-KEY"</span>
            </code>
            </pre>

            <blockquote>
                <p>The above command returns JSON structured like this: {Success or error}</p>
            </blockquote>
            <pre class="highlight json tab-json">
			    <p style="color:#6ac174;font-weight: bolder;font-size: 17px;">Success</p>
				<img src="blacklist_bvn_success.png" style="display: block;width: auto;" />
				<p style="color:#b00;font-weight: bolder;font-size: 17px;">Error</p>
				<img src="blacklist_error.png" style="display: block;width: auto;" />
			</pre>
            <p>This shows how to check your customer's BVN</p>

            <aside class="success">
                Search API calls cost <b>&#8358;<?php echo number_format($api_complete_cost)?></b> per call. To use this
                service, you would need to fund your restructure wallet, by navigating to wallet on the dashboard and
                using the fund option.

                <br>
                Companies that provide the data record will get
                <b>&#8358;<?php echo number_format($company_complete_fee)?></b> per call.
            </aside>

            <h3 id='http-request'>HTTP Request</h3>
            <p>For BVN:<code><b>GET</b> https://www.restructure.com.ng/api/bvn/</code></p>
            <p>For Phone:<code><b>GET</b> https://www.restructure.com.ng/api/phone/</code></p>
            <p>For Email:<code><b>GET</b> https://www.restructure.com.ng/api/email/</code></p>

            <h3 id='query-parameters'>Query Parameters</h3>
            <table>
                <thead>
                    <tr>
                        <th>Parameter</th>
                        <th>Required</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>bvn || phone || email</td>
                        <td>true</td>
                        <td>Customer's BVN || Phone || Email</td>
                    </tr>
                </tbody>
            </table>

            <p>We passed the bvn || phone || email of the customer to the endpoint as a query parameter e.g.
                <br> <code>https://restructure.com.ng/api/bvn/{bvnnumber}</code> <br>
                <br> <code>https://restructure.com.ng/api/phone/{phonenumber}</code> <br>
                <br> <code>https://restructure.com.ng/api/email/{emailnumber}</code>
            </p>

            <!-- // this is for boolean search  -->
            <h1 id='blacklist_check'>Restructure Boolean Search</h1>
            <pre class="highlight cURL tab-cURL"><p>Sample BVN Request:</p><code>curl --request GET \<br>--url <span class="s2">https://restructure.com.ng/api/bvn-boolean-search/{bvnnumber}</span>
            -H <span class="s2">"Authorization: YOUR-API-KEY"</span>
            </code>
            </pre>

            <pre class="highlight cURL tab-cURL"><p>Sample Phone Request:</p><code>curl --request GET \<br>--url <span class="s2">https://restructure.com.ng/api/phone-boolean-search/{phonenumber}</span>
            -H <span class="s2">"Authorization: YOUR-API-KEY"</span>
            </code>
            </pre>

            <pre class="highlight cURL tab-cURL"><p>Sample Email Request:</p><code>curl --request GET \<br>--url <span class="s2">https://restructure.com.ng/api/email-boolean-search/{emailaddress}</span>
            -H <span class="s2">"Authorization: YOUR-API-KEY"</span>
            </code>
            </pre>

            <blockquote>
                <p>The above command returns JSON structured like this: {Success or error}</p>
            </blockquote>
            <pre class="highlight json tab-json">
			    <p style="color:#6ac174;font-weight: bolder;font-size: 17px;">Success</p>
				<img src="blacklist_boolean_success.png" style="display: block;width: auto;" />
				<p style="color:#b00;font-weight: bolder;font-size: 17px;">Error</p>
				<img src="blacklist_error.png" style="display: block;width: auto;" />
			</pre>
            <p>This shows how to check your customer's BVN</p>

            <aside class="success">
                Search API calls cost <b>&#8358;<?php echo number_format($api_cost)?></b> per call. To use this service,
                you would need to fund your restructure wallet, by navigating to wallet on the dashboard and using the
                fund option.

                <br>
                Companies that provide the data record will get <b>&#8358;<?php echo number_format($company_cost)?></b>
                per call.
            </aside>

            <h3 id='http-request'>HTTP Request</h3>
            <p>For BVN:<code><b>GET</b> https://www.restructure.com.ng/api/bvn-boolean-search/</code></p>
            <p>For Phone:<code><b>GET</b> https://www.restructure.com.ng/api/phone-boolean-search/</code></p>
            <p>For Email:<code><b>GET</b> https://www.restructure.com.ng/api/email-boolean-search/</code></p>

            <h3 id='query-parameters'>Query Parameters</h3>
            <table>
                <thead>
                    <tr>
                        <th>Parameter</th>
                        <th>Required</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>bvn || phone || email</td>
                        <td>true</td>
                        <td>Customer's BVN || Phone || Email</td>
                    </tr>
                </tbody>
            </table>

            <p>We passed the bvn || phone || email of the customer to the endpoint as a query parameter e.g.
                <br> <code>https://restructure.com.ng/api/bvn-boolean-search/{bvnnumber}</code> <br>
                <br> <code>https://restructure.com.ng/api/phone-boolean-search/{phonenumber}</code> <br>
                <br> <code>https://restructure.com.ng/api/email-boolean-search/{emailnumber}</code>
            </p>


            <!-- ADD A BLACKLIST RECORD  -->

            <h2 id='add_blacklist'>Add a Record </h2>
            <pre class="highlight cURL tab-cURL"><p>Sample Request:</p><code>curl --request POST \<br>--url <span class="s2">https://restructure.com.ng/api/add</span>
            -H <span class="s2">"Authorization: YOUR-API-KEY"</span>
            -data <span class="s2">'{"name":"John Doe","bvn":1562772282,"phone":"08162727822","email":"user@email.com","gender":"male","loan_amount":14000,"amount_paid":2000,"due_date":"20/1/2020","location":"Lagos"}'</span>
            </code></pre>

            <blockquote>
                <p>The above command returns JSON structured like this (success / error):</p>
            </blockquote>
            <pre class="highlight json tab-json">
			    <p style="color:#6ac174;font-weight: bolder;font-size: 17px;">Success</p>
				<img src="blacklist_Added_success.png" style="display: block;width: auto;" />
				<p style="color:#b00;font-weight: bolder;font-size: 17px;">Error</p>
				<img src="blacklist_add_error.png" style="display: block;width: auto;" />
			</pre>
            <p>This shows how to add upload record to your dashboard</p>

            <h3 id='http-request-2'>HTTP Request</h3>
            <p><code>POST https://restructure.com.ng/api/add</code></p>
            <h3 id='url-parameters'>Body Params</h3>
            <table>
                <thead>
                    <tr>
                        <th>Parameter</th>
                        <th>Type</th>
                        <th>Required</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>name</td>
                        <td>string</td>
                        <td>true</td>
                        <td>Customer Name</td>
                    </tr>
                    <tr>
                        <td>bvn</td>
                        <td>int</td>
                        <td>true</td>
                        <td>Customer BVN</td>
                    </tr>
                    <tr>
                        <td>phone</td>
                        <td>string</td>
                        <td>true</td>
                        <td>Customer Phone</td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td>string</td>
                        <td>true</td>
                        <td>Customer Email</td>
                    </tr>
                    <tr>
                        <td>gender</td>
                        <td>string</td>
                        <td>false</td>
                        <td>Customer Gender</td>
                    </tr>
                    <tr>
                        <td>loan_amount</td>
                        <td>int</td>
                        <td>true</td>
                        <td>Loan Amount Collected</td>
                    </tr>
                    <tr>
                        <td>amount_paid</td>
                        <td>int</td>
                        <td>true</td>
                        <td>Amount Paid</td>
                    </tr>
                    <tr>
                        <td>due_date</td>
                        <td>string</td>
                        <td>true</td>
                        <td>E.g. <b>20/1/2020</b> (d-m-Y)</td>
                    </tr>
                    <tr>
                        <td>location</td>
                        <td>string</td>
                        <td>false</td>
                        <td>Customer City or State</td>
                    </tr>

                </tbody>
            </table>

            <!-- update a blacklist record  -->

            <h2 id='update_blacklist'>Update a Record</h2>
            <pre class="highlight cURL tab-cURL"><p>Sample Request:</p><code>curl --request POST \<br>--url <span class="s2">https://restructure.com.ng/api/bvn-update/{bvn}</span>
            -H <span class="s2">"Authorization: YOUR-API-KEY"</span>
            -data <span class="s2">'{"name":"John Doe","bvn":1562772282,"phone":"08162727822","email":"user@email.com","gender":"male","loan_amount":14000,"amount_paid":2000,"due_date":"20/1/2020","location":"Lagos"}'</span>
            </code></pre>

            <blockquote>
                <p>The above command returns JSON structured like this (success / error):</p>
            </blockquote>
            <pre class="highlight json tab-json">
			    <p style="color:#6ac174;font-weight: bolder;font-size: 17px;">Success</p>
				<img src="blacklist_update_success.png" style="display: block;width: auto;" />
				<p style="color:#b00;font-weight: bolder;font-size: 17px;">Error</p>
				<img src="update_blacklist_error.png" style="display: block;width: auto;" />
			</pre>
            <p>This shows how to update a record in your dashboard</p>

            <h3 id='http-request-2'>HTTP Request</h3>
            <p><code>POST https://restructure.com.ng/api/bvn-update/{bvn}</code></p>
            <h3 id='url-parameters'>Body Params</h3>
            <table>
                <thead>
                    <tr>
                        <th>Parameter</th>
                        <th>Type</th>
                        <th>Required</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>name</td>
                        <td>string</td>
                        <td>true</td>
                        <td>Customer Name</td>
                    </tr>
                    <tr>
                        <td>bvn</td>
                        <td>int</td>
                        <td>true</td>
                        <td>Customer BVN</td>
                    </tr>
                    <tr>
                        <td>phone</td>
                        <td>string</td>
                        <td>true</td>
                        <td>Customer Phone</td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td>string</td>
                        <td>true</td>
                        <td>Customer Email</td>
                    </tr>
                    <tr>
                        <td>gender</td>
                        <td>string</td>
                        <td>false</td>
                        <td>Customer Gender</td>
                    </tr>
                    <tr>
                        <td>loan_amount</td>
                        <td>int</td>
                        <td>true</td>
                        <td>Loan Amount Collected</td>
                    </tr>
                    <tr>
                        <td>amount_paid</td>
                        <td>int</td>
                        <td>true</td>
                        <td>Amount Paid</td>
                    </tr>
                    <tr>
                        <td>due_date</td>
                        <td>string</td>
                        <td>true</td>
                        <td>E.g. <b>20/1/2020</b> (d-m-Y)</td>
                    </tr>
                    <tr>
                        <td>location</td>
                        <td>string</td>
                        <td>false</td>
                        <td>Customer City or State</td>
                    </tr>

                </tbody>
            </table>

            <!-- DELETE A BLACKLIST RECORD  -->
            <h2 id='delete-blacklist'>Delete Record</h2>

            <pre class="highlight cURL tab-cURL"><p>Sample Request:</p><code>curl --request POST \<br>--url <span class="s2">https://restructure.com.ng/api/delete</span>
  -H <span class="s2">"Authorization: YOUR-API-KEY"</span>
  -data <span class="s2">'{"bvn":1562772282}'</span>
</code></pre>
            <blockquote>
                <p>The above command returns JSON structured like this (success / error):</p>
            </blockquote>
            <pre class="highlight json tab-json">
			    <p style="color:#6ac174;font-weight: bolder;font-size: 17px;">Success</p>
				<img src="delete_blacklist_success.png" style="display: block;width: auto;" />
				<p style="color:#b00;font-weight: bolder;font-size: 17px;">Error</p>
				<img src="delete_blacklist_error.png" style="display: block;width: auto;" />
			</pre>
            <p>This shows you how to delete a record.</p>

            <aside class="success">
                Deleting an uploaded record cost <b>&#8358;<?php echo number_format($del_cost)?></b><br> To
                use this service, you would need to fund your rlacklist wallet, by navigating to wallet on the dashboard
                and using the fund option.
            </aside>


            <h3 id='http-request'>HTTP Request</h3>
            <p><code>POST https://restructure.com.ng/api/delete</code></p>
            <h3 id='query-parameters'>Query Parameters</h3>
            <table>
                <thead>
                    <tr>
                        <th>Parameter</th>
                        <th>Required</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>bvn</td>
                        <td>true</td>
                        <td>customer's BVN</td>
                    </tr>
                </tbody>
            </table>

            <!-- CRC SEARCHES  -->

            <h1 id='crc_check'>CRC Search</h1>
            <pre class="highlight cURL tab-cURL"><p>Sample BVN Request:</p><code>curl --request GET \<br>--url <span class="s2">https://restructure.com.ng/api/crc-bvn-search/{bvnnumber}</span>
            -H <span class="s2">"Authorization: YOUR-API-KEY"</span>
            </code>
            </pre>

            <blockquote>
                <p>The above command returns JSON structured like this: {Success (hit and No-Hit) or Error}</p>
            </blockquote>
            <pre class="highlight json tab-json">
			    <p style="color:#6ac174;font-weight: bolder;font-size: 17px;">Success (Hit)</p>
				<img src="crc_success.png" style="display: block;width: auto;" />
                <p style="color:#6ac174;font-weight: bolder;font-size: 17px;">Success (NoHit)</p>
				<img src="crc_success_nohit.png" style="display: block;width: auto;" />
				<p style="color:#b00;font-weight: bolder;font-size: 17px;">Error</p>
				<img src="crc_error.png" style="display: block;width: auto;" />
			</pre>
            <p>This shows how to check your customer's BVN</p>

            <aside class="success">
                Search API calls cost <b>&#8358;<?php echo number_format($crc_company_fee)?></b> per call. To use this
                service, you would need to fund your restructure wallet, by navigating to wallet on the dashboard and
                using the fund option.
                <br>
            </aside>

            <h3 id='http-request'>HTTP Request</h3>
            <p>For BVN:<code><b>GET</b> https://www.restructure.com.ng/api/crc-bvn-search/</code></p>

            <!-- <p>For BLACKLIST Boolean Search and CRC :<code><b>GET</b> https://www.restructure.com.ng/api/boolean-bvn-blacklist-crc-search/</code></p>
            <p>For BLACKLIST Full Search and CRC :<code><b>GET</b> https://www.restructure.com.ng/api/bvn-blacklist-crc-search/</code></p> -->

            <h3 id='query-parameters'>Query Parameters</h3>
            <table>
                <thead>
                    <tr>
                        <th>Parameter</th>
                        <th>Required</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>bvn </td>
                        <td>true</td>
                        <td>Customer's BVN </td>
                    </tr>
                </tbody>
            </table>

            <p>We passed the bvn || name || phone || email of the customer to the endpoint as a query parameter e.g.
                <br> <code>https://restructure.com.ng/api/crc-bvn-search/{bvnnumber}</code> <br>
                <!-- <br> <code>https://restructure.com.ng/api/boolean-bvn-blacklist-crc-search/{bvnnumber}</code>
                <br> <code>https://restructure.com.ng/api/bvn-blacklist-crc-search/{bvnnumber}</code>  -->
            </p>

            <!--  CRC BVN Name Search  -->

            <h2 id='crc_ bvn_name_blacklist'>CRC BVN Name Search </h2>
            <pre class="highlight cURL tab-cURL"><p>Sample Request:</p><code>curl --request GET \<br>--url <span class="s2">https://restructure.com.ng/api/crc-bvn-name-search/{bvn}/{name}</span>
            -H <span class="s2">"Authorization: YOUR-API-KEY"</span>
            </code></pre>

            <blockquote>
                <p>The above command returns JSON structured like this (success / error):</p>
            </blockquote>
            <pre class="highlight json tab-json">
			    <p style="color:#6ac174;font-weight: bolder;font-size: 17px;">Success (Hit - CRC BVN Name Search)</p>
				<img src="crc_success_demo.png" style="display: block;width: auto;" />
                <p style="color:#6ac174;font-weight: bolder;font-size: 17px;">Success (NoHit - CRC BVN Name Search)</p>
				<img src="crc_success_nohit.png" style="display: block;width: auto;" />
				<p style="color:#b00;font-weight: bolder;font-size: 17px;">Error (CRC BVN Name Search)</p>
				<img src="crc_error.png" style="display: block;width: auto;" />
			</pre>

            <p>This shows how to make a CRC Bvn and Name Request</p>

            <h3 id='http-request-2'>HTTP Request</h3>
            <p><code>GET <p>For BVN and Name:<code><b>GET</b> https://www.restructure.com.ng/api/crc-bvn-name-search/{bvn}/{name}</code>
            </p></code></p>
            <h3 id='url-parameters'>Body Params</h3>
            <table>
                <thead>
                    <tr>
                        <th>Parameter</th>
                        <th>Type</th>
                        <th>Required</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>name</td>
                        <td>string</td>
                        <td>true</td>
                        <td>Customer Name</td>
                    </tr>
                    <tr>
                        <td>bvn</td>
                        <td>int</td>
                        <td>true</td>
                        <td>Customer BVN</td>
                    </tr>
                </tbody>
            </table>

            <!-- BOOLEAN BLACKLIST AND CRC  -->
            <h2 id='boolean_blacklist_and_crc'>BOOLEAN RESTRUCTURE and CRC Search </h2>
            <pre class="highlight cURL tab-cURL"><p>Sample Request:</p><code>curl --request GET \<br>--url <span class="s2">https://restructure.com.ng/api/boolean-bvn-blacklist-crc-search/{bvn}</span>
            -H <span class="s2">"Authorization: YOUR-API-KEY"</span>
            </code></pre>

            <aside class="success">
                Search API calls cost <b>&#8358;<?php echo number_format($crc_company_fee + $api_cost)?></b> per call.
                To use this service, you would need to fund your restructure wallet, by navigating to wallet on the
                dashboard and using the fund option.
                <br>
            </aside>

            <blockquote>
                <p>The above command returns JSON structured like this (success / error):</p>
            </blockquote>
            <pre class="highlight json tab-json">
			    <p style="color:#6ac174;font-weight: bolder;font-size: 17px;">Success (Hit - BOOLEAN RESTRUCTURE and CRC Search)</p>
				<img src="boolean_blacklist_and_crc_success.png" style="display: block;width: auto;" />
                <p style="color:#6ac174;font-weight: bolder;font-size: 17px;">Success (NoHit - BOOLEAN RESTRUCTURE and CRC Search)</p>
				<img src="boolean_blacklist_crc_nohit.png" style="display: block;width: auto;" />
				<p style="color:#b00;font-weight: bolder;font-size: 17px;">Error (BOOLEAN RESTRUCTURE and CRC Search)</p>
				<img src="boolean_blacklist_crc_error.png" style="display: block;width: auto;" />
			</pre>

            <p>This shows how to make a CRC Bvn and Name Request</p>

            <h3 id='http-request-2'>HTTP Request</h3>
            <p><code>GET <p>For BVN and Name:<code><b>GET</b> https://www.restructure.com.ng/api/boolean-bvn-blacklist-crc-search/{bvn}</code>
            </p></code></p>
            <h3 id='url-parameters'>Body Params</h3>
            <table>
                <thead>
                    <tr>
                        <th>Parameter</th>
                        <th>Type</th>
                        <th>Required</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>name</td>
                        <td>string</td>
                        <td>true</td>
                        <td>Customer Name</td>
                    </tr>
                    <tr>
                        <td>bvn</td>
                        <td>int</td>
                        <td>true</td>
                        <td>Customer BVN</td>
                    </tr>
                </tbody>
            </table>

            <!-- Full BLACKLIST Search AND CRC  -->
            <h2 id='full_blacklist_and_crc'>Full RESTRUCTURE and CRC Search </h2>
            <pre class="highlight cURL tab-cURL"><p>Sample Request:</p><code>curl --request GET \<br>--url <span class="s2">https://restructure.com.ng/api/bvn-blacklist-crc-search/{bvn}</span>
            -H <span class="s2">"Authorization: YOUR-API-KEY"</span>
            </code></pre>

            <aside class="success">
                Search API calls cost <b>&#8358;<?php echo number_format($crc_company_fee + $api_complete_cost)?></b>
                per call. To use this service, you would need to fund your restructure wallet, by navigating to wallet
                on
                the dashboard and using the fund option.
                <br>
            </aside>

            <blockquote>
                <p>The above command returns JSON structured like this (success / error):</p>
            </blockquote>
            <pre class="highlight json tab-json">
			    <p style="color:#6ac174;font-weight: bolder;font-size: 17px;">Success (Hit - Full RESTRUCTURE and CRC Search)</p>
				<img src="full_blacklist_and_crc_success.png" style="display: block;width: auto;" />
                <p style="color:#6ac174;font-weight: bolder;font-size: 17px;">Success (NoHit - Full RESTRUCTURE and CRC Search)  </p>
				<img src="boolean_blacklist_crc_nohit.png" style="display: block;width: auto;" />
				<p style="color:#b00;font-weight: bolder;font-size: 17px;">Error (Full RESTRUCTURE and CRC Search)</p>
				<img src="boolean_blacklist_crc_error.png" style="display: block;width: auto;" />
			</pre>

            <p>This shows how to make a Full Restructure and CRC Bvn Request</p>

            <h3 id='http-request-2'>HTTP Request</h3>
            <p><code>GET <p>For BVN and Name:<code><b>GET</b> https://www.restructure.com.ng/api/bvn-blacklist-crc-search/{bvn}</code>
            </p></code></p>
            <h3 id='url-parameters'>Body Params</h3>
            <table>
                <thead>
                    <tr>
                        <th>Parameter</th>
                        <th>Type</th>
                        <th>Required</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>bvn</td>
                        <td>int</td>
                        <td>true</td>
                        <td>Customer BVN</td>
                    </tr>
                </tbody>
            </table>

            <!--Full Blacklist and  CRC BVN AND NAME  -->

            <h2 id='full_blacklist_and_crc_bvn_name'>Full RESTRUCTURE and CRC (BVN and NAME) Search </h2>
            <pre class="highlight cURL tab-cURL"><p>Sample Request:</p><code>curl --request GET \<br>--url <span class="s2">https://restructure.com.ng/api/bvn-name-blacklist-crc-search/{bvn}/{name}</span>
            -H <span class="s2">"Authorization: YOUR-API-KEY"</span>
            </code></pre>

            <aside class="success">
                Search API calls cost <b>&#8358;<?php echo number_format($crc_company_fee + $api_complete_cost)?></b>
                per call. To use this service, you would need to fund your restructure wallet, by navigating to wallet
                on
                the dashboard and using the fund option.
                <br>
            </aside>

            <blockquote>
                <p>The above command returns JSON structured like this (success / error):</p>
            </blockquote>
            <pre class="highlight json tab-json">
			    <p style="color:#6ac174;font-weight: bolder;font-size: 17px;">Success (Hit - Full RESTRUCTURE and CRC (BVN and Name) Search)</p>
				<img src="full_blacklist_and_crc_success.png" style="display: block;width: auto;" />
                <p style="color:#6ac174;font-weight: bolder;font-size: 17px;">Success (NoHit - Full RESTRUCTURE and CRC (BVN and Name) Search)  </p>
				<img src="boolean_blacklist_crc_nohit.png" style="display: block;width: auto;" />
				<p style="color:#b00;font-weight: bolder;font-size: 17px;">Error (Full RESTRUCTURE and CRC (BVN and Name) Search)</p>
				<img src="boolean_blacklist_crc_error.png" style="display: block;width: auto;" />
			</pre>

            <p>This shows how to make a Full Restructure <br> and CRC Bvn and Name Request</p>

            <h3 id='http-request-2'>HTTP Request</h3>
            <p><code>GET <p>For BVN and Name:<code><b>GET</b> https://www.restructure.com.ng/api/bvn-name-blacklist-crc-search/{bvn}/{name}</code>
            </p></code></p>
            <h3 id='url-parameters'>Body Params</h3>
            <table>
                <thead>
                    <tr>
                        <th>Parameter</th>
                        <th>Type</th>
                        <th>Required</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>bvn</td>
                        <td>int</td>
                        <td>true</td>
                        <td>Customer BVN</td>
                    </tr>
                    <tr>
                        <td>name</td>
                        <td>int</td>
                        <td>true</td>
                        <td>Customer BVN</td>
                    </tr>
                </tbody>
            </table>

            <!--NETWORK ERROR  -->
            <h2 id='crc_error'>ERROR NOTIFICATION</h2>


            <pre class="highlight cURL tab-cURL"><p>Sample Request (CRC BVN REQUEST):</p><code>curl --request GET \<br>--url <span class="s2">https://restructure.com.ng/api/boolean-bvn-blacklist-crc-search/{bvn}</span>
            -H <span class="s2">"Authorization: YOUR-API-KEY"</span>
            </code></pre>
            <blockquote>
                <p>The above command returns JSON structured like this (success / error):</p>
            </blockquote>
            <pre class="highlight json tab-json">
				<p style="color:#b00;font-weight: bolder;font-size: 17px;">Error (CRC Network Error)</p>
				<img src="crc_network_error.png" style="display: block;width: auto;" />
			</pre>

            <p>This shows you how a Network error to CRC shows.</p>
            <p>Please Note that no fee is charged in a case of a network error </p>

            <!-- First Central SEARCHES  -->
            <h1 id='fc_check'>First Central Search</h1>

            <!--  First Central Basic Search  -->
            <h2 id='fc_basic'>First Central Basic Search </h2>
            <pre class="highlight cURL tab-cURL"><p>Sample Request:</p><code>curl --request GET \<br>--url <span class="s2">https://restructure.com.ng/api/firstcentral-basic-search/</span>
            -H <span class="s2">"Authorization: YOUR-API-KEY"</span>
            -data raw <span class="s2">"name": "{name}"</span>
                      <span class="s2">"bvn": "{bvn}"</span>
            </code></pre>

            <blockquote>
                <p>The above command returns JSON structured like this (success / error):</p>
            </blockquote>
            <pre class="highlight json tab-json">
			    <p style="color:#6ac174;font-weight: bolder;font-size: 17px;">Success (Hit - First Central Basic Search)</p>
				<img src="fc_basic_success.png" style="display: block;width: auto;" />
                <p style="color:#6ac174;font-weight: bolder;font-size: 17px;">Success (NoHit - First Central Basic Search)</p>
				<img src="fc_nohit.png" style="display: block;width: auto;" />
				<p style="color:#b00;font-weight: bolder;font-size: 17px;">Error (First Central Basic Search)</p>
				<img src="fc_error.png" style="display: block;width: auto;" />
			</pre>

            <p>This shows how to make a First Central Basic Request. Use BVN, Name or Name and BVN</p>

            <h3 id='http-request-2'>HTTP Request</h3>
            <p><code>GET <p>For BVN and/or Name:<code><br><b>GET</b> https://www.restructure.com.ng/api/firstcentral-basic-search/</code>
            </p></code></p>
            <h3 id='url-parameters'>Body Params</h3>
            <table>
                <thead>
                    <tr>
                        <th>Parameter</th>
                        <th>Type</th>
                        <th>Required</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>name</td>
                        <td>string</td>
                        <td>false</td>
                        <td>Customer Name</td>
                    </tr>
                    <tr>
                        <td>bvn</td>
                        <td>string</td>
                        <td>true</td>
                        <td>Customer BVN</td>
                    </tr>
                </tbody>
            </table>

            <!--  First Central Prime Search  -->
            <h2 id='fc_prime'>First Central Prime Search </h2>
            <pre class="highlight cURL tab-cURL"><p>Sample Request:</p><code>curl --request GET \<br>--url <span class="s2">https://restructure.com.ng/api/firstcentral-prime-search/</span>
            -H <span class="s2">"Authorization: YOUR-API-KEY"</span>
            -data raw <span class="s2">"name": "{name}"</span>
                      <span class="s2">"bvn": "{bvn}"</span>
            </code></pre>

            <blockquote>
                <p>The above command returns JSON structured like this (success / error):</p>
            </blockquote>
            <pre class="highlight json tab-json">
			    <p style="color:#6ac174;font-weight: bolder;font-size: 17px;">Success (Hit - First Central Prime Search)</p>
				<img src="fc_prime_success.png" style="display: block;width: auto;" />
                <p style="color:#6ac174;font-weight: bolder;font-size: 17px;">Success (NoHit - First Central Prime Search)</p>
				<img src="fc_nohit.png" style="display: block;width: auto;" />
				<p style="color:#b00;font-weight: bolder;font-size: 17px;">Error (First Central Prime Search)</p>
				<img src="fc_error.png" style="display: block;width: auto;" />
			</pre>

            <p>This shows how to make a First Central Prime Request. Use BVN, Name or Name and BVN</p>

            <h3 id='http-request-2'>HTTP Request</h3>
            <p><code>GET <p>For BVN and/or Name:<code><br><b>GET</b> https://www.restructure.com.ng/api/firstcentral-prime-search/</code>
            </p></code></p>
            <h3 id='url-parameters'>Body Params</h3>
            <table>
                <thead>
                    <tr>
                        <th>Parameter</th>
                        <th>Type</th>
                        <th>Required</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>name</td>
                        <td>string</td>
                        <td>false</td>
                        <td>Customer Name</td>
                    </tr>
                    <tr>
                        <td>bvn</td>
                        <td>string</td>
                        <td>true</td>
                        <td>Customer BVN</td>
                    </tr>
                </tbody>
            </table>

            <!-- //  API RESPONSE  -->
            <h1 id='api_response'>API Response</h1>
            <p>This describes the Response format for Restructure APIs</p>
            <p>Each REST API request returns a success or error HTTP status code.</p>

            <table>
                <thead>
                    <tr>
                        <th>Status code</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>200 OK</code></td>
                        <td>The request succeeded.</td>
                    </tr>
                    <tr>
                        <td><code>404 Not Found</code></td>
                        <td>The server did not find anything that matches the request URI. Either the URI is incorrect
                            or the resource is not available. For example, no data exists in the database at that key.
                        </td>
                    </tr>
                    <tr>
                        <td><code>500 Internal Server Error</code></td>
                        <td>A system or application error occurred. Although the client appears to provide a correct
                            request, something unexpected occurred on the server.</td>
                    </tr>
                    <tr>
                        <td><code>503 Service Unavailable</code></td>
                        <td>The server cannot handle the request for a service due to temporary maintenance.</td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div class="dark-box">
            <div class="lang-selector">
                <a href="#" data-language-name="cURL">cURL</a>
            </div>
        </div>
    </div>
</body>

</html>