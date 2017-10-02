 $(function () {
 	//var table = $('#example1').DataTable();
 	$('#tbl_mhs').DataTable({
 		"pagingType": "full",
 		"scrollX": true,
 		"scrollCollapse": true,
 		"fixedColumns":   true,
 		"select": true,
 		columns:[
 		{data: 'nim'},
 		{data: "nama"},
 		{data: "jk"},
 		{data: "ttl"},
 		{data: "email"}
 		]
 	});

 	

 })