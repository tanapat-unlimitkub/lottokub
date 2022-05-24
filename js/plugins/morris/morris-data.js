$(function() {
i = <?php echo 35; ?>
    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2014 Q1',
            คูปองที่ใช้แล้ว: i,
            คูปองที่ยังไม่ได้ใช้: null,
            คูปองทั้งหมด: 2
        }, {
            period: '2014 Q2',
            คูปองที่ใช้แล้ว: 3,
            คูปองที่ยังไม่ได้ใช้: 3,
            คูปองทั้งหมด: 5
        }],
        xkey: 'period',
        ykeys: ['คูปองที่ใช้แล้ว', 'คูปองที่ยังไม่ได้ใช้', 'คูปองทั้งหมด'],
        labels: ['คูปองที่ใช้แล้ว', 'คูปองที่ยังไม่ได้ใช้', 'คูปองทั้งหมด'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Download Sales",
            value: 12
        }, {
            label: "In-Store Sales",
            value: 30
        }, {
            label: "Mail-Order Sales",
            value: 20
        }],
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2006',
            a: 100,
            b: 90
        }, {
            y: '2007',
            a: 75,
            b: 65
        }, {
            y: '2008',
            a: 50,
            b: 40
        }, {
            y: '2009',
            a: 75,
            b: 65
        }, {
            y: '2010',
            a: 50,
            b: 40
        }, {
            y: '2011',
            a: 75,
            b: 65
        }, {
            y: '2012',
            a: 100,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true
    });

});
