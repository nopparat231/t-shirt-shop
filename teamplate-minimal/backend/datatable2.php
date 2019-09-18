 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript"src="../js/buttons.print.min.js"></script>
<script type="text/javascript" language="javascript" src="../js/dataTables.buttons.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable({
    	
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
    $('#data').DataTable({
    	
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
    $('#myTable2').DataTable({
    	
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
    $('#myTable3').DataTable({
    	
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
    $('#myTable4').DataTable({
    	
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
    $('#myTable5').DataTable({
    	
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
} );
</script>