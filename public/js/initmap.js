var map =  L.map('map', { zoomControl: false, scrollWheelZoom: false }).setView([0.6, 118], 5);
    //L.tileLayer('https://cartodb-basemaps-{s}.global.ssl.fastly.net/dark_nolabels/{z}/{x}/{y}.png', {}).addTo(map);
    var layer = L.geoJson([noData,Adaro,Antam,BRMS,Bukitasam,Cita,Gems,Merdeka,Timah,Tobabara,Vale,Harita], {color:'#152136', fillColor:'black',fillOpacity:1, stroke: false}).addTo(map);
    var layer1 = L.geoJson();

    function hoverout(){
        layer1.clearLayers()
    }

    document.getElementById('data1').addEventListener('mouseenter', toogleClick1);
    document.getElementById('data1').addEventListener('mouseleave', toogleOut1);

    function toogleClick1(){
        layer1.addData(Adaro).addTo(map).setStyle({color :'red', fillColor:'red', fillOpacity:1, stroke:false});
    }
    function toogleOut1(){
       hoverout()

    }

    document.getElementById('data2').addEventListener('mouseenter', toogleClick2);
    document.getElementById('data2').addEventListener('mouseleave', toogleOut2);
    function toogleClick2(){
        layer1.addData(Antam).addTo(map).setStyle({color :'red', fillColor:'red', fillOpacity:1, stroke:false});
    }
    function toogleOut2(){
        hoverout()
    }

    document.getElementById('data3').addEventListener('mouseenter', toogleClick3);
    document.getElementById('data3').addEventListener('mouseleave', toogleOut3);
    function toogleClick3(){
        layer1.addData(BRMS).addTo(map).setStyle({color :'red', fillColor:'red', fillOpacity:1, stroke:false});
    }
    function toogleOut3(){
        hoverout()
    }

    document.getElementById('data4').addEventListener('mouseenter', toogleClick4);
    document.getElementById('data4').addEventListener('mouseleave', toogleOut4);
    function toogleClick4(){
        layer1.addData(Bukitasam).addTo(map).setStyle({color :'red', fillColor:'red', fillOpacity:1, stroke:false});
    }
    function toogleOut4(){
        hoverout()
    }

    document.getElementById('data5').addEventListener('mouseenter', toogleClick5);
    document.getElementById('data5').addEventListener('mouseleave', toogleOut5);
    function toogleClick5(){
        layer1.addData([Cita,Harita]).addTo(map).setStyle({color :'red', fillColor:'red', fillOpacity:1, stroke:false});
    }
    function toogleOut5(){
        hoverout()
    }

    document.getElementById('data6').addEventListener('mouseenter', toogleClick6);
    document.getElementById('data6').addEventListener('mouseleave', toogleOut6);
    function toogleClick6(){
        layer1.addData(Gems).addTo(map).setStyle({color :'red', fillColor:'red', fillOpacity:1, stroke:false});
    }
    function toogleOut6(){
        hoverout()
    }

    document.getElementById('data7').addEventListener('mouseenter', toogleClick7);
    document.getElementById('data7').addEventListener('mouseleave', toogleOut7);
    function toogleClick7(){
        layer1.addData(Merdeka).addTo(map).setStyle({color :'red', fillColor:'red', fillOpacity:1, stroke:true, weight:3});
    }
    function toogleOut7(){
        hoverout()
    }

    document.getElementById('data8').addEventListener('mouseenter', toogleClick8);
    document.getElementById('data8').addEventListener('mouseleave', toogleOut8);
    function toogleClick8(){
        layer1.addData(Timah).addTo(map).setStyle({color :'red', fillColor:'red', fillOpacity:1, stroke:false});
    }
    function toogleOut8(){
        hoverout()
    }

    document.getElementById('data9').addEventListener('mouseenter', toogleClick9);
    document.getElementById('data9').addEventListener('mouseleave', toogleOut9);
    function toogleClick9(){
        layer1.addData(Tobabara).addTo(map).setStyle({color :'red', fillColor:'red', fillOpacity:1, stroke:false});
    }
    function toogleOut9(){
        hoverout()
    }

    document.getElementById('data10').addEventListener('mouseenter', toogleClick10);
    document.getElementById('data10').addEventListener('mouseleave', toogleOut10);
    function toogleClick10(){
        layer1.addData(Vale).addTo(map).setStyle({color :'red', fillColor:'red', fillOpacity:1, stroke:false});
    }
    function toogleOut10(){
        hoverout()
    }

