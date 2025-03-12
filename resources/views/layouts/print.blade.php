
<head>
    <style>
        body {
    color: #73879C;
    font-family: "Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif;
    font-size: 14px;
    font-weight: 400;
    }
    table { page-break-inside:auto }
    tr    { page-break-inside:avoid; page-break-after:auto }
    thead { display:table-header-group }
    tfoot { display:table-footer-group }
    </style>
</head>
<body onload="window.print()">
<table border=1>
@foreach ($listOfAsset as $item)
<tr><td style="padding:10px;">
<div id="printArea" style="display: table-row-group;">
    <div id="qrcode" style="float: left;"><img src="{{ asset('/storage/qrcodes/'.$item->no_asset.'.png') }}" alt="QR Code Asset" width="150"></div>
    <div id="" style="float: left; margin-left: 15px; color: black; font-size: 18px; line-height: 2">
        <div><b>INVENTARIS GA - PT. MHA</b><br/>
        0308 - MUTU<br/>
        No. Asset : {{$item->no_asset}}<br/>
        {{$item->item_name}}<br/></div>
    </div>
</div>
</td></tr>
@endforeach
</table>
</body>
                  