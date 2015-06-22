<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Dashboard</title>
        <link rel="stylesheet" type="text/css" href="../../public/css/simulatorApp.css" />
    </head>
    <body>
        <div class="cards">
            <div class="card-container">
                <div class="card type-thermostat">
                    <div class="card-header">
                        <h1 class="card-title"></h1>
                    </div>
                    <div class="card-content">
                        <div class="ring">
                            <svg width="100%" height="100%" viewBox="0 0 460 460">
                                <defs>
                                    <clipPath id="button-separator">
                                        <rect x="110" y="370" width="118" height="110"></rect>
                                        <rect x="232" y="370" width="166" height="110"></rect>
                                    </clipPath>
                                </defs>
                                <g class="dial">
                                    <g class="ticks">
                                        <g class="background-ticks"><line x1="106.91157808660391" y1="419.53954835566583" x2="136.45279934581896" y2="374.050056750306" stroke-width="1.5"></line><line x1="100.3717253846635" y1="415.1283620093121" x2="131.48251129234427" y2="370.6975551270772" stroke-width="1.5"></line><line x1="93.98980476763708" y1="410.4916252706882" x2="126.6322516234042" y2="367.17363520572303" stroke-width="1.5"></line><line x1="87.77359162273666" y1="405.6349872892754" x2="121.90792963327986" y2="363.48259033984925" stroke-width="1.5"></line><line x1="81.73065944814536" y1="400.56436513034646" x2="117.31530118059048" y2="359.6289174990633" stroke-width="1.5"></line><line x1="75.86837062587531" y1="395.2859365659325" x2="112.85996167566525" y2="355.6173117901087" stroke-width="1.5"></line><line x1="70.19386745184022" y1="389.8061325481597" x2="108.54733926339857" y2="351.4526607366014" stroke-width="1.5"></line><line x1="64.71406343406744" y1="384.1316293741246" x2="104.38268820989127" y2="347.1400383243347" stroke-width="1.5"></line><line x1="59.43563486965351" y1="378.2693405518546" x2="100.37108250093667" y2="342.6846988194095" stroke-width="1.5"></line><line x1="54.36501271072461" y1="372.2264083772633" x2="96.51740966015069" y2="338.0920703667201" stroke-width="1.5"></line><line x1="49.50837472931181" y1="366.01019523236295" x2="92.826364794277" y2="333.36774837659584" stroke-width="1.5"></line><line x1="44.871637990687844" y1="359.6282746153364" x2="89.30244487292276" y2="328.5174887076557" stroke-width="1.5"></line><line x1="40.46045164433417" y1="353.08842191339613" x2="85.94994324969397" y2="323.54720065418104" stroke-width="1.5"></line><line x1="36.28019004132261" y1="346.3986049296723" x2="82.7729444314052" y2="318.4629397465509" stroke-width="1.5"></line><line x1="32.33594618649653" y1="339.56697417567216" x2="79.77531910173738" y2="313.2709003735108" stroke-width="1.5"></line><line x1="28.63252553342886" y1="332.60185294113757" x2="76.96071940540594" y2="307.97740823526453" stroke-width="1.5"></line><line x1="25.174440129717084" y1="325.51172715339806" x2="74.33257449858499" y2="302.5889126365825" stroke-width="1.5"></line><line x1="21.965903119748475" y1="318.3052350385758" x2="71.89408637100885" y2="297.1119786293176" stroke-width="1.5"></line><line x1="19.010823611632418" y1="310.99115659723793" x2="69.64822594484065" y2="291.5532790139008" stroke-width="1.5"></line><line x1="16.312801914554427" y1="303.5784029073174" x2="67.59772945506137" y2="285.91958620956126" stroke-width="1.5"></line><line x1="13.875125152354002" y1="296.07600526733853" x2="65.74509511578904" y2="280.21776400317725" stroke-width="1.5"></line><line x1="11.700763258670548" y1="288.4931041931697" x2="64.09258007658963" y2="274.454759186809" stroke-width="1.5"></line><line x1="9.792365358536841" y1="280.83893828171347" x2="62.64219767248801" y2="268.6375930941023" stroke-width="1.5"></line><line x1="8.152256540827949" y1="273.1228329550991" x2="61.395714971029236" y2="262.7733530458753" stroke-width="1.5"></line><line x1="6.78243502549887" y1="265.35418909909214" x2="60.35465061937916" y2="256.86918371531004" stroke-width="1.5"></line><line x1="5.684569729061195" y1="257.5424716095633" x2="59.520272994086525" y2="250.9322784232681" stroke-width="1.5"></line><line x1="4.859998231265507" y1="249.6971978609707" x2="58.89359865576179" y2="244.96987037433772" stroke-width="1.5"></line><line x1="4.309725145466302" y1="241.82792611090525" x2="58.4753911105544" y2="238.98922384428798" stroke-width="1.5"></line><line x1="4.034420894655568" y1="233.9442438548261" x2="58.26615987993824" y2="232.99762532966784" stroke-width="1.5"></line><line x1="4.034420894655568" y1="226.05575614517394" x2="58.26615987993824" y2="227.0023746703322" stroke-width="1.5"></line><line x1="4.309725145466302" y1="218.1720738890947" x2="58.4753911105544" y2="221.01077615571197" stroke-width="1.5"></line><line x1="4.859998231265507" y1="210.30280213902924" x2="58.89359865576179" y2="215.03012962566223" stroke-width="1.5"></line><line x1="5.684569729061224" y1="202.45752839043666" x2="59.520272994086554" y2="209.06772157673186" stroke-width="1.5"></line><line x1="6.7824350254988985" y1="194.6458109009078" x2="60.35465061937916" y2="203.13081628468993" stroke-width="1.5"></line><line x1="8.152256540827949" y1="186.87716704490083" x2="61.395714971029236" y2="197.22664695412465" stroke-width="1.5"></line><line x1="9.79236535853687" y1="179.16106171828648" x2="62.64219767248801" y2="191.36240690589773" stroke-width="1.5"></line><line x1="11.700763258670577" y1="171.50689580683024" x2="64.09258007658966" y2="185.545240813191" stroke-width="1.5"></line><line x1="13.875125152353974" y1="163.92399473266153" x2="65.74509511578901" y2="179.78223599682275" stroke-width="1.5"></line><line x1="16.3128019145544" y1="156.42159709268262" x2="67.59772945506134" y2="174.0804137904388" stroke-width="1.5"></line><line x1="19.010823611632418" y1="149.00884340276215" x2="69.64822594484065" y2="168.44672098609925" stroke-width="1.5"></line><line x1="21.965903119748504" y1="141.69476496142414" x2="71.89408637100888" y2="162.88802137068234" stroke-width="1.5"></line><line x1="25.174440129717112" y1="134.48827284660192" x2="74.33257449858502" y2="157.41108736341747" stroke-width="1.5"></line><line x1="28.63252553342889" y1="127.3981470588624" x2="76.96071940540597" y2="152.02259176473544" stroke-width="1.5"></line><line x1="32.33594618649656" y1="120.4330258243278" x2="79.77531910173741" y2="146.72909962648913" stroke-width="1.5"></line><line x1="36.28019004132267" y1="113.60139507032771" x2="82.77294443140522" y2="141.53706025344906" stroke-width="1.5"></line><line x1="40.46045164433423" y1="106.91157808660382" x2="85.949943249694" y2="136.4527993458189" stroke-width="1.5"></line><line x1="44.871637990687816" y1="100.37172538466362" x2="89.30244487292276" y2="131.48251129234436" stroke-width="1.5"></line><line x1="49.50837472931181" y1="93.98980476763711" x2="92.826364794277" y2="126.63225162340422" stroke-width="1.5"></line><line x1="54.365012710724585" y1="87.77359162273675" x2="96.51740966015069" y2="121.90792963327993" stroke-width="1.5"></line><line x1="59.43563486965351" y1="81.73065944814536" x2="100.3710825009367" y2="117.31530118059048" stroke-width="1.5"></line><line x1="64.71406343406747" y1="75.86837062587531" x2="104.38268820989128" y2="112.85996167566525" stroke-width="1.5"></line><line x1="70.19386745184028" y1="70.19386745184025" x2="108.54733926339861" y2="108.5473392633986" stroke-width="1.5"></line><line x1="75.86837062587537" y1="64.71406343406744" x2="112.85996167566529" y2="104.38268820989127" stroke-width="1.5"></line><line x1="81.73065944814539" y1="59.43563486965351" x2="117.3153011805905" y2="100.37108250093667" stroke-width="1.5"></line><line x1="87.77359162273677" y1="54.36501271072456" x2="121.90792963327995" y2="96.51740966015066" stroke-width="1.5"></line><line x1="93.98980476763705" y1="49.50837472931184" x2="126.63225162340417" y2="92.826364794277" stroke-width="1.5"></line><line x1="100.37172538466356" y1="44.87163799068787" x2="131.48251129234433" y2="89.30244487292279" stroke-width="1.5"></line><line x1="106.91157808660388" y1="40.46045164433417" x2="136.45279934581896" y2="85.94994324969397" stroke-width="1.5"></line><line x1="113.60139507032774" y1="36.28019004132261" x2="141.53706025344908" y2="82.7729444314052" stroke-width="1.5"></line><line x1="120.43302582432784" y1="32.33594618649653" x2="146.72909962648916" y2="79.77531910173738" stroke-width="1.5"></line><line x1="127.39814705886243" y1="28.63252553342886" x2="152.02259176473547" y2="76.96071940540594" stroke-width="1.5"></line><line x1="134.48827284660194" y1="25.174440129717084" x2="157.4110873634175" y2="74.33257449858499" stroke-width="1.5"></line><line x1="141.69476496142414" y1="21.965903119748504" x2="162.88802137068234" y2="71.89408637100888" stroke-width="1.5"></line><line x1="149.00884340276212" y1="19.010823611632418" x2="168.44672098609922" y2="69.64822594484065" stroke-width="1.5"></line><line x1="156.4215970926826" y1="16.3128019145544" x2="174.08041379043877" y2="67.59772945506134" stroke-width="1.5"></line><line x1="163.92399473266153" y1="13.875125152353974" x2="179.78223599682275" y2="65.74509511578901" stroke-width="1.5"></line><line x1="171.5068958068303" y1="11.700763258670548" x2="185.54524081319101" y2="64.09258007658963" stroke-width="1.5"></line><line x1="179.1610617182865" y1="9.792365358536841" x2="191.36240690589773" y2="62.64219767248801" stroke-width="1.5"></line><line x1="186.8771670449009" y1="8.152256540827949" x2="197.22664695412467" y2="61.395714971029236" stroke-width="1.5"></line><line x1="194.64581090090783" y1="6.78243502549887" x2="203.13081628468996" y2="60.35465061937916" stroke-width="1.5"></line><line x1="202.4575283904367" y1="5.684569729061195" x2="209.06772157673188" y2="59.520272994086525" stroke-width="1.5"></line><line x1="210.30280213902924" y1="4.859998231265507" x2="215.03012962566223" y2="58.89359865576179" stroke-width="1.5"></line><line x1="218.1720738890947" y1="4.309725145466302" x2="221.01077615571197" y2="58.4753911105544" stroke-width="1.5"></line><line x1="226.05575614517394" y1="4.034420894655568" x2="227.0023746703322" y2="58.26615987993824" stroke-width="1.5"></line><line x1="233.94424385482608" y1="4.034420894655568" x2="232.99762532966784" y2="58.26615987993824" stroke-width="1.5"></line><line x1="241.82792611090534" y1="4.309725145466302" x2="238.98922384428806" y2="58.4753911105544" stroke-width="1.5"></line><line x1="249.69719786097073" y1="4.859998231265507" x2="244.96987037433777" y2="58.89359865576179" stroke-width="1.5"></line><line x1="257.54247160956334" y1="5.684569729061224" x2="250.93227842326814" y2="59.520272994086554" stroke-width="1.5"></line><line x1="265.3541890990922" y1="6.78243502549887" x2="256.86918371531004" y2="60.35465061937916" stroke-width="1.5"></line><line x1="273.12283295509917" y1="8.152256540827949" x2="262.77335304587535" y2="61.395714971029236" stroke-width="1.5"></line><line x1="280.83893828171347" y1="9.792365358536841" x2="268.6375930941022" y2="62.64219767248801" stroke-width="1.5"></line><line x1="288.4931041931697" y1="11.700763258670548" x2="274.45475918680893" y2="64.09258007658963" stroke-width="1.5"></line><line x1="296.07600526733853" y1="13.875125152354002" x2="280.21776400317725" y2="65.74509511578904" stroke-width="1.5"></line><line x1="303.5784029073174" y1="16.312801914554427" x2="285.91958620956126" y2="67.59772945506137" stroke-width="1.5"></line><line x1="310.9911565972379" y1="19.010823611632418" x2="291.5532790139008" y2="69.64822594484065" stroke-width="1.5"></line><line x1="318.30523503857586" y1="21.965903119748475" x2="297.11197862931766" y2="71.89408637100885" stroke-width="1.5"></line><line x1="325.51172715339806" y1="25.174440129717112" x2="302.58891263658256" y2="74.33257449858502" stroke-width="1.5"></line><line x1="332.6018529411376" y1="28.63252553342889" x2="307.97740823526453" y2="76.96071940540597" stroke-width="1.5"></line><line x1="339.56697417567216" y1="32.33594618649656" x2="313.27090037351087" y2="79.77531910173741" stroke-width="1.5"></line><line x1="346.3986049296723" y1="36.28019004132261" x2="318.4629397465509" y2="82.7729444314052" stroke-width="1.5"></line><line x1="353.08842191339613" y1="40.46045164433417" x2="323.54720065418104" y2="85.94994324969397" stroke-width="1.5"></line><line x1="359.6282746153364" y1="44.871637990687844" x2="328.5174887076557" y2="89.30244487292276" stroke-width="1.5"></line><line x1="366.0101952323629" y1="49.50837472931181" x2="333.3677483765958" y2="92.826364794277" stroke-width="1.5"></line><line x1="372.2264083772633" y1="54.365012710724585" x2="338.09207036672007" y2="96.51740966015069" stroke-width="1.5"></line><line x1="378.2693405518546" y1="59.43563486965351" x2="342.6846988194095" y2="100.3710825009367" stroke-width="1.5"></line><line x1="384.13162937412466" y1="64.71406343406747" x2="347.14003832433474" y2="104.38268820989128" stroke-width="1.5"></line><line x1="389.8061325481598" y1="70.19386745184028" x2="351.4526607366014" y2="108.54733926339861" stroke-width="1.5"></line><line x1="395.2859365659325" y1="75.86837062587534" x2="355.6173117901087" y2="112.85996167566526" stroke-width="1.5"></line><line x1="400.56436513034646" y1="81.73065944814536" x2="359.6289174990633" y2="117.31530118059048" stroke-width="1.5"></line><line x1="405.6349872892754" y1="87.77359162273675" x2="363.4825903398493" y2="121.90792963327993" stroke-width="1.5"></line><line x1="410.4916252706882" y1="93.98980476763708" x2="367.17363520572303" y2="126.6322516234042" stroke-width="1.5"></line><line x1="415.1283620093121" y1="100.37172538466359" x2="370.69755512707724" y2="131.48251129234433" stroke-width="1.5"></line><line x1="419.53954835566583" y1="106.91157808660388" x2="374.050056750306" y2="136.45279934581896" stroke-width="1.5"></line><line x1="423.7198099586774" y1="113.60139507032775" x2="377.2270555685948" y2="141.5370602534491" stroke-width="1.5"></line><line x1="427.6640538135034" y1="120.43302582432783" x2="380.2246808982626" y2="146.72909962648913" stroke-width="1.5"></line><line x1="431.36747446657114" y1="127.39814705886243" x2="383.03928059459406" y2="152.02259176473547" stroke-width="1.5"></line><line x1="434.82555987028286" y1="134.48827284660194" x2="385.667425501415" y2="157.41108736341747" stroke-width="1.5"></line><line x1="438.0340968802515" y1="141.69476496142414" x2="388.1059136289912" y2="162.88802137068234" stroke-width="1.5"></line><line x1="440.9891763883676" y1="149.00884340276212" x2="390.35177405515935" y2="168.44672098609922" stroke-width="1.5"></line><line x1="443.68719808544563" y1="156.4215970926826" x2="392.4022705449387" y2="174.08041379043877" stroke-width="1.5"></line><line x1="446.12487484764597" y1="163.92399473266147" x2="394.254904884211" y2="179.78223599682275" stroke-width="1.5"></line><line x1="448.2992367413294" y1="171.5068958068303" x2="395.9074199234104" y2="185.54524081319104" stroke-width="1.5"></line><line x1="450.2076346414632" y1="179.1610617182865" x2="397.357802327512" y2="191.36240690589776" stroke-width="1.5"></line><line x1="451.8477434591721" y1="186.8771670449009" x2="398.60428502897076" y2="197.22664695412467" stroke-width="1.5"></line><line x1="453.2175649745011" y1="194.64581090090783" x2="399.6453493806208" y2="203.13081628468996" stroke-width="1.5"></line><line x1="454.3154302709388" y1="202.45752839043666" x2="400.47972700591345" y2="209.06772157673186" stroke-width="1.5"></line><line x1="455.14000176873446" y1="210.30280213902927" x2="401.1064013442382" y2="215.03012962566223" stroke-width="1.5"></line><line x1="455.6902748545337" y1="218.1720738890947" x2="401.52460888944563" y2="221.01077615571197" stroke-width="1.5"></line><line x1="455.96557910534443" y1="226.05575614517392" x2="401.73384012006176" y2="227.0023746703322" stroke-width="1.5"></line><line x1="455.96557910534443" y1="233.94424385482608" x2="401.73384012006176" y2="232.9976253296678" stroke-width="1.5"></line><line x1="455.6902748545337" y1="241.8279261109053" x2="401.52460888944563" y2="238.98922384428803" stroke-width="1.5"></line><line x1="455.14000176873446" y1="249.69719786097073" x2="401.1064013442382" y2="244.96987037433777" stroke-width="1.5"></line><line x1="454.3154302709388" y1="257.54247160956334" x2="400.47972700591345" y2="250.93227842326814" stroke-width="1.5"></line><line x1="453.2175649745011" y1="265.3541890990922" x2="399.6453493806208" y2="256.86918371531004" stroke-width="1.5"></line><line x1="451.8477434591721" y1="273.1228329550991" x2="398.60428502897076" y2="262.77335304587535" stroke-width="1.5"></line><line x1="450.2076346414632" y1="280.83893828171347" x2="397.357802327512" y2="268.6375930941023" stroke-width="1.5"></line><line x1="448.2992367413294" y1="288.4931041931697" x2="395.9074199234104" y2="274.45475918680893" stroke-width="1.5"></line><line x1="446.12487484764597" y1="296.07600526733853" x2="394.254904884211" y2="280.21776400317725" stroke-width="1.5"></line><line x1="443.68719808544563" y1="303.5784029073174" x2="392.4022705449387" y2="285.9195862095612" stroke-width="1.5"></line><line x1="440.9891763883676" y1="310.9911565972379" x2="390.35177405515935" y2="291.55327901390075" stroke-width="1.5"></line><line x1="438.03409688025147" y1="318.30523503857586" x2="388.1059136289911" y2="297.11197862931766" stroke-width="1.5"></line><line x1="434.82555987028286" y1="325.51172715339806" x2="385.667425501415" y2="302.58891263658256" stroke-width="1.5"></line><line x1="431.36747446657114" y1="332.60185294113757" x2="383.03928059459406" y2="307.97740823526453" stroke-width="1.5"></line><line x1="427.6640538135034" y1="339.56697417567216" x2="380.2246808982626" y2="313.27090037351087" stroke-width="1.5"></line><line x1="423.7198099586774" y1="346.3986049296723" x2="377.2270555685948" y2="318.4629397465509" stroke-width="1.5"></line><line x1="419.53954835566583" y1="353.08842191339613" x2="374.050056750306" y2="323.54720065418104" stroke-width="1.5"></line><line x1="415.1283620093121" y1="359.6282746153364" x2="370.69755512707724" y2="328.5174887076557" stroke-width="1.5"></line><line x1="410.4916252706882" y1="366.0101952323629" x2="367.17363520572303" y2="333.3677483765958" stroke-width="1.5"></line><line x1="405.6349872892754" y1="372.2264083772633" x2="363.4825903398493" y2="338.09207036672007" stroke-width="1.5"></line><line x1="400.56436513034646" y1="378.2693405518546" x2="359.6289174990633" y2="342.6846988194095" stroke-width="1.5"></line><line x1="395.2859365659325" y1="384.13162937412466" x2="355.6173117901087" y2="347.14003832433474" stroke-width="1.5"></line><line x1="389.8061325481598" y1="389.8061325481597" x2="351.4526607366014" y2="351.4526607366014" stroke-width="1.5"></line><line x1="384.13162937412466" y1="395.2859365659325" x2="347.14003832433474" y2="355.6173117901087" stroke-width="1.5"></line><line x1="378.2693405518546" y1="400.56436513034646" x2="342.6846988194095" y2="359.6289174990633" stroke-width="1.5"></line><line x1="372.2264083772633" y1="405.6349872892754" x2="338.09207036672007" y2="363.4825903398493" stroke-width="1.5"></line><line x1="366.0101952323629" y1="410.4916252706882" x2="333.3677483765958" y2="367.17363520572303" stroke-width="1.5"></line><line x1="359.6282746153364" y1="415.1283620093121" x2="328.5174887076557" y2="370.69755512707724" stroke-width="1.5"></line><line x1="353.08842191339613" y1="419.53954835566583" x2="323.54720065418104" y2="374.050056750306" stroke-width="1.5"></line></g>
                                        <g class="foreground-ticks" style="display:none"><line x1="448.2992367413294" y1="171.5068958068303" x2="395.9074199234104" y2="185.54524081319104" stroke-width="1.5"></line><line x1="450.2076346414632" y1="179.1610617182865" x2="397.357802327512" y2="191.36240690589776" stroke-width="1.5"></line><line x1="451.8477434591721" y1="186.8771670449009" x2="398.60428502897076" y2="197.22664695412467" stroke-width="1.5"></line><line x1="453.2175649745011" y1="194.64581090090783" x2="399.6453493806208" y2="203.13081628468996" stroke-width="1.5"></line><line x1="454.3154302709388" y1="202.45752839043666" x2="400.47972700591345" y2="209.06772157673186" stroke-width="1.5"></line><line x1="455.14000176873446" y1="210.30280213902927" x2="401.1064013442382" y2="215.03012962566223" stroke-width="1.5"></line><line x1="455.6902748545337" y1="218.1720738890947" x2="401.52460888944563" y2="221.01077615571197" stroke-width="1.5"></line><line x1="455.96557910534443" y1="226.05575614517392" x2="401.73384012006176" y2="227.0023746703322" stroke-width="1.5"></line><line x1="455.96557910534443" y1="233.94424385482608" x2="401.73384012006176" y2="232.9976253296678" stroke-width="1.5"></line><line x1="455.6902748545337" y1="241.8279261109053" x2="401.52460888944563" y2="238.98922384428803" stroke-width="1.5"></line><line x1="455.14000176873446" y1="249.69719786097073" x2="401.1064013442382" y2="244.96987037433777" stroke-width="1.5"></line><line x1="454.3154302709388" y1="257.54247160956334" x2="400.47972700591345" y2="250.93227842326814" stroke-width="1.5"></line><line x1="453.2175649745011" y1="265.3541890990922" x2="399.6453493806208" y2="256.86918371531004" stroke-width="1.5"></line><line x1="451.8477434591721" y1="273.1228329550991" x2="398.60428502897076" y2="262.77335304587535" stroke-width="1.5"></line></g>
                                        <g class="target-ticks" style="display:none" data-show="view:showTargetTicks <
            model.online
            model.auto_away_enabled
            structure.away
            structure.away_setter
            model.away_temperature_high_enabled
            model.away_temperature_low_enabled">
                                            <path class="target-temperature-tick" data-show="model:isSingleTempMode <
              .target_temperature_type" d="M 391.21002077607284 258.0025459088664 L 452.66577455258675 268.6775495978818 L 450.9409762263042 277.55086775409785 L 389.96126678784424 264.42682825396685 L 391.21002077607284 258.0025459088664 z"></path>
                                            <path class="target-temperature-low-tick" data-show="model:isRangeMode <
              .target_temperature_type" d="M 179.04126011366637 74.51360122120971 L 159.61500015699775 15.239780692278657 L 168.25941882943056 12.5969166807418 L 185.29981923250773 72.60016767685704 L 179.04126011366637 74.51360122120971 z" style="display: none;"></path>
                                            <path class="target-temperature-high-tick" data-show="model:isRangeMode <
              .target_temperature_type" d="M 321.1516212981132 94.11697931409765 L 355.90002941728335 42.316269770853125 L 363.30467023189726 47.50105508698107 L 326.51258124789365 97.87076388297427 L 321.1516212981132 94.11697931409765 z" style="display: none;"></path>
                                        </g>
                                        <g class="away-ticks">
                                            <path class="away-temperature-low-tick" data-show="model:isAwayLowTempVisible <
              model.online
              model.auto_away_enabled
              structure.away
              structure.away_setter
              model.away_temperature_low_enabled" d="M 143.64615483910075 368.9813901280579 L 110.72673320317782 421.9632460332292 L 103.14565669763827 417.0400373859205 L 138.1574554490901 365.41698706740647 L 143.64615483910075 368.9813901280579 z" style="display: none;"></path>
                                            <path class="away-temperature-high-tick" data-show="model:isAwayHighTempVisible <
              model.online
              model.auto_away_enabled
              structure.away
              structure.away_setter
              model.away_temperature_high_enabled" d="M 334.85592651575473 104.38929961773698 L 374.8286277841916 56.50455748306214 L 381.6507475601951 62.43493572813583 L 339.79514123358126 108.68289346717033 L 334.85592651575473 104.38929961773698 z" style="display: none;"></path>
                                        </g>
                                        <path class="current-temperature-tick" style="display:none" data-show="model:isOnline < model.online" d="M 394.985203633551 182.23620427566817 L 447.0857942546724 167.15290036272125 L 449.4253624439076 175.88428771271896 L 396.7632754573698 188.87205866166641 L 394.985203633551 182.23620427566817 z"></path>
                                    </g>
                                    <g class="current-temp-label" style="display:none" data-show="view:showCurrentTempLabel <
          model.temperature_scale
          model.current_temperature
          model.target_temperature
          model.target_temperature_low
          model.target_temperature_high">
                                        <text class="background-text" font-size="30" text-anchor="middle" stroke-width="8" data-text="view:getDisplayCurrentTemp <
            model.temperature_scale
            model.current_temperature" x="408.0477600283773" y="151.38708023726247">81</text>
                                        <text class="foreground-text" fill="#fff" font-size="30" text-anchor="middle" data-text="view:getDisplayCurrentTemp <
            model.temperature_scale
            model.current_temperature" x="408.0477600283773" y="151.38708023726247">81</text>
                                    </g>
                                    <g class="away-temp-low-label" data-show="model:isAwayLowTempVisible <
          model.online
          model.auto_away_enabled
          structure.away
          structure.away_setter
          model.away_temperature_low_enabled" style="display: none;">
                                        <text class="background-text" font-size="30" text-anchor="middle" stroke-width="8" data-text="view:getDisplayAwayLowTemp <
            model.temperature_scale
            model.away_temperature_low" x="90.70432157254783" y="381.9505842588745">50</text>
                                        <text class="foreground-text" fill="#fff" font-size="30" text-anchor="middle" data-text="view:getDisplayAwayLowTemp <
            model.temperature_scale
            model.away_temperature_low" x="90.70432157254783" y="381.9505842588745">50</text>
                                    </g>
                                    <g class="away-temp-high-label" data-show="model:isAwayHighTempVisible <
          model.online
          model.auto_away_enabled
          structure.away
          structure.away_setter
          model.away_temperature_high_enabled" style="display: none;">
                                        <text class="background-text" font-size="30" text-anchor="middle" stroke-width="8" data-text="view:getDisplayAwayHighTemp <
            model.temperature_scale
            model.away_temperature_high" x="328.056566885643" y="66.97351621615431">76</text>
                                        <text class="foreground-text" fill="#fff" font-size="30" text-anchor="middle" data-text="view:getDisplayAwayHighTemp <
            model.temperature_scale
            model.away_temperature_high" x="328.056566885643" y="66.97351621615431">76</text>
                                    </g>
                                </g>
                            </svg>
                            <div class="temperature-display">
                                <div class="halo-text dial-label" data-show="model:isHaloTextVisible <
        model.online
        model.target_temperature_type
        model.auto_away_enable
        model.safety_temp_activating_hvac
        structure.away
        structure.away_setter" data-html="model:getHaloText <
        .auto_dehum_state
        .compressor_lockout_enabled
        .dehumidifier_state
        .demand_response
        .emer_heat_enable
        .fan_cooling_state
        .heatpump_setback_active
        .humidifier_state
        .hvac_ac_state
        .hvac_alt_heat_state
        .hvac_alt_heat_x2_state
        .hvac_aux_heater_state
        .hvac_cool_x2_state
        .hvac_emer_heat_state
        .hvac_heat_x2_state
        .hvac_heat_x3_state
        .hvac_heater_state
        .preconditioning_active
        .safety_temp_activating_hvac
        .target_temperature_type
        .time_to_target
        .time_to_target_training
        view.heartbeat">COOL SET TO</div>
                                <div class="target-temperature dial-label">
                                    <div class="temperature-container">
                                      <span data-text="model:getWholeTargetTemperature <
                                          model.target_temperature
                                          model.temperature_scale"></span>
                                        <div id="current-temp" class="halo-text">Current Temp </div>
                                    </div>
                                </div>
                                <div class="control-container">
                                    <button class="down-control">
                                        <div class="shape"></div>
                                        <div class="glyph"></div>
                                    </button><button class="up-control">
                                        <div class="shape"></div>
                                        <div class="glyph"></div>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script>
            var simulatorThermostatSettings = {
                <?php foreach ($thermostats as $data): ?>
                <?php echo $data['device_id']; ?> : {
                    target_temperature : <?php echo $data['target_temperature_f']; ?>,
                    ambient_temperature : <?php echo $data['ambient_temperature_f']; ?>,
                    hvac_state : "<?php echo $data['hvac_state']; ?>",
                    name : "<?php echo $data['name_long']; ?>",
                    device_id : "<?php echo $data['device_id']; ?>"
                },
                <?php endforeach; ?>
            };
        </script>
        <script src="../../public/js/simulatorApp.js"></script>
    </body>
</html>