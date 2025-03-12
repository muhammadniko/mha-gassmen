<html lang="en"><head>
        
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="Themepixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="https://itam.mha.co.id/favicon.ico">

    <title>Asset | IT Asset Management</title>
 
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="https://itam.mha.co.id/dashbyte/css/remixicon.css">
    <link rel="stylesheet" href="https://itam.mha.co.id/dashbyte/css/apexcharts.css">
    <link rel="stylesheet" href="https://itam.mha.co.id/dashbyte/css/select2.min.css">
      <link rel="stylesheet" href="https://itam.mha.co.id/css/printqr.css">
    


    <!-- Template CSS -->
    <link rel="stylesheet" href="https://itam.mha.co.id/dashbyte/css/style.min.css">
</head>

<body>
    <div class="row">
        
        @foreach ($listOfAsset as $item)
        <div class="col-md-55">
        <div id="printArea" style="display: table-row-group">
            <div id="qrcode" style="float: left;"><img src="{{ asset('/storage/qrcodes/'.$item->no_asset.'.png') }}" alt="QR Code Asset" width="100"></div>
            <div id=""
                style="float: left; margin-left: 15px; color: black;">
                <img src="https://itam.mha.co.id/images/logo.png"
                    style="width: 110px; height: 100px; position: absolute; z-index: -1; object-fit: cover; opacity: 0.3; margin-top: 10px" />
                <div><b>INVENTARIS GA</b></div>
                <div>0308 - MUTU </div>
                <div>No. Asset : {{$item->no_asset}}</div>
                <div>Serial Number : {{$item->serial_number}}</div>
                <div>{{$item->item_name}}</div>
            </div>
        </div>
