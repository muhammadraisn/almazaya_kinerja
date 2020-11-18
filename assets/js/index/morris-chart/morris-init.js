
// area chart

var areaChart = new Morris.Area({
    element: 'area-chart',
    behaveLikeLine: true,
    gridEnabled: false,
    gridLineColor: '#e5ebf8',
    axes: true,
    fillOpacity:.7,
    
    if (date(m) == (01 or 02 or 03 or 04 or 06)) {
        data: [
            {period: 'Juli', iphone: 2666, ipad: null, itouch: 2647},
            {period: 'Agustus', iphone: 15278, ipad: 4294, itouch: 2441},
            {period: 'September', iphone: 4912, ipad: 1969, itouch: 2501},
            {period: 'Oktober', iphone: 3767, ipad: 3597, itouch: 5689},
            {period: 'November', iphone: 6810, ipad: 13914, itouch: 2293},
            {period: 'Desember', iphone: 5670, ipad: 4293, itouch: 1881}
        ],
    }else{
        data: [
            {period: 'Juli', iphone: 2666, ipad: null, itouch: 2647},
            {period: 'Agustus', iphone: 15278, ipad: 4294, itouch: 2441},
            {period: 'September', iphone: 4912, ipad: 1969, itouch: 2501},
            {period: 'Oktober', iphone: 3767, ipad: 3597, itouch: 5689},
            {period: 'November', iphone: 6810, ipad: 13914, itouch: 2293},
            {period: 'Desember', iphone: 5670, ipad: 4293, itouch: 1881}
        ],
    }

    lineColors:['#FF518A','#FFEA80','#36a2f5'],
    xkey: 'period',
    ykeys: ['iphone', 'ipad', 'itouch'],
    labels: ['iPhone', 'iPad', 'iPod Touch'],
    pointSize: 4,
    lineWidth: 1,
    hideHover: 'auto'

});
jQuery(function($) {
    $(window).on('resize', function() {
     setTimeout(function(){
       var $area_chart =  $('#area-chart');
       var width_svg = $area_chart.width();
       $area_chart.find("svg").width(width_svg);
       areaChart.redraw();

    })
      //
    });
});
