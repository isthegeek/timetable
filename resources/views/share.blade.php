<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}" media="screen,projection"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
<nav>
    <div class="nav-wrapper">
      <a href="http://www.myffcs.in" class="brand-logo center">myFFCS</a>
    </div>
  </nav>
        
<br>
<div class="row">
  <div id="target">
<table class = "highlight">
        <thead>
          <tr>
              <th class = "indigo lighten-5"  data-field="id">Days/Hours</th>
              <th class = "indigo lighten-5"  data-field="name">8-8:50</th>
              <th class = "indigo lighten-5"  data-field="price">9-9:50</th>
              <th class = "indigo lighten-5"  data-field="id">10-10:50</th>
              <th class = "indigo lighten-5"  data-field="name">11-11:50</th>
              <th class = "indigo lighten-5"  data-field="price">12-12:50</th>
              <th class = "indigo lighten-5"  data-field="id">12:40-1:30</th>
              <th class = "indigo lighten-5"  data-field="name">Lunch</th>
              <th class = "indigo lighten-5"  data-field="price">2-2:50</th>
              <th class = "indigo lighten-5"  data-field="id">3-3:50</th>
              <th class = "indigo lighten-5"  data-field="name">4-4:50</th>
              <th class = "indigo lighten-5"  data-field="price">5-5:50</th>
              <th class = "indigo lighten-5"  data-field="id">6-6:50</th>
              <th class = "indigo lighten-5"  data-field="name">6:40-7:30</th>

          </tr>
        </thead>

        <tbody>
          <tr>
          
            <td  class = "indigo lighten-5">Monday</td>
            <td id= "1">A1/L1</td>
            <td id= "6">F1/L2</td>
            <td id= "11">C1/L3</td>
            <td id= "16">E1/L4</td>
            <td id= "21">TD1/L5</td>
            <td id= "26">L6</td>
            <td class = "blue lighten-5">L</td>
            <td id= "31">A2/L31</td>
            <td id= "36">F2/L32</td>
            <td id= "41">C2/L33</td>
            <td id= "46">E2/L34</td>
            <td id= "51">TD2/L35</td>
            <td id= "56">L36</td>
            
         
          </tr>
          <tr>
          <td class = "indigo lighten-5">Tuesday</td> 
            <td id= "2">B1/L7</td>
            <td id= "7">G1/L8</td>
            <td id= "12" >D1/L9</td>
            <td id= "17">TA1/L10</td>
            <td id= "22">TF1/L11</td>
            <td id= "27">L12</td>
            <td class = "blue lighten-5">U</td>
            <td id= "32">B2/L37</td>
            <td id= "37">G2/L38</td>
            <td id= "42">D2/L39</td>
            <td id= "47">TA2/L40</td>
            <td id= "52">TF2/L41</td>
            <td id= "57">L42</td>
          </tr>
          <tr>
            <td class = "indigo lighten-5">Wednesday</td>
            <td id= "3">C1/L13</td>
            <td id= "8">F1/L14</td>
            <td id= "13">E1/L15</td>
            <td id= "18"></td>
            <td id= "23"></td>
            <td id= "28"></td>
            <td class = "blue lighten-5">N</td>
            <td id= "33">C2/L43</td>
            <td id= "38">F2/L44</td>
            <td id= "43">E2/L45</td>
            <td id= "48">TB2/L46</td>
            <td id= "53">TG2/L47</td>
            <td id= "58">L48</td>
          </tr>

          <tr>
            <td class = "indigo lighten-5">Thursday</td>
            <td id= "4">D1/L19</td>
            <td id= "9">A1/L20</td>
            <td id= "14">F1/L21</td>
            <td id= "19">C1/L22</td>
            <td id= "24">TE1/L23</td>
            <td id= "29">L24</td>
            <td class = "blue lighten-5">C</td>
            <td id= "34">D2/L49</td>
            <td id= "39">A1/L50</td>
            <td id= "44">F2/L51</td>
            <td id= "49">C2/L52</td>
            <td id= "54">TE2/L53</td>
            <td id= "59">L54</td>
          </tr>

          <tr>
            <td class = "indigo lighten-5">Friday</td>
            <td id= "5">E1/L25</td>
            <td id= "10">B1/L26</td>
            <td id= "15">G1/L27</td>
            <td id= "20">D1/L28</td>
            <td id= "25">TC1/L29</td>
            <td id= "30">L30</td>
            <td class = "blue lighten-5">H</td>
            <td id= "35">E2/L55</td>
            <td id= "40">B2/L56</td>
            <td id= "45">G2/L57</td>
            <td id= "50">D2/L58</td>
            <td id= "55">TC2/L59</td>
            <td id= "60">L60</td>
          </tr>
        </tbody>
      </table>
      </div>
        <form method="POST" enctype="multipart/form-data" action={!!action('TimeTableController@save')!!} id="myForm">
                    <input type="hidden" name="img_val" id="img_val" value="" />
                </form>
      <div class="fixed-action-btn horizontal click-to-toggle" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
      <i class="large mdi-navigation-menu"></i>
    </a>
    <ul>
      <li><a class="btn-floating green" onclick="capture();"><i class="fa fa-download"></i></a></li>
    </ul>
  </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
       <script type="text/javascript" src="{{ asset('js/html2canvas.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.plugin.html2canvas.js') }}"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71735575-1', 'auto');
  ga('send', 'pageview');

</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- GDG VIT FFCS -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1192143571859738"
     data-ad-slot="8088037006"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

        <script type="text/javascript">
            $(document).ready(function(){
                $.get( "{!! action('TimeTableController@sharetableinfo') !!}", {'id': {!! $id !!},'_token': $('input[name=_token]').val() },function( data ) {
                    $.each($.parseJSON(data), function( index, value ) {
                      $('#'+value[1]).addClass('green');
                      $('#'+value[1]).prepend(value[0]+"(");
                      $('#'+value[1]).append(")");
                    });
                });
            });
            </script>
            <script type="text/javascript">
                function capture() {
                    $('#target').html2canvas({
                        onrendered: function (canvas) {
                            //Set hidden field's value to image data (base-64 string)
                            $('#img_val').val(canvas.toDataURL("image/png"));
                            //Submit the form manually
                            document.getElementById("myForm").submit();
                        }
                    });
                }
            </script>
    </body>
  </html>


