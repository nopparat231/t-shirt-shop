<script type="text/javascript" language="javascript" src="../dt/jquery-1.12.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="../dt/jquery.dataTables.min.css">

<script type="text/javascript" language="javascript" src="../dt/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript"src="../js/buttons.print.min.js"></script>
<script type="text/javascript" language="javascript" src="../js/dataTables.buttons.min.js"></script>
<script>    

    $('#example').DataTable( {

      dom: 'Bfrtip',
      "ordering": false,
      buttons: [
      {
        extend: 'print',
      }
      ],


    lengthMenu: [
    [ 10, 25, 50, -1 ],
    [ '10 รายการ', '25 รายการ', '50 รายการ', 'แสดงทั้งหมด' ],
    ],


      "language": {
        "lengthMenu": "Display _MENU_ records",
        "sEmptyTable":     "ไม่มีข้อมูลในตาราง",
        "sInfo":           "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
        "sInfoEmpty":      "แสดง 0 ถึง 0 จาก 0 รายการ",
        "sInfoFiltered":   "(กรองข้อมูล _MAX_ ทุกรายการ)",
        "sInfoPostFix":    "",
        "sInfoThousands":  ",",
        "sLengthMenu":     "แสดง _MENU_ รายการ",
        "sLoadingRecords": "กำลังโหลดข้อมูล...",
        "sProcessing":     "กำลังดำเนินการ...",
        "sSearch":         "ค้นหา: ",
        "sZeroRecords":    "ไม่พบข้อมูล",
        "oPaginate": {
         "sFirst":    "หน้าแรก",
         "sPrevious": "ก่อนหน้า",
         "sNext":     "ถัดไป",
         "sLast":     "หน้าสุดท้าย"
       },
       "oAria": {
         "sSortAscending":  ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
         "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
       }
     }

   });

    $('#myTable').DataTable( {

      dom: 'Bfrtip',
      "ordering": false,
      buttons: [
      {
        extend: 'print',
      }
      ],


    lengthMenu: [
    [ 10, 25, 50, -1 ],
    [ '10 รายการ', '25 รายการ', '50 รายการ', 'แสดงทั้งหมด' ],
    ],


      "language": {
        "lengthMenu": "Display _MENU_ records",
        "sEmptyTable":     "ไม่มีข้อมูลในตาราง",
        "sInfo":           "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
        "sInfoEmpty":      "แสดง 0 ถึง 0 จาก 0 รายการ",
        "sInfoFiltered":   "(กรองข้อมูล _MAX_ ทุกรายการ)",
        "sInfoPostFix":    "",
        "sInfoThousands":  ",",
        "sLengthMenu":     "แสดง _MENU_ รายการ",
        "sLoadingRecords": "กำลังโหลดข้อมูล...",
        "sProcessing":     "กำลังดำเนินการ...",
        "sSearch":         "ค้นหา: ",
        "sZeroRecords":    "ไม่พบข้อมูล",
        "oPaginate": {
         "sFirst":    "หน้าแรก",
         "sPrevious": "ก่อนหน้า",
         "sNext":     "ถัดไป",
         "sLast":     "หน้าสุดท้าย"
       },
       "oAria": {
         "sSortAscending":  ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
         "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
       }
     }

   });


    $('#data').DataTable( {

      dom: 'Bfrtip',
      "ordering": false,
      buttons: [
      {
        extend: 'print',
      }
      ],


    lengthMenu: [
    [ 10, 25, 50, -1 ],
    [ '10 รายการ', '25 รายการ', '50 รายการ', 'แสดงทั้งหมด' ],
    ],


      "language": {
        "lengthMenu": "Display _MENU_ records",
        "sEmptyTable":     "ไม่มีข้อมูลในตาราง",
        "sInfo":           "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
        "sInfoEmpty":      "แสดง 0 ถึง 0 จาก 0 รายการ",
        "sInfoFiltered":   "(กรองข้อมูล _MAX_ ทุกรายการ)",
        "sInfoPostFix":    "",
        "sInfoThousands":  ",",
        "sLengthMenu":     "แสดง _MENU_ รายการ",
        "sLoadingRecords": "กำลังโหลดข้อมูล...",
        "sProcessing":     "กำลังดำเนินการ...",
        "sSearch":         "ค้นหา: ",
        "sZeroRecords":    "ไม่พบข้อมูล",
        "oPaginate": {
         "sFirst":    "หน้าแรก",
         "sPrevious": "ก่อนหน้า",
         "sNext":     "ถัดไป",
         "sLast":     "หน้าสุดท้าย"
       },
       "oAria": {
         "sSortAscending":  ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
         "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
       }
     }

   });


    $('#myTable2').DataTable( {

      dom: 'Bfrtip',
      "ordering": false,
      buttons: [
      {
        extend: 'print',
      }
      ],


    lengthMenu: [
    [ 10, 25, 50, -1 ],
    [ '10 รายการ', '25 รายการ', '50 รายการ', 'แสดงทั้งหมด' ],
    ],


      "language": {
        "lengthMenu": "Display _MENU_ records",
        "sEmptyTable":     "ไม่มีข้อมูลในตาราง",
        "sInfo":           "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
        "sInfoEmpty":      "แสดง 0 ถึง 0 จาก 0 รายการ",
        "sInfoFiltered":   "(กรองข้อมูล _MAX_ ทุกรายการ)",
        "sInfoPostFix":    "",
        "sInfoThousands":  ",",
        "sLengthMenu":     "แสดง _MENU_ รายการ",
        "sLoadingRecords": "กำลังโหลดข้อมูล...",
        "sProcessing":     "กำลังดำเนินการ...",
        "sSearch":         "ค้นหา: ",
        "sZeroRecords":    "ไม่พบข้อมูล",
        "oPaginate": {
         "sFirst":    "หน้าแรก",
         "sPrevious": "ก่อนหน้า",
         "sNext":     "ถัดไป",
         "sLast":     "หน้าสุดท้าย"
       },
       "oAria": {
         "sSortAscending":  ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
         "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
       }
     }

   });


    $('#myTable3').DataTable( {

      dom: 'Bfrtip',
      "ordering": false,
      buttons: [
      {
        extend: 'print',
      }
      ],


    lengthMenu: [
    [ 10, 25, 50, -1 ],
    [ '10 รายการ', '25 รายการ', '50 รายการ', 'แสดงทั้งหมด' ],
    ],


      "language": {
        "lengthMenu": "Display _MENU_ records",
        "sEmptyTable":     "ไม่มีข้อมูลในตาราง",
        "sInfo":           "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
        "sInfoEmpty":      "แสดง 0 ถึง 0 จาก 0 รายการ",
        "sInfoFiltered":   "(กรองข้อมูล _MAX_ ทุกรายการ)",
        "sInfoPostFix":    "",
        "sInfoThousands":  ",",
        "sLengthMenu":     "แสดง _MENU_ รายการ",
        "sLoadingRecords": "กำลังโหลดข้อมูล...",
        "sProcessing":     "กำลังดำเนินการ...",
        "sSearch":         "ค้นหา: ",
        "sZeroRecords":    "ไม่พบข้อมูล",
        "oPaginate": {
         "sFirst":    "หน้าแรก",
         "sPrevious": "ก่อนหน้า",
         "sNext":     "ถัดไป",
         "sLast":     "หน้าสุดท้าย"
       },
       "oAria": {
         "sSortAscending":  ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
         "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
       }
     }

   });



    $('#myTable4').DataTable( {

      dom: 'Bfrtip',
      "ordering": false,
      buttons: [
      {
        extend: 'print',
      }
      ],


    lengthMenu: [
    [ 10, 25, 50, -1 ],
    [ '10 รายการ', '25 รายการ', '50 รายการ', 'แสดงทั้งหมด' ],
    ],


      "language": {
        "lengthMenu": "Display _MENU_ records",
        "sEmptyTable":     "ไม่มีข้อมูลในตาราง",
        "sInfo":           "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
        "sInfoEmpty":      "แสดง 0 ถึง 0 จาก 0 รายการ",
        "sInfoFiltered":   "(กรองข้อมูล _MAX_ ทุกรายการ)",
        "sInfoPostFix":    "",
        "sInfoThousands":  ",",
        "sLengthMenu":     "แสดง _MENU_ รายการ",
        "sLoadingRecords": "กำลังโหลดข้อมูล...",
        "sProcessing":     "กำลังดำเนินการ...",
        "sSearch":         "ค้นหา: ",
        "sZeroRecords":    "ไม่พบข้อมูล",
        "oPaginate": {
         "sFirst":    "หน้าแรก",
         "sPrevious": "ก่อนหน้า",
         "sNext":     "ถัดไป",
         "sLast":     "หน้าสุดท้าย"
       },
       "oAria": {
         "sSortAscending":  ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
         "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
       }
     }

   });



 <?php $r = '<h3 align="center">รายการสินค้า</h3>' ?>
 $('#example3').DataTable( {


   dom: 'Bfrtip',
   "ordering": false,
   buttons: [
   {
    extend: 'print',
    messageTop: '<?php echo $r; ?>'
  }
  ],

  lengthMenu: [
  [ 10, 25, 50, -1 ],
  [ '10 รายการ', '25 รายการ', '50 รายการ', 'แสดงทั้งหมด' ]
  ],



  "footerCallback": function ( row, data, start, end, display ) {
    var api = this.api(), data;

            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
              return typeof i === 'string' ?
              i.replace(/[\$,]/g, '')*1 :
              typeof i === 'number' ?
              i : 0;
            };

            //Total over all pages
            total = api
            .column( 6 )
            .data()
            .reduce( function (a, b) {
              return intVal(a) + intVal(b);
            }, 0 );

            // Total over this page
            pageTotal = api
            .column( 6, { page: 'current'} )
            .data()
            .reduce( function (a, b) {
              return intVal(a) + intVal(b);
            }, 0 );

            // Update footer
            $( api.column( 6 ).footer() ).html(
              pageTotal.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));


          },


          "aaSorting" :[[0,'asc']],

          "language": {
            "sEmptyTable":     "ไม่มีข้อมูลในตาราง",
            "sInfo":           "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
            "sInfoEmpty":      "แสดง 0 ถึง 0 จาก 0 รายการ",
            "sInfoFiltered":   "(กรองข้อมูล _MAX_ ทุกรายการ)",
            "sInfoPostFix":    "",
            "sInfoThousands":  ",",
            "sLengthMenu":     "แสดง _MENU_ รายการ",
            "sLoadingRecords": "กำลังโหลดข้อมูล...",
            "sProcessing":     "กำลังดำเนินการ...",
            "sSearch":         "ค้นหา: ",
            "sZeroRecords":    "ไม่พบข้อมูล",
            "oPaginate": {
              "sFirst":    "หน้าแรก",
              "sPrevious": "ก่อนหน้า",
              "sNext":     "ถัดไป",
              "sLast":     "หน้าสุดท้าย"
            },
            "oAria": {
              "sSortAscending":  ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
              "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
            }
          }
        });



      </script>