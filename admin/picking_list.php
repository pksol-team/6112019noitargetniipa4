<?php
include 'config.php';
session_start();
if($_SESSION['password']==''){
	echo "<script>window.location='login.php'</script>";
}
$company_order_id = $_POST['company_order_id'];
?>
<!-- saved from url=(0232)https://app.zenstores.com/sales/picking_list/?as=html&filter__id__in=43390017&filter__id__in=43385973&filter__id__in=43385934&filter__id__in=43385899&filter__id__in=43385843&filter__id__in=43385777&filter__id__in=43385724&sort=-date -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script type="text/javascript" src="./Picking List_files/1615c8ffe5"></script><script src="./Picking List_files/nr-1099.min.js.download"></script><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(3),u=e(4),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],t),e}finally{f.emit("fn-end",[c.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now()])}},{}],2:[function(e,n,t){function r(e,n){if(!o)return!1;if(e!==o)return!1;if(!n)return!0;if(!i)return!1;for(var t=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var u=navigator.userAgent,f=u.match(a);f&&u.indexOf("Chrome")===-1&&u.indexOf("Chromium")===-1&&(o="Safari",i=f[1])}n.exports={agent:o,version:i,match:r}},{}],3:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],4:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],5:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=v(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){h[e]=v(e).concat(n)}function m(e,n){var t=h[e];if(t)for(var r=0;r<t.length;r++)t[r]===n&&t.splice(r,1)}function v(e){return h[e]||[]}function g(e){return p[e]=p[e]||o(t)}function w(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var h={},y={},b={on:l,addEventListener:l,removeEventListener:m,emit:t,get:g,listeners:v,context:n,buffer:w,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(3),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!E++){var e=x.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+x.offset],null,"api");var t=l.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===l.readyState&&i()}function i(){f("mark",["domContent",a()+x.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-x.offset}var u=(new Date).getTime(),f=e("handle"),c=e(3),s=e("ee"),p=e(2),d=window,l=d.document,m="addEventListener",v="attachEvent",g=d.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:g,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1099.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=n.exports={offset:u,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};e(1),l[m]?(l[m]("DOMContentLoaded",i,!1),d[m]("load",r,!1)):(l[v]("onreadystatechange",o),d[v]("onload",r)),f("mark",["firstbyte",u],null,"api");var E=0,O=e(5)},{}]},{},["loader"]);</script><script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","queueTime":0,"licenseKey":"1615c8ffe5","agent":"","transactionName":"MlMGYEIEVkZXVhJbVwsZIkFeBkxcWVtJX10GXgJRVQEWVEZFFRxLBFoBRx4TUVBBRlxiUQZdDVpXKVFGQmMPV09LUQFA","applicationID":"22986416","errorBeacon":"bam.nr-data.net","applicationTime":78}</script>