</div>
        @endforeach
    </div>
        <div id="rowSecond" class="row">
                                        <div class="col-sm d-flex justify-content-start" style="width: 45% !important; margin-top: 15px; margin-bottom: 15px; margin-left: 15px">
                    <div id="qrcode810002043" style="margin-left: 10px; margin-right: 10px" title="itam.mha.co.id/a?n=810002043"><canvas width="80" height="80" style="display: none;"></canvas><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAYAAACOEfKtAAAAAXNSR0IArs4c6QAABGxJREFUeF7tnO124jAMROH9H5o9tNA1qjxzZQe6bNWfTeKP8VgzkkPOp9Ppctr4u1z+Pn4+nz9acv/b6O7r0ayv+0V1bez7ft/OeK4zbgA3EPwCcGQNaY8wILJxtV3FlPu4s3vcnChT47jHvhrAEHIqi3y99xuALi7EFXfxrsqMI1hxB6HKwOrcG8Ageg1g2H9vx8BoI2bxJE5sXHk1aRUOsjZcuzFc/DgDG8CrqtzigmOPMs3Zs0psXJ+ZKCj2ZCwmJt+NI7NMT1HhBlCYIWJjfjWAxEh++J8k71UxUG0r2qdTVdpONWf+0UxEmVoXc+LA/2kAq6tHAvuMqUQAqC0h4uDGsTr3h0xktRGaylEVzpSO/G9nHKtz/wDwcuC+oNZmp4Iyi7NuGqs5tgO3AXQImesN4KsBjMpJ7UkWo5RCj/OiQlHF4ggxKzOwAXxMd2UqtxrsaRWkykDKsOq4lR+14nQ/VCJWYZwALTuRLW4HaQocM8NNq+ENYEDwpQy8+0AaqKvplyssjFnCbIvS8pTKcXdYJtttAB9fBFBxNiVZPFh38UhVJnaerRYOqoyiO4zMb+z725sJOyDsPNsAbh5Qvz2AVRujPNyOfaiyOCsuUBWuhoEsPi4b6QbwE4FvqZzLIqpBVqkatSdEAFwBNlvwqiVLT+ViPbABnC95CmBM5bIqSJbCVVeP5rHEeNMxZveR1PL6HI6jDWD+MkEDGKi8egzrHEXZSK8OZGcLq0kQgXFbnjoKGQNVI0fEkv8eQGqk433U+LqtkBliAvqOFVKWjNqespFuAB9hbwAHPNwuya4jEamaa7f1qkLk2ht920wwqC1RfTWAkxdId+I4esGSnulSZpE46rYTEQDC3Nk9irEPLFenckSJMnBdutQADkvQAN5+bLgaZF0ZSflLusWqhU+SuWTC4wok6c6qbmEVe6pm/FcDWGUFTQezjIRmG0RYXHyObTiFLqswSblsp+IF9bcFkCjuuDo0Zr6qWuIWTS38TuiRmQjZps6vNYCTSN8M/AQGFRNm+eUsB60Khmp/7ENZpqo4HBaOyPuBDeCNbdlXSdShEvVpq8qs4mO1b8dAKhTVfpc/OpF1RETHbW+XDcwm2ADekHlbABV1q+UsGqAz76mYXS1cqHHTrer8JfpyUQM4h7v8OxG1cs5Ux2epyV5tNxurYhTtZ7yvARxQbgCBEB3OwCO/3kYSdmd/XNCOfVT9nRIi5wBkQZWqUrzP+S+itCvHpjF+usp4Ng7VBo2fy0aaCgC1JTNmqTTyem2VsXQnOFY2gBMRUdWmh0UlZyLKGL9iC1dzZjomErYcw1FJvwEURroZqHn4IwzMAj/1X7TSTTIimjtn9ouO4ylbuAEUyxtXZiVgx2eO8HDOlhBf5/xoZmmewkDnnRrAha+3ZUq+FXuKh/MvYyDxRtd7Mm+mAHEZBe23khpaBS0ugsyFXWdxgg3gJyKoIq3YQYFXAdrFzNX+Xbtk7K5G2ACa2NEAAktGTPlMBP8AqQ/P/rIIrSAAAAAASUVORK5CYII=" style="display: block;"></div>
                    <div id="print_title" style="color: black; font-size: 8px; font-weight: bold;">
                        <div> MHA IT DIVISION </div>
                        <div>C:
                            0308-MUTU
                        </div>
                        <div>T:
                            810002043
                        </div>
                        <div>S:
                            3131905X68116
                        </div>
                        <div>M:
                            UPS APC BX110LI-MS
                        </div>
                    </div>
                </div>
                                            <div class="col-sm d-flex justify-content-start" style="width: 45% !important; margin-top: 15px; margin-bottom: 15px; margin-left: 15px">
                    <div id="qrcode810002284" style="margin-left: 10px; margin-right: 10px" title="itam.mha.co.id/a?n=810002284"><canvas width="80" height="80" style="display: none;"></canvas><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAYAAACOEfKtAAAAAXNSR0IArs4c6QAABLpJREFUeF7tnFGS2zAMQ537HzodZzatwqWBR1nuZifsV6dRHAkCAVC2e9u27b6d+HO///v67XZ7XGn8t+eln5+Nn4//9hz3/K76bJxu9Tez755Y/ravuAE8geBfADPWqOtmO6/YcGKOW8bGyFjKyplxce7jfBrAA8kh5NnHfANQ7XamX04DqZZFrZytiHHh7hqxYqprbwCD6TWAoe5+HQOpbswaADUTKhtvV8IN4O4qX7pwBEYMui40K1Cz0KyuR3+LXuNtGeg2QXUddPFZh1OVhgbwoGLoJlwCIO0YaCdCe9VqL6wW79x3Zea8vBP5GAAp8+I42omoce6kRpnNmUqgWi3TxdWnMWSBvxrAOxUMQFEadJWDKifNTlKyaVETAUuyQ24NoMVIDmgAz+G3fQPQCavqRGgJx3EzRjS7bjpHIjOP46xYwg3g69Y4PGQOJA6aCXuVUW6SpJ+eMRiSUV3/3QCau4gNoDhkXcLApwbSciXllpXwuI6qEa24V1w1j0w2UowawPxBAAxgbOWcAcQLuzaMnNFl7KSmUO1cVHU4vcsq4duTCQ3gcYxpAIPjqkCfBekygPIYR9w7oSZCJ6lMhGbEzESImbm1yBJuAF8NJtsE1MqpE6/MRJSDqTizf+aEPF6bzi0zm9nbAuOaG8Bh02bIgFo5GoLpCUb1JOUMy+KcKMNpeG8Aza1RZT6P46xnkJ7dGfq9KutcuFZsrx7pE4c+mg8K0tni6a0U1bCfKfn4+zP6Ra7hrtsADuxwbWnKbFXCNOiSftRpySwbabnOVgIO0tTpqDupQ4fqAQPtNpTjNoAHKL4NA0lSp05qhVe8kDNbyrTDOXOwmrZyZ88DXdtGGUJKnm5gJjPkQMIliyUAVnewqj1uEYSh1U1TtzNcHkUxxjkRMYWqSTm2rdzIBjCg/aMMdJRVWrWCZZQNkfXubuGsLjpzkm9rEj1yjqvCuDKgqmy8JYAq2lTD7Th+hbFU72cQnc7W5EiE3hembCAt3T7mYwB06I9g7H9XOqMY6/pkBfisG2fzdUdz2fou0UCqiyrTZax3C4yb5MZHQKrjHwRSD5k3A19ffZMMpOVHxDszjBXxaAWzlVHMSIl8Y91RetSRI41zkyLfo5urMipJDW6uaUYl90RIKR+5KzEAslFHANCATDbBZck0tzaA/2BpAL+wqLJSpQFV+i8uTMsom1wM0FUtcTtPemw6fwdItWM5fV84c9ePAvDqV71m2ZMK9vBIXbyuYzFpM93GZ6V++ateDSAVjcLr93EnqzEpy58/xsCV7wsXsH4MnSmZo34361Lc9WNGdZuQGlUDmJ8iqZbvpVUlj3YoQafxgZ4p0gxH2E5PdDJzIHHN5kA1SdKiZRHnqHRVllSLUXP8EQCpDqSNNXxyn7DnpUySJxnOHKRWft8Z3CX/fyDVD7qQFZvliHE0lwbwC5mPAbBampkBZF1HVbOxtkYXdjul7iPMLj7Tu6oMVDMf/U03j8s1cGUrR+OU0swVzixz4GoGNoBh26sl/HEAnokW1e8qfaGVQE1ElX9mOqo7kSVcBcHlJDLxrGP5dQBS4OI4CmB2WqLYQ+dDJGI2JO/fs+7+v05jGsCDbfx0Bv4BZIP6BA3qIHQAAAAASUVORK5CYII=" style="display: block;"></div>
                    <div id="print_title" style="color: black; font-size: 8px; font-weight: bold;">
                        <div> MHA IT DIVISION </div>
                        <div>C:
                            0308-MUTU
                        </div>
                        <div>T:
                            810002284
                        </div>
                        <div>S:
                            3131905X68255
                        </div>
                        <div>M:
                            UPS APC BX110LI-MS
                        </div>
                    </div>
                </div>
                        </div>
        <div id="rowSecond" class="row">
                                        <div class="col-sm d-flex justify-content-start" style="width: 45% !important; margin-top: 15px; margin-bottom: 15px; margin-left: 15px">
                    <div id="qrcode810001862" style="margin-left: 10px; margin-right: 10px" title="itam.mha.co.id/a?n=810001862"><canvas width="80" height="80" style="display: none;"></canvas><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAYAAACOEfKtAAAAAXNSR0IArs4c6QAABJtJREFUeF7tnOt2wyAMg9v3f+ju9JKMUEf6DPRsO/N+dgkBIcuyQ3u9XC63y8Tf7cZuv16v+1O2e9rPtn+S/7XT3caI5hE9M7p3YvmX+6oYAidPKQBfAFIgNhyzO7+CbSvY065TrUGxsl3LzsACkAeyBDBiSjt0r1FUe9S4M2PQjY/Y1n+WXfsdlzcGZgeZWXyfOM5CNJtYIi4VgPfdbjK5Av/PA6gWEMnBiC3pnxElh+yzstH3sRAuAEVCUknE7aBizag9onZDabXSWJVAlzOwADwRampjCkDuJfeM6HzYqH1wFQOphGbGoNLwkUrEZVViYGcWTzbtoV8vW+RI0IMZViIJ8h0uHVmoAjASdPLZzDxG135IIqODzEycAHOfF7luZh6ja38AeMvyVzxNhY4yta5v11ucaAq0pJwBK/S3BeAcpMXAOfzeQ5gW7NTzZfUrClelMrRNRq6jUnJwGX0IF4BPeGhqkD6Q+ilSx1JjiifetbZcN2Z7vsvWZC24pV8AxkwsAF80y5aDkT7L15pZ8V5xPRH7qFR0yTSbzGiSLABPamIMIDHS2fROH64qCvfMbENCVTOKnY7tyEi7xfRAFIAdIgXgE5CIGG8aOOrDMuaTNAei5kOW2c4bkvc7bowC0CQRC6Aq5cibLCeyUQVAqhIXCVm7Q54Zsd7Zo7ck4vSOmE+VXe2EYJv91wDYnw90O69qRQpu/wy3aUQzszUu1Ww3t2kNXDFxN8kCsLMA/5qBJEwpKwmzzjRzxSaQMVx0pEO4ADxu6Z6FVe/PZU71f5KUol22Ox+cFczOg2Ty6JpDhG0+sAA8wh81GCJPWww8oW0awKygk9BsC3Ba1ax4jUBCM5oblZL2OlmJZDUlun5F0hkdw1VEqqdIOtiPTch+U0lRO9QIUJq5hKE2xoGkKidSVbn6uABMtPRDGSoGxucEnX3Z2bsBOCPyKgGRcVeEsKt+SGKh8zgkkQJQnz90+it9YMQskkScsPdscF1fmhGJaxhhmRq3ADxBR4V8e4v8siExy9R8ulCILFDGgjjWk2hSen2/P4qEAtCc1ncEKQBnAVRHO36ihKKhSMLbyQZpGDgtlEc7CsD4NMIhiah+oBJeZZ5d/UjuzRpjlwCySYqQ59FMKAB1Kec2pgBMHO2IIgcdMo9CkhbbysU7kSdhl7kmMxfHvFQzoQB8IhCRBh2wpDtH2/Era2HFYpeI+nudaQ5ZSY74FoBPBApA8w2kIQZmO9I9G10rilQWIy0m1eggzdNW00hFEl3/+KwAjLssUXYPNV51pJX2Kac+Y0+o3q6oZrJJJAS1APyG0WkgAtB1H3q9cIaTvAJwdmPUtLu1KLbT1wi/7ufvlJeMDD2RmawstJbFsbIAPEH3RxhIEwu1GdlEQZhGLRMZ62BjiFZF1Hb6RTNyJND/FkCqVZSxROfcRtI6nTJv39zexrjMpbJwNlsWgF1tWQAm+EvfGZBs5uppUve6MZTGKp12PvcjP3/nvNOnZSCb5ZcAmCDf4VK3Q9lx1XiEiWfPy96rrm+fsbQbQ2yHA7QABL/DSmrQwy4nz1lH43+KgV9CMjYWTTS3AQAAAABJRU5ErkJggg==" style="display: block;"></div>
                    <div id="print_title" style="color: black; font-size: 8px; font-weight: bold;">
                        <div> MHA IT DIVISION </div>
                        <div>C:
                            0308-MUTU
                        </div>
                        <div>T:
                            810001862
                        </div>
                        <div>S:
                            3131911X71680
                        </div>
                        <div>M:
                            UPS APC BX1100LI-MS
                        </div>
                    </div>
                </div>
                                            <div class="col-sm d-flex justify-content-start" style="width: 45% !important; margin-top: 15px; margin-bottom: 15px; margin-left: 15px">
                    <div id="qrcode810003166" style="margin-left: 10px; margin-right: 10px" title="itam.mha.co.id/a?n=810003166"><canvas width="80" height="80" style="display: none;"></canvas><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAYAAACOEfKtAAAAAXNSR0IArs4c6QAABJBJREFUeF7tnduSozAMRJP//+hskYGMcUT3kTFVm4n2cTDGbrUuLRP2frvdHrcT/x4Pdvv9fn89Zbun/dt2kVxrl7vNEa0jemZ074nt35ZdMQQOnlIArgBSIDYcs5afwbYZ7Gn3qfagWNnu5cXAApA7sgQwYko7dR+jaOxR856Zgxo+Ylv/t+zeF1zeGJid5Mzm+8Rx5KLZxBJxqQBcrN1kcgX+xwOoNhCFg5GyhLKXjFMMV+HrMhcuAEVCUkmEJop+nIujJD+6OdT1/4aBBeBBoKZlTAFIfGUdM1rFu4RByo1Zc4zu4XIlQu1AwSKy0Uk0+iyy9hBAcmM0ZsbCXacmCvIkmdG1je59V8aMTkIXqcZ9NIAPKiYBwk4GHhW1IwD2yxkpY8CW7JB7AWgxkgMKwHP43d4ApIJ91F2dzBuNKG7dpEaNQonDtwBczjTWc50hALczEaIVn2l7bSm5oJ0J8lGGdpYnXZaRsmu7h+5TtvSzxSdxE6oiCsAOgSzDPw5AR/f+ugraNKDThEE8wSW1UTXjDCnPhdUGC8AfaFEdmM1OI2xQliZZ0rG+Tw7t88j8bQLdxXGiRArAlW3BoVYxMFEHRix/i4Guu6JcgdZmpBVFXYyWTiRmu70XgAelFcnyOAa6eNc/zCUMxUqli7NKJ2KsK0FIYnFzSC1Mit8CcEVJaT/KFKofe8M41mfj7ug61D6XayGhtjKmAIyd1Rn35cIF4CCApJ2V1cm7Sl20v4hrHgXxGWGAzGEZWAD+migCCwMYlRskGLtmKOm4DC08kFVET0feoTzMaezTSqQA7H7m4ORMH7e+HsC+jHEalOjdGUaYMYdLfkpVkQbsU94VgPpUzsVnBCBVIqPjXKZzCqG/TiSoK7Vc8niFMsLAUWCeFE/WgSRrt/M6N1Uxe0Y8LwYeGHkqA7Mu5saT4K1quoiBLumQxitd9879iQu7ifvNuvF/CsBeyrmsk23HK4Uzqn6W+6IygygRZ1yiz3dsLwBj2InLP0OJ+sE1yYgjFlXsyZYgijHuWEB5UzRvtO4CMPHGWQHY/ZBoCgPVmwmj7SzqOtT9onXQGEUqBFXzqefstHBWbahNfSWAhG1t+UDSfWsUV+hmmZJNcFHJRKScIwM6VFKZ1lE8W+vR7FcAHpyzfhyA2UOlbA1HYitlMe28ZMMLnTdaJ3rJPIpltFvx5wEkL1i6zggtR46CtmNglvXZCuFM2EAvWBaAPwiEGbkY+EsP2olqCTX16200Lqp+YLbsOaNSZqyjADS9RScALvl6m8q8bSxxyaNnIx2fZTFNIuG8qg5UyUNJv68G0Fk52wJSbKBMobG1N5zbiyIIfjNBtfRVhU6bDwVgh2IxcP8ZvqkfYKQKoHct11kZbZ7SWEzk5pG7F4AHyNAkeQmAUfPhjJWz1UDWE5wHyOfPTCLZbEmtXACedJOPAlAtdiei4dc7SD0VyaUzYWBG0qFl2iVSjnY1aCNAxSg6R1SPZpkdSb6pzYToAZTRaoMkVjrVQYxAWb/zxCv+MwK3GSKhaLigRisAE6d4SoK64jrr6v8AQUSHEE5z8q8AAAAASUVORK5CYII=" style="display: block;"></div>
                    <div id="print_title" style="color: black; font-size: 8px; font-weight: bold;">
                        <div> MHA IT DIVISION </div>
                        <div>C:
                            0308-MUTU
                        </div>
                        <div>T:
                            810003166
                        </div>
                        <div>S:
                            XAGKO99379
                        </div>
                        <div>M:
                            PRINTER EPSON L3210
                        </div>
                    </div>
                </div>
                        </div>
        <div id="rowSecond" class="row">
                                        <div class="col-sm d-flex justify-content-start" style="width: 45% !important; margin-top: 15px; margin-bottom: 15px; margin-left: 15px">
                    <div id="qrcode810001955" style="margin-left: 10px; margin-right: 10px" title="itam.mha.co.id/a?n=810001955"><canvas width="80" height="80" style="display: none;"></canvas><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAYAAACOEfKtAAAAAXNSR0IArs4c6QAABJdJREFUeF7tnNty4zAMQ53//+h0cnEqqxRwKDk7mwn7WNu6gCAJ0oov27Zdt4W/65U9frlcXrPsz7T/2y+Sa+1y9zGidURzRs8ubH+77YohMJilAHwCSIHYccxa/gy2ncGedp9qD4qV7V5eDCwAuSNLACOmtEP3MYrGHjXuyhjU8BHb+v9l937D5Q8Ds4OsbL5PHCMXzSaWiEsF4M3aTSZX4H88gGoDUTiYkSWUveQ+xXAVvt7mwgWgSEgqibj42Q+r4qeLrcSFqZD+bxhYAA4CNZUxBSDXkq+M6HQY0X8UeOryRLLcE8Azq7s99LC8vRKhJReNPZlMOgKGgko4FAJIHozucbUlWbjr1ERAk2RG1za794OMmR2ELlLd99EAXrMBQCBN2Ba5mIuBioHK8E7GzJLmEKIKwDUYLwXgyQDSgt25XZ85VZyL4qOrmffrRCa1YUMlwhmX/8PAAvABMU0NsiNNk4Jig1pI1liKqY7FkZZUQppcO8iYFZVfAA4oWwyMXRlXIrPul00wrvQjlYjLpWQMGgYO61XvhQtAZ5ZtQzpwJr33U1O5QeRJJHGyCcmNQRu6BWAT/x1RIiMVgKsA9jHQdVdmJYuPJo87Vlyxn8MlhdmWmEwiBeDRkM4I6VKOtMEpiyJW0gpAMZqWYWd4UwGYCBuhwVd14IzL9wxx2Y9ImzPWEQl6x2Z5wJII6TMWXgA+TUfj19cwkLSAXMKYTTpO9pxhBDKG8w50Rpq+USOAq8zrQIvKryg+ktBze+4UAPd3Iqp1RSWDY+NoHNXujzY6Etx0nZmk5Pb0kjEF4BH+qP0VelgxMOYtBnDXgeqBaAqnj3o3WXllQLK7K7lIfKahJOxIF4DHRgbpYN9jce/ClG20QZqVMVlmZ9eb9QSV+QtAUQC47PsKUcXA+KAlBnC2oUoFMXEZp/bJXK4mJyHHrSNs6ReAvxXJEoDZ8kdZdCWwK9dRG3TrUVmVMHxYRfU60A2WlTuR/lIa8WMBpKzp76Pis33OsWVkbeolxGhtjU2EenT/XcbMdqSjgpy6SQHYUOTrGaiO+BJq0xpUKXrHSOK6MxUMaRi4tcmTCQVg/KL/EM9VO0vFueiaSkTOkqPEMWJuP54S7LaeDX7yRcgT1sJuIaoNXgCak6ptKi8GPhBAh8wjF6DFNnFNKt7Vfc5zsuug4xWAA2QxgO/4pZKramiA7isKV+z3YcV1aPp1TmnaAvAXxgLwiUXE8NlXC4716GSCCsDUTWgrisYeUp1kQ4lLjKFhzvz8HY1t5EjFQe0nv1ikRLsy+BKAtJZUgVoxlW7KSRqVWPpnqXdEmpbUyVYHEkAo8F8DoKtZe8usAIitfMLnSWaFtMvMb/n83RlumHU/OicFUjWHW1ALQFOJ/FMGUv2VjYd0XMIup+uySfJUBtKNFoCD7045HTWqPWkiot2YrCFXxPtbGBi1v+jmiRtGItslHQpqpAl77XmYP3vAUsmYYmDC/NmyTWUz92aP1L1uDMWirHdIGUMxLAAfSJ3ajVHxgxpGBXTCxNE82WdpYisA3/lrTcIaKgHIWLd7Po2BP9s8ORYwheQzAAAAAElFTkSuQmCC" style="display: block;"></div>
                    <div id="print_title" style="color: black; font-size: 8px; font-weight: bold;">
                        <div> MHA IT DIVISION </div>
                        <div>C:
                            0308-MUTU
                        </div>
                        <div>T:
                            810001955
                        </div>
                        <div>S:
                            X6NX185288
                        </div>
                        <div>M:
                            PRINTER EPSON L3110
                        </div>
                    </div>
                </div>
                                            <div class="col-sm d-flex justify-content-start" style="width: 45% !important; margin-top: 15px; margin-bottom: 15px; margin-left: 15px">
                    <div id="qrcode810001816" style="margin-left: 10px; margin-right: 10px" title="itam.mha.co.id/a?n=810001816"><canvas width="80" height="80" style="display: none;"></canvas><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAYAAACOEfKtAAAAAXNSR0IArs4c6QAABKdJREFUeF7tnO124jAMROH9H5o9tIQaI89c2c5u21V/lsQf45FmpASul8vldln4u93Y7dfr9TnLcU/7v+ND8lm73GOMaB3RnNG9C9u/3HfFEBjMUgA+AKRAHDhmT34H23awp92n2oNiZbuXJwMLQB7IEsCIKe3QfY6iuUeNuzIGPfiIbf3/snu/4/LGwOwgK5vvhWMUollhibhUAN5Pu1FyBf6PB1BtIEoHThwUAyMgKdDfNoQLQCFISkSyQsF17/NKZcZpLlYmPJv/t4tIAThI1NTGFICJmKIunoCarZNdLUwsS5sSqJfsq7AwhCmGBeAjL+9sJsyevGNgZGOImLm614kGIdPWbsx/CeAtmwDEsSgAlYHOGt/7WGTZrh9IGOauuRaADiL9eQG4ht/lDcCZcFJrUKE2G/J9VTKaPxKR6FolUg7fArDJpzM5U3akqapGBjPqkvSnSdkesaC/N8s2Z6SVz23nLgAHil4ADpKXM9d9NLkujzTSRACUv6PJ3iXq7DqyQkHFLEwlqpTLLtydlgOKqCnJo38VQGKkZ9RJCUtWYNTBZB84KeFy+4zuRUbaDayYRdpZTmULQJDQVWh+awD7HEiK9JE40HtJeM/my5GokdB1Ch2GcAH49bBqCkAiIu2p9pLvmqFZwSDXO3u0MxLcWEhECsBxQlk20o72Ub7rT5WqPFV0WoYRn2sZuGqkC0Dxhmr2hGZP/tcyMEroBCTKyhU7syMNkDHc4aKnchSQbP/wVwB42BiVoJWpdY1Ml4R7S0Lb69n1ZhsdtMZ+2pjsglR4uxYXKdts6AQvW9KDJswvADs0T2egOhWaA1VXhTQE2nCmc2aboWpcV1VFrEw/lVMqXACC9wNJl4Syh1Qpo/loVdLPkY0El88RAwloro1ETPl9DKLaM82EWf9aAD4QOA3Aoxam1FZsVE3LbEfHsb6fy6UNEvLOOkUpJ/1gvQB8/bbAm5F2OegMw02rGcUQty5a4RCT/RJNfSlXAH7C4w7kCXS2H5ht6auTp4tUZSMtuZRlIgLTOoR23emOdAHY5cBiYPxUjjD2I9TVUzlCbScAUfj1Sk5r0MgKkfFH95Hwd2mmADTfQ8YAErZFpZabgJZwzjj3c5Omxqyxb1XYtcGQD9zhvyKAHPj9Pa7aUKlBhbpqiRWAHaq0ZKURiUq5qCNBw4OEpmMnSQOOKdl10PEKwAGyGMDsy0XZZgKpIpQ9GVUAWVZmRYfWzumXiwrAVwQKwAaPKUN/xheuXcJ2HZ+RHaH3keZp5PWcMIZ2pwD8eg6zBCA93b7Idmql6s1sHevszk7jTerkDxarZyJEMArA7gcYXXnVn4xjrhtvdEiuy+PmbXOcy8nR57QRfMrP3zlfRzZUAD5QKgYOivFsB0Ox0oUjtSWE2aqzFK3Rrq0XEccYlQNJuRTlJrtI8S6gu3fkKdsSUam7G39rDnQ+atUg043S6KAHLt3IGQxsJ8wW/SQMXagVgAkUV8A6hYF07bRjS/zUimVRACp/5/ZJ9/dPKhEiRCtpYIdqpwF0J0IqhuMap+RqLvrMQqlrlnlZ8XvJwTu7MQXgBA1dMyE75E9j4B/GEAMWXA4kPwAAAABJRU5ErkJggg==" style="display: block;"></div>
                    <div id="print_title" style="color: black; font-size: 8px; font-weight: bold;">
                        <div> MHA IT DIVISION </div>
                        <div>C:
                            0308-MUTU
                        </div>
                        <div>T:
                            810001816
                        </div>
                        <div>S:
                            X6NX779924
                        </div>
                        <div>M:
                            PRINTER EPSON L3110
                        </div>
                    </div>
                </div>
                                    </div>
    </body></html>