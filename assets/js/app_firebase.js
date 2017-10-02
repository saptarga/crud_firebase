$(function () {
  var tableHTML = '';
  var obj = [];
  var obj2 = [];
  var nama;
  var config = {
    apiKey: "",
    authDomain: "belajar-759af.firebaseapp.com",
    databaseURL: "https://belajar-759af.firebaseio.com",
    projectId: "belajar-759af",
    storageBucket: "belajar-759af.appspot.com",
    messagingSenderId: "494275985461"
  };
  firebase.initializeApp(config);
  var tblMhs = firebase.database().ref().child('mhs');
  tblMhs.on("value", function(snap) {
    obj = [];
    $.each(snap.val(), function(index, element) {
      obj2 = {"nim":element.nim,"nama":element.nama,"jk":element.jk,"ttl":element.ttl,"email":element.email};
      obj.push(obj2);
    });
    addTable(obj);
  });

  function addTable(data){
   $('#tbl_mhs').DataTable().clear().draw();
   $('#tbl_mhs').DataTable().rows.add(data).draw();
 }

 $( "#btn-save-mhs" ).click(function() {
    $('#modal-form-mhs').modal('hide');
    var action = $("#btn-save-mhs").val();
    if (action == "Simpan"){
      var v_nim = $('input:text[name=txtNim]').val();
      var v_nama = $('input:text[name=txtNama]').val();
      var v_jk = $('input[name=rbJk]:checked').val();
      var v_tmpt_lahir = $('input[name=txtTempatLahir]').val();
      var v_tgl_lahir = $('input[name=txtTglLahir]').val();
      var v_email = $('input[name=txtEmail]').val();
      firebase.database().ref('mhs/'+v_nim).set({
       nim: v_nim,
       nama: v_nama,
       jk: v_jk,
       ttl: v_tmpt_lahir+', '+v_tgl_lahir,
       email: v_email
     });
    }else{
      var v_nim = $('input:text[name=txtNim]').val();
      var v_nama = $('input:text[name=txtNama]').val();
      var v_jk = $('input[name=rbJk]:checked').val();
      var v_tmpt_lahir = $('input[name=txtTempatLahir]').val();
      var v_tgl_lahir = $('input[name=txtTglLahir]').val();
      var v_email = $('input[name=txtEmail]').val();

      firebase.database().ref('mhs/'+v_nim).update ({
        nama: v_nama,
        jk: v_jk,
        ttl: v_tmpt_lahir+', '+v_tgl_lahir,
        email: v_email
      });
    }
    $('#form-mhs')[0].reset();
    $("#btn-save-mhs").prop('value', 'Simpan');
  });

 $( "#btn-edit-mhs" ).click(function() {
  $.map($('#tbl_mhs').DataTable().rows('.selected').data(), function (item) {
    $('input:text[name=txtNim]').val(item.nim);
    $('input:text[name=txtNim]').attr('readonly', true);
    $('input:text[name=txtNama]').val(item.nama);
    var ttl = item.ttl.split(',');
    $('input:text[name=txtTempatLahir]').val(ttl[0]);
    $('input:text[name=txtTglLahir]').val(ttl[1]);
    $('input:text[name=txtEmail]').val(item.email);
    $("input[name=rbJk][value="+item.jk+"]").attr('checked', true);
    $("#btn-save-mhs").prop('value', 'Ubah');
  });
      //tblMhs.orderByChild('nim').equalTo(nim);
      $('#modal-form-mhs').modal('show');
 });

 $( "#btn-hapus-mhs" ).click(function() {
    $.map($('#tbl_mhs').DataTable().rows('.selected').data(), function (item) {
      var del = item.nim;
      firebase.database().ref('mhs/'+del).remove();
    });
 });


  function cek_login(){
    firebase.auth().onAuthStateChanged(function(user) {
      if (user) {
        return true;
      } else {
        	window.location.href = "login.php";
        }
    });
  }
  cek_login();

  $( "#btn-sign-out" ).click(function(e) {
    e.preventDefault();
    firebase.auth().signOut().then(function() {
      window.location.href = "login.php";
    }).catch(function(error) {
      swal ( "Oops" ,  "Something went wrong!" ,  "error" )
    });
  });
}())