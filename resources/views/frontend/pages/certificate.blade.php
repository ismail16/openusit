<html>
    <head>
        <style type='text/css'>
            body, html {
                margin: 0;
                padding: 0;
            }
            body {
                color: black;
                display: table;
                font-family: Georgia, serif;
                font-size: 24px;
                text-align: center;
            }
            .container {
                border: 20px solid tan;
                width: 750px;
                height: 563px;
                display: table-cell;
                vertical-align: middle;
            }
            .logo {
                color: tan;
            }

            .marquee {
                color: tan;
                font-size: 48px;
                margin: 20px;
            }
            .assignment {
                margin: 20px;
            }
            .person {
                border-bottom: 2px solid black;
                font-size: 32px;
                font-style: italic;
                margin: 20px auto;
                width: 400px;
            }
            .reason {
                margin: 20px;
            }
            .content {
                /* max-width: 500px; */
                margin: auto;
                }
        </style>
    </head>
    <body  class="content">
        <div class="container">
            <div class="logo">
                Openus IT Institute
            </div>

            <div class="marquee">
                Certificate of Completion
            </div>

            <div class="assignment">
            This is  to certify that, <b>{{ $student->name }}</b>  has completed  <b>{{ $course->title }}</b>  Training,  
            In  the  month    of <b>{{ $course->created_at->format('d M Y') }}</b> conducted, Employment and Governance (LICT) Project of
             Bangladesh Computer Council (BCC), ICT Division, People's Republic of Bangladesh on Under <br><br> <b>Openus IT Institute</b>.
            </div>

            <div class="person">
               
            </div>

            <div class="reason">
                www.openusit.com
            </div>
        </div>
        <div class="">
            <button onclick="window.print()">Print</button>
        </div>
        
    </body>
            

</html>