<?php
include ("inc/header.php");
?>
<div id="navbar-main" class="navbar-collapse collapse" style="height: 1px;" aria-expanded="false">
    <ul class="nav navbar-nav">
        <li>
            <a href="inventaire.php">Inventaire</a>
        </li>
        <li class="active">
            <a href="plans.php">Plans</a>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Prêt<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="pretEntreprise.php">Entreprise</a></li>
                <li><a href="pretPersonnel.php">Personnel</a></li>
            </ul>
        </li>
    </ul>
</div>
</div>
</div>
<div class="container">
    <div class="page-header"></br>
        <div class="row">
            <div class="col-lg-12">
                <h1>Plans</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 porte">
            <label class="control-label">Sélectionner le plan :</label>
            <select id="changeBuilding" class="form-control">
                <option selected disabled>Sélectionner un bâtiment</option>
                <option value="A">Bâtiment A</option>
                <option value="B">Bâtiment B</option>
                <option value="C">Bâtiment C</option>
                <option value="D">Bâtiment D</option>
                <option value="E">Bâtiment E</option>
                <option value="G">Bâtiment G</option>
            </select></br>

            <!-- BATIMENT A -->

            <div id="BatA" class="building-map">
                <ul class="nav nav-tabs">
                    <li class="active"><a aria-expanded="true" href="#A0RDC" data-toggle="tab">A RDC</a></li>
                    <li class=""><a aria-expanded="false" href="#A0ET1" data-toggle="tab">A Etage 1</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="A0RDC">
                        <img src="img/salles/Plans Bat A0 Niv 00.png" usemap="#Plans Bat A0 Niv 00"/>
                        <map name="Plans Bat A0 Niv 00">
                            <area id="A001" shape="rect" coords="1019,534,1073,562" href="#myModal" data-toggle="modal"/>
                            <area id="A002" shape="rect" coords="968,153,998,176" href="#myModal" data-toggle="modal"/>
                            <area id="A003" shape="rect" coords="951,40,973,71" href="#myModal" data-toggle="modal"/>
                            <area id="A004" shape="rect" coords="910,152,941,176" href="#myModal" data-toggle="modal"/>
                            <area id="A005" shape="rect" coords="816,152,847,176" href="#myModal" data-toggle="modal"/>
                            <area id="A006" shape="rect" coords="709,152,740,175" href="#myModal" data-toggle="modal"/>
                            <area id="A007" shape="rect" coords="601,152,633,176" href="#myModal" data-toggle="modal"/>
                            <area id="A008" shape="rect" coords="439,152,469,176" href="#myModal" data-toggle="modal"/>
                            <area id="A009" shape="rect" coords="419,28,443,59" href="#myModal" data-toggle="modal"/>
                            <area id="A010" shape="rect" coords="329,153,362,175" href="#myModal" data-toggle="modal"/>
                            <area id="A011" shape="rect" coords="220,153,252,176" href="#myModal" data-toggle="modal"/>
                            <area id="A012" shape="rect" coords="182,28,205,60" href="#myModal" data-toggle="modal"/>
                            <area id="A013" shape="rect" coords="168,151,198,175" href="#myModal" data-toggle="modal"/>
                            <area id="A014" shape="rect" coords="4,232,40,298" href="#myModal" data-toggle="modal"/>
                            <area id="A015" shape="rect" coords="56,469,81,489" href="#myModal" data-toggle="modal"/>
                            <area id="A016" shape="rect" coords="207,232,239,254" href="#myModal" data-toggle="modal"/>
                            <area id="A017" shape="rect" coords="371,232,403,255" href="#myModal" data-toggle="modal"/>
                            <area id="A018" shape="rect" coords="534,232,566,255" href="#myModal" data-toggle="modal"/>
                            <area id="A019" shape="rect" coords="614,248,637,280" href="#myModal" data-toggle="modal"/>
                            <area id="A020" shape="rect" coords="708,311,739,332" href="#myModal" data-toggle="modal"/>
                            <area id="A021" shape="rect" coords="816,310,850,333" href="#myModal" data-toggle="modal"/>
                            <area id="A022" shape="rect" coords="830,471,855,501" href="#myModal" data-toggle="modal"/>
                            <area id="A023" shape="rect" coords="925,310,957,332" href="#myModal" data-toggle="modal"/>
                            <area id="A024" shape="rect" coords="925,364,956,387" href="#myModal" data-toggle="modal"/>
                            <area id="A025" shape="rect" coords="942,474,963,502" href="#myModal" data-toggle="modal"/>
                        </map>
                    </div>
                    <div class="tab-pane fade" id="A0ET1">
                        <img src="img/salles/Plans Bat A0 Niv 01.png" usemap="#Plans Bat A0 Niv 01"/>
                        <map name="Plans Bat A0 Niv 01">
                            <area id="A101" shape="rect" coords="241,215,274,240" href="#myModal" data-toggle="modal"/>
                            <area id="A102" shape="rect" coords="519,214,552,239" href="#myModal" data-toggle="modal"/>
                            <area id="A103" shape="rect" coords="796,215,829,240" href="#myModal" data-toggle="modal"/>
                            <area id="A104" shape="rect" coords="859,215,893,240" href="#myModal" data-toggle="modal"/>
                            <area id="A105" shape="rect" coords="905,163,929,194" href="#myModal" data-toggle="modal"/>
                            <area id="A106" shape="rect" coords="1077,320,1108,342" href="#myModal" data-toggle="modal"/>
                            <area id="A107" shape="rect" coords="796,320,828,343" href="#myModal" data-toggle="modal"/>
                            <area id="A108" shape="rect" coords="360,320,392,343" href="#myModal" data-toggle="modal"/>
                            <area id="A109" shape="rect" coords="138,319,170,342" href="#myModal" data-toggle="modal"/>
							<area id="A110" shape="rect" coords="224,15,283,37" href="#myModal" data-toggle="modal"/>
							<area id="A111" shape="rect" coords="126,486,150,529" href="#myModal" data-toggle="modal"/>
							<area id="A112" shape="rect" coords="291,160,317,206" href="#myModal" data-toggle="modal"/>
							<area id="A113" shape="rect" coords="349,490,376,532" href="#myModal" data-toggle="modal"/>
							<area id="A114" shape="rect" coords="571,135,602,195" href="#myModal" data-toggle="modal"/>
                        </map>
                    </div>
                </div>
            </div>

            <!-- BATIMENT B -->

            <div id="BatB" class="building-map">
                <ul class="nav nav-tabs">
                    <li class="active"><a aria-expanded="true" href="#B1RDC" data-toggle="tab">B1 RDC</a></li>
                    <li class=""><a aria-expanded="false" href="#B1ET1" data-toggle="tab">B1 Etage 1</a></li>
                    <li class=""><a aria-expanded="false" href="#B1ET2" data-toggle="tab">B1 Etage 2</a></li>
                    <li class=""><a aria-expanded="false" href="#B2RDC" data-toggle="tab">B2 RDC</a></li>
                    <li class=""><a aria-expanded="false" href="#B2ET1" data-toggle="tab">B2 Etage 1</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="B1RDC">
                        <img src="img/salles/Plans Bat B1 Niv 00.png" usemap="#Plans Bat B1 Niv 00"/>
                        <map name="Plans Bat B1 Niv 00">
                            <area id="B1001" shape="rect" coords="1082,211,1112,236" href="#myModal" data-toggle="modal"/>
                            <area id="B1002" shape="rect" coords="1090,117,1116,137" href="#myModal" data-toggle="modal"/>
                            <area id="B1003" shape="rect" coords="1028,210,1060,234" href="#myModal" data-toggle="modal"/>
                            <area id="B1004" shape="rect" coords="1031,117,1060,139" href="#myModal" data-toggle="modal"/>
                            <area id="B1005" shape="rect" coords="932,117,960,138" href="#myModal" data-toggle="modal"/>
                            <area id="B1006" shape="rect" coords="816,116,845,138" href="#myModal" data-toggle="modal"/>
                            <area id="B1007" shape="rect" coords="756,211,787,235" href="#myModal" data-toggle="modal"/>
                            <area id="B1008" shape="rect" coords="704,211,735,235" href="#myModal" data-toggle="modal"/>
                            <area id="B1009" shape="rect" coords="362,46,386,78" href="#myModal" data-toggle="modal"/>
                            <area id="B1010" shape="rect" coords="322,210,353,234" href="#myModal" data-toggle="modal"/>
                            <area id="B1011" shape="rect" coords="11,198,72,228" href="#myModal" data-toggle="modal"/>
                            <area id="B1012" shape="rect" coords="409,456,438,509" href="#myModal" data-toggle="modal"/>
                            <area id="B1013" shape="rect" coords="411,371,440,424" href="#myModal" data-toggle="modal"/>
                            <area id="B1014" shape="rect" coords="472,316,528,344" href="#myModal" data-toggle="modal"/>
                            <area id="B1015" shape="rect" coords="794,316,849,345" href="#myModal" data-toggle="modal"/>
                            <area id="B1016" shape="rect" coords="968,315,1001,337" href="#myModal" data-toggle="modal"/>
                            <area id="B1017" shape="rect" coords="1077,318,1099,341" href="#myModal" data-toggle="modal"/>
                            <area id="B1018" shape="rect" coords="1083,340,1115,356" href="#myModal" data-toggle="modal"/>
                        </map>
                    </div>
                    <div class="tab-pane fade" id="B1ET1">
                        <img src="img/salles/Plans Bat B1 Niv 01.png" usemap="#Plans Bat B1 Niv 01"/>
                        <map name="Plans Bat B1 Niv 01">
                            <area id="B1101" shape="rect" coords="209,316,239,337" href="#myModal" data-toggle="modal"/>
                            <area id="B1102" shape="rect" coords="319,316,350,339" href="#myModal" data-toggle="modal"/>
                            <area id="B1103" shape="rect" coords="482,316,513,338" href="#myModal" data-toggle="modal"/>
                            <area id="B1104" shape="rect" coords="634,316,665,339" href="#myModal" data-toggle="modal"/>
                            <area id="B1105" shape="rect" coords="751,316,782,338" href="#myModal" data-toggle="modal"/>
                            <area id="B1106" shape="rect" coords="1033,211,1064,234" href="#myModal" data-toggle="modal"/>
                            <area id="B1107" shape="rect" coords="644,211,675,234" href="#myModal" data-toggle="modal"/>
                            <area id="B1108" shape="rect" coords="486,211,518,234" href="#myModal" data-toggle="modal"/>
                            <area id="B1109" shape="rect" coords="315,211,346,235" href="#myModal" data-toggle="modal"/>
                        </map>
                    </div>
                    <div class="tab-pane fade" id="B1ET2">
                        <img src="img/salles/Plans Bat B1 Niv 02.png" usemap="#Plans Bat B1 Niv 02"/>
                        <map name="Plans Bat B1 Niv 02">
                            <area id="B1201" shape="rect" coords="208,316,238,338" href="#myModal" data-toggle="modal"/>
                            <area id="B1202" shape="rect" coords="264,316,295,338" href="#myModal" data-toggle="modal"/>
                            <area id="B1203" shape="rect" coords="481,316,513,338" href="#myModal" data-toggle="modal"/>
                            <area id="B1204" shape="rect" coords="762,316,792,338" href="#myModal" data-toggle="modal"/>
                            <area id="B1205" shape="rect" coords="1083,211,1113,234" href="#myModal" data-toggle="modal"/>
                            <area id="B1206" shape="rect" coords="531,213,584,233" href="#myModal" data-toggle="modal"/>
                            <area id="B1207" shape="rect" coords="477,211,508,234" href="#myModal" data-toggle="modal"/>
                            <area id="B1208" shape="rect" coords="207,211,238,234" href="#myModal" data-toggle="modal"/>
                            <area id="B1209" shape="rect" coords="172,154,194,185" href="#myModal" data-toggle="modal"/>
                            <area id="B1210" shape="rect" coords="212,128,243,151" href="#myModal" data-toggle="modal"/>
                        </map>
                    </div>
                    <div class="tab-pane fade" id="B2RDC">
                        <img src="img/salles/Plans Bat B2 Niv 00.png" usemap="#Plans Bat B2 Niv 00"/>
                        <map name="Plans Bat B2 Niv 00">
                            <area id="E001" shape="rect" coords="8,288,40,355" href="#myModal" data-toggle="modal"/>
                            <area id="B2001" shape="rect" coords="36,280,72,317" href="#myModal" data-toggle="modal"/>
                            <area id="B2002" shape="rect" coords="80,247,139,279" href="#myModal" data-toggle="modal"/>
                            <area id="B2003" shape="rect" coords="155,279,218,313" href="#myModal" data-toggle="modal"/>
                            <area id="B2004" shape="rect" coords="281,280,345,313" href="#myModal" data-toggle="modal"/>
                            <area id="B2005" shape="rect" coords="437,295,471,359" href="#myModal" data-toggle="modal"/>
                            <area id="B2006" shape="rect" coords="741,251,777,279" href="#myModal" data-toggle="modal"/>
                            <area id="B2007" shape="rect" coords="1068,252,1105,279" href="#myModal" data-toggle="modal"/>
                            <area id="B2008" shape="rect" coords="1067,374,1104,400" href="#myModal" data-toggle="modal"/>
                            <area id="B2009" shape="rect" coords="938,374,976,401" href="#myModal" data-toggle="modal"/>
							<area id="B2011" shape="rect" coords="802,17,839,80" href="#myModal" data-toggle="modal"/>
							<area id="B2012" shape="rect" coords="948,554,988,630" href="#myModal" data-toggle="modal"/>
							<area id="B2013" shape="rect" coords="475,164,516,223" href="#myModal" data-toggle="modal"/>
                        </map>
                    </div>
                    <div class="tab-pane fade" id="B2ET1">
                        <img src="img/salles/Plans Bat B2 Niv 01.png" usemap="#Plans Bat B2 Niv 01"/>
                        <map name="Plans Bat B2 Niv 01">
                            <area id="B2101" shape="rect" coords="1012,252,1049,280" href="#myModal" data-toggle="modal"/>
                            <area id="B2102" shape="rect" coords="879,252,917,280" href="#myModal" data-toggle="modal"/>
                            <area id="B2103" shape="rect" coords="617,252,654,279" href="#myModal" data-toggle="modal"/>
                            <area id="B2104" shape="rect" coords="486,252,524,280" href="#myModal" data-toggle="modal"/>
                            <area id="B2105" shape="rect" coords="160,252,198,279" href="#myModal" data-toggle="modal"/>
                            <area id="B2106" shape="rect" coords="89,376,126,402" href="#myModal" data-toggle="modal"/>
                            <area id="B2107" shape="rect" coords="612,376,649,402" href="#myModal" data-toggle="modal"/>
                            <area id="B2108" shape="rect" coords="811,376,847,402" href="#myModal" data-toggle="modal"/>
                        </map>
                    </div>
                </div>
            </div>

            <!-- BATIMENT C -->

            <div id="BatC" class="building-map">
                <ul class="nav nav-tabs">
                    <li class="active"><a aria-expanded="true" href="#C1RDC" data-toggle="tab">C1 RDC</a></li>
                    <li class=""><a aria-expanded="false" href="#C1ET1" data-toggle="tab">C1 Etage 1</a></li>
                    <li class=""><a aria-expanded="false" href="#C2ET-1" data-toggle="tab">C2 Sous sol 1</a></li>
                    <li class=""><a aria-expanded="false" href="#C2RDC" data-toggle="tab">C2 RDC</a></li>
                    <li class=""><a aria-expanded="false" href="#C2ET1" data-toggle="tab">C2 Etage 1</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="C1RDC">
                        <img src="img/salles/Plans Bat C1 Niv 00.png" usemap="#Plans Bat C1 Niv 00"/>
                        <map name="Plans Bat C1 Niv 00">
                            <area id="C1001" shape="rect" coords="26,246,51,265" href="#myModal" data-toggle="modal"/>
                            <area id="C1002" shape="rect" coords="80,214,121,254" href="#myModal" data-toggle="modal"/>
                            <area id="C1003" shape="rect" coords="232,239,274,263" href="#myModal" data-toggle="modal"/>
                            <area id="C1004" shape="rect" coords="363,240,406,262" href="#myModal" data-toggle="modal"/>
                            <area id="C1005" shape="rect" coords="417,239,441,264" href="#myModal" data-toggle="modal"/>
                            <area id="C1006" shape="rect" coords="517,212,541,254" href="#myModal" data-toggle="modal"/>
                            <area id="C1007" shape="rect" coords="555,183,579,202" href="#myModal" data-toggle="modal"/>
                            <area id="C1013" shape="rect" coords="719,265,745,283" href="#myModal" data-toggle="modal"/>
                            <area id="C1008" shape="rect" coords="889,183,913,202" href="#myModal" data-toggle="modal"/>
                            <area id="C1009" shape="rect" coords="936,184,978,202" href="#myModal" data-toggle="modal"/>
                            <area id="C1012" shape="rect" coords="988,265,1013,283" href="#myModal" data-toggle="modal"/>
                            <area id="C1010" shape="rect" coords="1074,201,1099,219" href="#myModal" data-toggle="modal"/>
                            <area id="C1011" shape="rect" coords="1110,212,1131,252" href="#myModal" data-toggle="modal"/>
                        </map>
                    </div>
                    <div class="tab-pane fade" id="C1ET1">
                        <img src="img/salles/Plans Bat C1 Niv 01.png" usemap="#Plans Bat C1 Niv 01"/>
                        <map id="Plans Bat C1 Niv 01" name="C1Et1">
                            <area id="C1101" shape="rect" coords="48,157,68,183" href="#myModal" data-toggle="modal"/>
                            <area id="C1102" shape="rect" coords="463,185,488,205" href="#myModal" data-toggle="modal"/>
                            <area id="C1103" shape="rect" coords="775,185,802,204" href="#myModal" data-toggle="modal"/>
                            <area id="C1104" shape="rect" coords="991,185,1017,205" href="#myModal" data-toggle="modal"/>
                            <area id="C1105" shape="rect" coords="1053,1,1097,22" href="#myModal" data-toggle="modal"/>
                            <area id="C1106" shape="rect" coords="1088,268,1114,287" href="#myModal" data-toggle="modal"/>
                            <area id="C1107" shape="rect" coords="1033,268,1060,287" href="#myModal" data-toggle="modal"/>
                            <area id="C1108" shape="rect" coords="724,268,751,287" href="#myModal" data-toggle="modal"/>
                            <area id="C1109" shape="rect" coords="294,268,320,287" href="#myModal" data-toggle="modal"/>
                            <area id="C1110" shape="rect" coords="243,269,270,287" href="#myModal" data-toggle="modal"/>
                        </map>
                    </div>
                    <div class="tab-pane fade" id="C2ET-1">
                        <img src="img/salles/Plans Bat C2 Niv S1.png" usemap="#Plans Bat C2 Niv S1"/>
                        <map id="Plans Bat C2 Niv S1" name="Plans Bat C2 Niv S1">
                            <area id="C2501" shape="rect" coords="2,248,38,316" href="#myModal" data-toggle="modal"/>
                            <area id="C2502" shape="rect" coords="56,302,88,324" href="#myModal" data-toggle="modal"/>
                            <area id="C2503" shape="rect" coords="234,426,266,450" href="#myModal" data-toggle="modal"/>
                            <area id="C2504" shape="rect" coords="332,328,364,350" href="#myModal" data-toggle="modal"/>
                            <area id="C2505" shape="rect" coords="388,426,416,446" href="#myModal" data-toggle="modal"/>
                            <area id="C2506" shape="rect" coords="388,292,408,320" href="#myModal" data-toggle="modal"/>
                            <area id="C2507" shape="rect" coords="480,276,498,302" href="#myModal" data-toggle="modal"/>
                            <area id="C2508" shape="rect" coords="334,218,366,242" href="#myModal" data-toggle="modal"/>
                            <area id="C2509" shape="rect" coords="220,216,252,240" href="#myModal" data-toggle="modal"/>
                            <area id="C2510" shape="rect" coords="214,22,238,54" href="#myModal" data-toggle="modal"/>
                            <area id="C2511" shape="rect" coords="102,220,156,240" href="#myModal" data-toggle="modal"/>
                        </map>
                    </div>
                    <div class="tab-pane fade" id="C2RDC">
                        <img src="img/salles/Plans Bat C2 Niv 00.png" usemap="#Plans Bat C2 Niv 00"/>
                        <map id="Plans Bat C2 Niv 00" name="C2RDC">
                            <area id="C2001" shape="rect" coords="25,217,58,241" href="#myModal" data-toggle="modal"/>
                            <area id="C2002" shape="rect" coords="365,217,399,242" href="#myModal" data-toggle="modal"/>
                            <area id="C2003" shape="rect" coords="656,217,690,242" href="#myModal" data-toggle="modal"/>
                            <area id="C2004" shape="rect" coords="708,217,741,242" href="#myModal" data-toggle="modal"/>
                            <area id="C2005" shape="rect" coords="1052,217,1085,241" href="#myModal" data-toggle="modal"/>
                            <area id="C2006" shape="rect" coords="1105,255,1135,312" href="#myModal" data-toggle="modal"/>
                            <area id="C2007" shape="rect" coords="715,325,749,350" href="#myModal" data-toggle="modal"/>
                            <area id="C2008" shape="rect" coords="428,325,462,350" href="#myModal" data-toggle="modal"/>
                            <area id="C2009" shape="rect" coords="142,325,176,350" href="#myModal" data-toggle="modal"/>
                        </map>
                    </div>
                    <div class="tab-pane fade" id="C2ET1">
                        <img src="img/salles/Plans Bat C2 Niv 01.png" usemap="#Plans Bat C2 Niv 01"/>
                        <map id="Plans Bat C2 Niv 01" name="C2ET1">
                            <area id="C2101" shape="rect" coords="963,333,996,357" href="#myModal" data-toggle="modal"/>
                            <area id="C2102" shape="rect" coords="437,333,470,357" href="#myModal" data-toggle="modal"/>
                            <area id="C2103" shape="rect" coords="146,333,179,356" href="#myModal" data-toggle="modal"/>
                            <area id="C2104" shape="rect" coords="23,221,55,246" href="#myModal" data-toggle="modal"/>
                            <area id="C2105" shape="rect" coords="381,222,414,247" href="#myModal" data-toggle="modal"/>
                            <area id="C2106" shape="rect" coords="494,222,529,247" href="#myModal" data-toggle="modal"/>
                            <area id="C2107" shape="rect" coords="457,23,481,57" href="#myModal" data-toggle="modal"/>
                            <area id="C2108" shape="rect" coords="674,222,706,246" href="#myModal" data-toggle="modal"/>
                            <area id="C2109" shape="rect" coords="791,222,824,247" href="#myModal" data-toggle="modal"/>
                        </map>
                    </div>
                </div>
            </div>

            <!-- BATIMENT D -->

            <div id="BatD" class="building-map">
                <ul class="nav nav-tabs">
                    <li class="active"><a aria-expanded="true" href="#D0RDC" data-toggle="tab">D RDC</a></li>
                    <li class=""><a aria-expanded="false" href="#D0ET1" data-toggle="tab">D Etage 1</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="D0RDC">
                        <img src="img/salles/Plans Bat D0 Niv 00.png" usemap="#Plans Bat D0 Niv 00"/>
                        <map name="Plans Bat D0 Niv 00">
                            <area id="D001" shape="rect" coords="195,1084,238,1114" href="#myModal" data-toggle="modal"/>
                            <area id="D002" shape="rect" coords="167,1023,191,1056" href="#myModal" data-toggle="modal"/>
                            <area id="D003" shape="rect" coords="162,889,188,940" href="#myModal" data-toggle="modal"/>
                            <area id="D004" shape="rect" coords="221,791,246,824" href="#myModal" data-toggle="modal"/>
                            <area id="D005" shape="rect" coords="221,677,245,711" href="#myModal" data-toggle="modal"/>
                            <area id="D006" shape="rect" coords="260,464,293,489" href="#myModal" data-toggle="modal"/>
                            <area id="D007" shape="rect" coords="280,612,304,644" href="#myModal" data-toggle="modal"/>
                            <area id="D008" shape="rect" coords="298,679,322,710" href="#myModal" data-toggle="modal"/>
                            <area id="D009" shape="rect" coords="381,829,408,878" href="#myModal" data-toggle="modal"/>
                            <area id="D010" shape="rect" coords="221,944,245,976" href="#myModal" data-toggle="modal"/>
                            <area id="D011" shape="rect" coords="221,1019,245,1051" href="#myModal" data-toggle="modal"/>
                            <area id="D012" shape="rect" coords="508,1112,577,1147" href="#myModal" data-toggle="modal"/>
                            <area id="D013" shape="rect" coords="470,1033,502,1056" href="#myModal" data-toggle="modal"/>
                            <area id="D014" shape="rect" coords="362,1011,393,1036" href="#myModal" data-toggle="modal"/>
                            <area id="D015" shape="rect" coords="362,977,393,1002" href="#myModal" data-toggle="modal"/>
                            <area id="D016" shape="rect" coords="476,977,508,1002" href="#myModal" data-toggle="modal"/>
                            <area id="D017" shape="rect" coords="518,865,574,888" href="#myModal" data-toggle="modal"/>
                            <area id="D018" shape="rect" coords="412,801,462,828" href="#myModal" data-toggle="modal"/>
                            <area id="D019" shape="rect" coords="731,835,757,880" href="#myModal" data-toggle="modal"/>
                            <area id="D020" shape="rect" coords="589,1026,620,1051" href="#myModal" data-toggle="modal"/>
                            <area id="D021" shape="rect" coords="665,1216,694,1244" href="#myModal" data-toggle="modal"/>
                            <area id="D022" shape="rect" coords="762,1112,808,1143" href="#myModal" data-toggle="modal"/>
                            <area id="D023" shape="rect" coords="875,1111,920,1142" href="#myModal" data-toggle="modal"/>
                            <area id="D024" shape="rect" coords="1104,833,1132,862" href="#myModal" data-toggle="modal"/>
                            <area id="D025" shape="rect" coords="1104,777,1135,823" href="#myModal" data-toggle="modal"/>
                            <area id="D026" shape="rect" coords="952,570,982,600" href="#myModal" data-toggle="modal"/>
                            <area id="D027" shape="rect" coords="878,569,929,605" href="#myModal" data-toggle="modal"/>
                            <area id="D028" shape="rect" coords="767,569,796,600" href="#myModal" data-toggle="modal"/>
                            <area id="D029" shape="rect" coords="749,617,770,645" href="#myModal" data-toggle="modal"/>
                            <area id="D030" shape="rect" coords="689,617,711,646" href="#myModal" data-toggle="modal"/>
                            <area id="D031" shape="rect" coords="667,570,696,600" href="#myModal" data-toggle="modal"/>
                            <area id="D032" shape="rect" coords="580,320,610,379" href="#myModal" data-toggle="modal"/>
                            <area id="D033" shape="rect" coords="544,1,578,37" href="#myModal" data-toggle="modal"/>
                            <area id="D034" shape="rect" coords="950,162,983,225" href="#myModal" data-toggle="modal"/>
                        </map>
                    </div>
                    <div class="tab-pane fade" id="D0ET1">
                        <img src="img/salles/Plans Bat D0 Niv 01.png" usemap="#Plans Bat D0 Niv 01"/>
                        <map name="Plans Bat D0 Niv 01">
                            <area id="D101" shape="rect" coords="179,1047,229,1082" href="#myModal" data-toggle="modal"/>
                            <area id="D102" shape="rect" coords="210,927,233,957" href="#myModal" data-toggle="modal"/>
                            <area id="D103" shape="rect" coords="305,959,335,981" href="#myModal" data-toggle="modal"/>
                            <area id="D104" shape="rect" coords="233,750,283,770" href="#myModal" data-toggle="modal"/>
                            <area id="D105" shape="rect" coords="1051,387,1079,440" href="#myModal" data-toggle="modal"/>
                            <area id="D106" shape="rect" coords="768,513,790,544" href="#myModal" data-toggle="modal"/>
                            <area id="D107" shape="rect" coords="829,566,851,596" href="#myModal" data-toggle="modal"/>
                            <area id="D108" shape="rect" coords="828,604,850,634" href="#myModal" data-toggle="modal"/>
                            <area id="D109" shape="rect" coords="1045,582,1071,632" href="#myModal" data-toggle="modal"/>
                            <area id="D110" shape="rect" coords="808,679,831,710" href="#myModal" data-toggle="modal"/>
                            <area id="D111" shape="rect" coords="861,728,892,751" href="#myModal" data-toggle="modal"/>
                            <area id="D112" shape="rect" coords="791,721,823,744" href="#myModal" data-toggle="modal"/>
                            <area id="D113" shape="rect" coords="722,727,754,751" href="#myModal" data-toggle="modal"/>
                            <area id="D114" shape="rect" coords="722,806,753,830" href="#myModal" data-toggle="modal"/>
                            <area id="D115" shape="rect" coords="649,727,680,751" href="#myModal" data-toggle="modal"/>
                            <area id="D116" shape="rect" coords="454,749,507,769" href="#myModal" data-toggle="modal"/>
                            <area id="D117" shape="rect" coords="745,966,776,989" href="#myModal" data-toggle="modal"/>
                        </map>
                    </div>
                </div>
            </div>

            <!-- BATIMENT E -->

            <div id="BatE" class="building-map">
                <ul class="nav nav-tabs">
                    <li class="active"><a aria-expanded="true" href="#E0RDC" data-toggle="tab">E RDC</a></li>
                    <li class=""><a aria-expanded="false" href="#E0ET1" data-toggle="tab">E Etage 1</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="E0RDC">
                        <img src="img/salles/Plans Bat E0 Niv 00.png" usemap="#Plans Bat E0 Niv 00"/>
                        <map name="Plans Bat E0 Niv 00">
                            <area id="E001" shape="rect" coords="1107,235,1136,290" href="#myModal" data-toggle="modal"/>
                            <area id="E002" shape="rect" coords="1057,333,1087,354" href="#myModal" data-toggle="modal"/>
                            <area id="E003" shape="rect" coords="870,333,902,354" href="#myModal" data-toggle="modal"/>
                            <area id="E004" shape="rect" coords="652,301,682,322" href="#myModal" data-toggle="modal"/>
                            <area id="E005" shape="rect" coords="333,301,363,322" href="#myModal" data-toggle="modal"/>
                            <area id="E006" shape="rect" coords="84,301,113,322" href="#myModal" data-toggle="modal"/>
                            <area id="E007" shape="rect" coords="30,238,58,293" href="#myModal" data-toggle="modal"/>
                            <area id="E008" shape="rect" coords="263,207,293,229" href="#myModal" data-toggle="modal"/>
                            <area id="E009" shape="rect" coords="533,207,564,229" href="#myModal" data-toggle="modal"/>
                            <area id="E010" shape="rect" coords="811,207,841,230" href="#myModal" data-toggle="modal"/>
                            <area id="E011" shape="rect" coords="1074,207,1102,230" href="#myModal" data-toggle="modal"/>
							<area id="E012" shape="rect" coords="1040,15,1095,43" href="#myModal" data-toggle="modal"/>
							<area id="E013" shape="rect" coords="550,387,576,444" href="#myModal" data-toggle="modal"/>
							<!-- <area id="E014" shape="rect" coords="1074,207,1102,230" href="#myModal" data-toggle="modal"/>-->
							<area id="E015" shape="rect" coords="321,130,347,183" href="#myModal" data-toggle="modal"/>
							<!--<area id="E016" shape="rect" coords="1074,207,1102,230" href="#myModal" data-toggle="modal"/> -->
                        </map>
                    </div>
                    <div class="tab-pane fade" id="E0ET1">
                        <img src="img/salles/Plans Bat E0 Niv 01.png" usemap="#Plans Bat E0 Niv 01"/>
                        <map name="Plans Bat E0 Niv 01">
                            <area id="E101" shape="rect" coords="1083,314,1112,335" href="#myModal" data-toggle="modal"/>
                            <area id="E102" shape="rect" coords="989,315,1018,336" href="#myModal" data-toggle="modal"/>
                            <area id="E103" shape="rect" coords="870,315,899,336" href="#myModal" data-toggle="modal"/>
                            <area id="E104" shape="rect" coords="562,315,591,336" href="#myModal" data-toggle="modal"/>
                            <area id="E105" shape="rect" coords="374,315,402,335" href="#myModal" data-toggle="modal"/>
                            <area id="E106" shape="rect" coords="129,315,158,336" href="#myModal" data-toggle="modal"/>
                            <area id="E107" shape="rect" coords="78,254,106,306" href="#myModal" data-toggle="modal"/>
                            <area id="E108" shape="rect" coords="282,222,311,244" href="#myModal" data-toggle="modal"/>
                            <area id="E109" shape="rect" coords="625,222,653,244" href="#myModal" data-toggle="modal"/>
                            <area id="E110" shape="rect" coords="833,222,862,244" href="#myModal" data-toggle="modal"/>
                            <area id="E111" shape="rect" coords="1085,222,1113,244" href="#myModal" data-toggle="modal"/>
                        </map>
                    </div>
                </div>
            </div>

            <!-- BATIMENT F -->

            <!-- BATIMENT G -->

            <div id="BatG" class="building-map">
                <ul class="nav nav-tabs">
                    <li class="active"><a aria-expanded="true" href="#G0ET-1" data-toggle="tab">G Sous sol 1</a></li>
                    <li class=""><a aria-expanded="false" href="#G0RDC" data-toggle="tab">G RDC</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="G0ET-1">
                        <img src="img/salles/Plans Bat G0 Niv S1.png" usemap="#Plans Bat G0 Niv S1"/>
                        <map name="Plans Bat G0 Niv S1">
                            <area id="GS01" shape="rect" coords="822,581,869,627" href="#myModal" data-toggle="modal"/>
                            <area id="GS02" shape="rect" coords="672,764,714,795" href="#myModal" data-toggle="modal"/>
                            <area id="GS03" shape="rect" coords="576,425,606,466" href="#myModal" data-toggle="modal"/>
                        </map>
                    </div>
                    <div class="tab-pane fade" id="G0RDC">
                        <img src="img/salles/Plans Bat G0 Niv 00.png" usemap="#Plans Bat G0 Niv 00"/>
                        <map name="Plans Bat G0 Niv 00">
                            <area id="G001" shape="rect" coords="195,915,272,957" href="#myModal" data-toggle="modal"/>
                            <area id="G002" shape="rect" coords="351,953,427,993" href="#myModal" data-toggle="modal"/>
                            <area id="G003" shape="rect" coords="499,953,540,994" href="#myModal" data-toggle="modal"/>
                            <area id="G004" shape="rect" coords="545,953,587,994" href="#myModal" data-toggle="modal"/>
                            <area id="G005" shape="rect" coords="344,914,369,948" href="#myModal" data-toggle="modal"/>
                            <area id="G006" shape="rect" coords="305,764,333,811" href="#myModal" data-toggle="modal"/>
                            <area id="G007" shape="rect" coords="320,508,347,573" href="#myModal" data-toggle="modal"/>
                            <area id="G008" shape="rect" coords="306,269,333,306" href="#myModal" data-toggle="modal"/>
                            <area id="G009" shape="rect" coords="306,212,336,250" href="#myModal" data-toggle="modal"/>
                            <area id="G010" shape="rect" coords="112,134,151,207" href="#myModal" data-toggle="modal"/>
                            <area id="G011" shape="rect" coords="374,141,411,168" href="#myModal" data-toggle="modal"/>
                            <area id="G012" shape="rect" coords="410,222,438,260" href="#myModal" data-toggle="modal"/>
                            <area id="G013" shape="rect" coords="587,240,652,264" href="#myModal" data-toggle="modal"/>
                            <area id="G014" shape="rect" coords="943,38,962,101" href="#myModal" data-toggle="modal"/>
                            <area id="G015" shape="rect" coords="943,110,963,173" href="#myModal" data-toggle="modal"/>
                            <area id="G016" shape="rect" coords="942,181,962,243" href="#myModal" data-toggle="modal"/>
                            <area id="G017" shape="rect" coords="1052,264,1089,290" href="#myModal" data-toggle="modal"/>
                            <area id="G018" shape="rect" coords="924,543,965,583" href="#myModal" data-toggle="modal"/>
                            <area id="G019" shape="rect" coords="587,354,651,379" href="#myModal" data-toggle="modal"/>
                            <area id="G020" shape="rect" coords="435,505,461,571" href="#myModal" data-toggle="modal"/>
                            <area id="G021" shape="rect" coords="410,770,435,804" href="#myModal" data-toggle="modal"/>
							<area id="G022" shape="rect" coords="124,37,180,73" href="#myModal" data-toggle="modal"/>
                        </map>
                    </div>
                </div>
            </div>
        </div>

        <!-- FIN BATIMENT -->

        <div class="container">
            <!-- Modal -->
            <div class="modal fade" id="myModal" name="myModal" role="dialog">
                <div class="modal-dialog" id="modal-dialog">
                    <div class="modal-content" id="modal-content">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripte debut -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/InfoPorte.js"></script>
<script>
$(function() {
    $('.building-map').hide();
    $('#changeBuilding').on('change', function() {
        $('.building-map').hide();
        $('#Bat' + $(this).val()).show();
    });
});
</script>

<!-- Scripte fin -->

</body>
</html>
