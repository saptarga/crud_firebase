$(function () {
	$("#verified-alert").hide();
	var config = {
		apiKey: "",
		authDomain: "belajar-759af.firebaseapp.com",
		databaseURL: "https://belajar-759af.firebaseio.com",
		projectId: "belajar-759af",
		storageBucket: "belajar-759af.appspot.com",
		messagingSenderId: "494275985461"
	};
	firebase.initializeApp(config);
	const auth = firebase.auth();
	var providerGoogle = new firebase.auth.GoogleAuthProvider();

	auth.onAuthStateChanged(function(cek_user) {
		if (cek_user) {
			var user = firebase.auth().currentUser;
			var email= user.email;
			var emailVerified = user.emailVerified;
			if (!emailVerified){
				$("#verified-alert").fadeIn("slow");
			}else{
				window.location.href = "index.php";
			}
		} else {
			console.log("not sign in");
		}
	});

	$( "#btn-signup" ).click(function(e) {
		e.preventDefault();
		var email = $('#txtEmail-formLogin').val();
		var password = $('#txtPassword-formLogin').val();
		auth.createUserWithEmailAndPassword(email, password).then(function () {
			console.log("Sign Up Suksess");
			var user = auth.currentUser;
			user.sendEmailVerification().then(function() {
				swal("Verification Email", "Please check your email to verify your account", "success");
				logout();
			}, function(error) {
				swal ( "Oops" ,  "Verification email not send" ,  "error" )
			});
		}).catch(function(error) {
			var errorCode = error.code;
			var errorMessage = error.message;
			if(error != null){
				$( ".field-login-password" ).addClass( "has-error" );
				$( ".field-login-email" ).addClass( "has-error" );
				$( ".field-login-email>.help-block" ).html( errorCode );
			}
		});
	});

	$( "#btn-signin" ).click(function(e) {
		e.preventDefault();
		var email = $('#txtEmail-formLogin').val();
		var password = $('#txtPassword-formLogin').val();
		firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
			var errorCode = error.code;
			var errorMessage = error.message;
			$( ".field-login-password" ).addClass( "has-error" );
			$( ".field-login-email" ).addClass( "has-error" );
			$( ".field-login-email>.help-block" ).html( errorCode );
		});
	});

	
	$( "#btn-logout" ).click(function(e) {
		logout();
	});

	$( "#btn-login-google" ).click(function(e) {
		e.preventDefault();
		firebase.auth()

		.signInWithPopup(providerGoogle).then(function(result) {
			var token = result.credential.accessToken;
			var user = result.user;

			console.log(token)
			console.log(user)
		}).catch(function(error) {
			var errorCode = error.code;
			var errorMessage = error.message;

			console.log(error.code)
			console.log(error.message)
		});
	});

	function logout(){
		firebase.auth().signOut().then(function() {
			console.log("sign out berhasil");
			$("#verified-alert").hide();
		}).catch(function(error) {
			swal ( "Oops" ,  "Something went wrong!" ,  "error" )
		});
	}
}())