<!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
    <link rel="icon" href="https://app.zenstores.com/static/img/favicon.png">
    <style type="text/css">

  /** * html5doctor.com Reset Stylesheet v1.6.1 (http://html5doctor.com/html-5-reset-stylesheet/) * Richard Clark (http://richclarkdesign.com) * http://cssreset.com */html, body, div, span, object, iframe,h1, h2, h3, h4, h5, h6, p, blockquote, pre,abbr, address, cite, code,del, dfn, em, img, ins, kbd, q, samp,small, strong, sub, sup, var,b, i,dl, dt, dd, ol, ul, li,fieldset, form, label, legend,table, caption, tbody, tfoot, thead, tr, th, td,article, aside, canvas, details, figcaption, figure,footer, header, hgroup, menu, nav, section, summary,time, mark, audio, video {    margin:0;    padding:0;    border:0;    outline:0;    font-size:100%;    vertical-align:baseline;    background:transparent;}body {    line-height:1;}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section {    display:block;}nav ul {    list-style:none;}blockquote, q {    quotes:none;}blockquote:before, blockquote:after,q:before, q:after {    content:'';    content:none;}a {    margin:0;    padding:0;    font-size:100%;    vertical-align:baseline;    background:transparent;}/* change colours to suit your needs */ins {    background-color:#ff9;    color:#000;    text-decoration:none;}/* change colours to suit your needs */mark {    background-color:#ff9;    color:#000;    font-style:italic;    font-weight:bold;}del {    text-decoration: line-through;}abbr[title], dfn[title] {    border-bottom:1px dotted;    cursor:help;}table {    border-collapse:collapse;    border-spacing:0;}/* change border colour to suit your needs */hr {    display:block;    height:1px;    border:0;    border-top:1px solid #cccccc;    margin:1em 0;    padding:0;}input, select {    vertical-align:middle;}       
        .pages {
            width: 210mm;
            min-height: 200mm;
            margin: 0 auto;
            position: relative;
        }

        strong {
            font-weight: bold;

        }

        .btn {
          display: inline-block;
          font-family: Helvetica,Arial,sans-serif;
          margin-bottom: 0;
          font-weight: 400;
          text-align: center;
          vertical-align: middle;
          text-decoration: none;
          cursor: pointer;
          background-image: none;
          border: 1px solid transparent;
          white-space: nowrap;
          padding: 5px 10px;
          font-size: 15px;
          line-height: 1.5;
          border-radius: 3px;
          color: #333;
          background-color: #fff;
          border-color: #ccc;
          font-weight: bold;
          -webkit-font-smoothing: antialiased;
        }

        
        .btn-zen-primary-sm {
          font-weight: normal;
                   color: #fff;
                  background-color: #1EB3C6;
                  border-color: #1EB3C6;            
        }

         .btn-zen-primary-sm:hover {
          color: #fff;
          background-color: #178d9a;
          border-color: #168591;
         }

        h2 {
            font-size: 1.5em;
            margin: 20px 0 10px 0;
        }

        .controls {
            position: absolute;
            left: 0;
            top: 0;
        }

        body,html {
            width: 100%;
            font-family: "helvetica";
            font-size: 0.95em;
            line-height: 1.3em;
            margin-top: 40px;
        }

        .fixed-header {
            height: 50px;
            position: fixed;
            top: 0;
            width: 100%;
            background: whitesmoke;
            z-index: 10;
            border-bottom:  1px solid #DDD;
            line-height: 50px;
        }

        .fixed-header>div{
            width: 210mm;

            margin: 0 auto;
        }

        .warning {
          color: red;
        }

        .header {
          clear: both;
          overflow: auto;
          padding-bottom: 20px;
        }

        .clear-fix{
           clear: both;
           overflow: auto;
        }

        .pull-left {
          float: left;
        }
        
        .logo {
          float: right;
        }

        .logo > img {
          max-height: 150px;
          max-width: 250px;   
        }

        hr {
            margin: 30px 0;
            border: 0px;
            border-bottom: 1px solid #000;
        }    
    
        .table {
           width: 100%;
           font-size: inherit;
           line-height: inherit;
        }

        .thumbnail {
          max-height: 50px;
          max-width: 50px;
        }


        table.table.bordered, table.table.bordered > tr, table.table.bordered td, table.table.bordered th {
          border: 1px solid #333;
          padding: 5px;
        }

        table.table.no-bordered, table.table.no-bordered > tr, table.table.no-bordered td, table.table.no-bordered th {
          border: 0px solid #000 !important;
          padding: 0px;
        }

        thead.inverted {
          background: #333;
          -webkit-print-color-adjust: exact;
          color: #fff;
        }

        thead,td,tr,th {
            /*margin: 0;*/
            vertical-align: top;
            /*padding: 0;*/
        }

        tr.border-bottom {
          border-bottom: 1px dashed #DDD;
        }
  

      

        .spacer {
            height: 30px;
        }

        .small-spacer {
            height: 15px;
        }

        .large-spacer {
            height: 50px;
        }

        .text-left {

            text-align: left;
        }

        .info {
          color: #666;
          font-style: italic;
          font-size: 90%;
        }

        .half {
          width: 50%;
          float: left;
          display: inline;
        }

        .light-font {
          font-weight: 100;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .meta {
          font-size: 80%;
          color: #666;
        }

        .caps {
          text-transform: uppercase;
        }

        .status {
          min-width: 120px;
          font-weight: bold;
          margin-top: 10px;
          display: inline-block;
        }

        .page-break {
           

            page-break-after: always;
                
        }

        .page-line {
            border-bottom: 1px solid #DDD;
        }

        @media print
        {    
            body,html {
                padding: 0px;
                margin: 0px ;
            }

            .pages>div {
                padding: 0cm;
            }


            .no-print, .no-print *
            {
                display: none !important;
            }
        }

        .pdf .no-print {
            
            display: none !important;

        }


        td {
            overflow: hidden;
        }

    </style>
    
    
    <script src="./Picking List_files/jquery.min.js.download"></script>
    <style type="text/css">

            .product-image {
                display: inline-block;
                height: 50px;
                width: 50px;
                overflow: hidden;
                float: left;
                padding-right: 5px;
            }

            .product-details {
                display: inline-block;
                float: left;
                width: 320px;
            }

            .product-image img {
                max-height: 50px;
                max-width: 50px;
                margin-right: 5px;
            }

            .avoid {
                page-break-inside: avoid !important;
                margin: 0px 0 0px 0;
            }
    </style>



    <title></title>
</head>

<body class="" cz-shortcut-listen="true"> 

<title>Picking List</title>
<div class="fixed-header no-print">
  <div>
    <div class="text-left half info"></div>
    <div class="text-right half">
    <a class="btn btn-zen-primary-sm" href="javascript:window.print()">Print</a>  
          <a class="btn btn-zen-primary-sm" href="c_order_view.php">Back</a>  
    </div>
  </div>
</div>




<div class="pages">
    <div>
    <table class="table bordered text-left">

        <colgroup><col width="420px">
        <col>
        <col width="20%">
        <col width="15%">
        <col width="5%">

        </colgroup><thead class="inverted light-font">
            <tr>
                <th class="light-font">Product</th>
                <th class="light-font">SKU</th>
                
                <th class="text-center light-font">Qty.</th>
            </tr>
        </thead>

        <tbody>
            <?php 
			foreach($company_order_id as $company_order_id1){
				$data_picking = mysqli_query($conn,"select * from `order_data` where `id`='$company_order_id1'");
				$picking_data = mysqli_fetch_assoc($data_picking);
				$s_l_r = $picking_data['sales_r_no'];
				$company_id = $picking_data['company_id'];
				$sale_date = $picking_data['sale_date'];
				$status = $picking_data['status'];
			?>
			<?php 
					
					$pickingdatan = mysqli_query($conn,"select * from `order_data` where `sales_r_no`='$s_l_r' and `company_id`='$company_id' and `status`='$status' and `sale_date`='$sale_date'");
					while($datapickingn = mysqli_fetch_assoc($pickingdatan)){
						if($datapickingn['sku']==''){}else{
						
					?>
                <tr>
                    <td>
                        <div class="avoid" style="height: auto;">
                            

                            <div class="product-details">
                                <?php echo $datapickingn['item_title']; ?>    
                            </div>
                        </div>
                    </td>
                    <td><div class="avoid" style="height: auto;"> <?php echo $datapickingn['sku']; ?>    </div></td>
                   
                    
                    <td class="text-center"><div class="avoid" style="height: auto;"> <?php echo $datapickingn['quantity']; ?>  </div></td>
                </tr>
            <?php } ?>
            <?php } ?>
            <?php } ?>
      
                
        </tbody>

    </table>
    </div>
</div>





















        <script type="text/javascript">
            $( document ).ready(function() {
                $('tbody tr').each(function(){
                    var row = $(this);
                    var height = row.height();
                    row.find('.avoid').height(height);
                });
            });
        </script>




</body></html>