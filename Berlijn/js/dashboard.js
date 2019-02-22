$(document).ready(function() {
	var j = 0;
	var x = 0;

	var readMessages = firebase.database().ref('messages/');
	readMessages.on('value', updateMessages, errorMessages);

	function updateMessages(data) {
		var dataLength = data.numChildren();
		$("#messages").text(dataLength);

		if (dataLength > 0) {
			var messages = data.val();
			var keys = Object.keys(messages);

			$("#append").text("");

			for (var i = 0; i < keys.length; i++) {
				var k = keys[i];
				var blocked = messages[k].active;
				var msg = messages[k].message;
				var userID = messages[k].userKey;
				var active = messages[k].active;


				if (blocked == 2) {
					x++;
				}

				displayFilter(msg, userID, active, k);
			}
			$("#blocked").text(x);
		}
	}

	function errorMessages(error) {
		console.log('Error!');
		console.log(error);
	}

	var readUsers = firebase.database().ref('users/');
	readUsers.on('value', updateUsers, errorUsers);

	function updateUsers(data) {
		var dataLength = data.numChildren();
		$("#users").text(dataLength);

		if (dataLength > 0) {
			var users = data.val();
			var keys = Object.keys(users);

			for (var i = 0; i < keys.length; i++) {
				var k = keys[i];
				var banned = users[k].blocked;
				var username = users[k].username;
				var full_name = users[k].fullName;

				if (banned == 1) {
					j++;
				}

				displayUserFilter(username, full_name, banned, k);
			}
			$("#banned").text(j);
		}
	}

	function errorUsers(error) {
		console.log('Error!');
		console.log(error);
	}

	function displayFilter(msg, userID, active, key) {
		var readUsers = firebase.database().ref('users/' + userID);
		readUsers.on('value', function(data) {
			username = data.val().username;
			full_name = data.val().fullName;
			
			if (active == 0) {
				$("#append").append("<tr><td class='media line'>" + username + "</td><td class='client line'>" + msg + "</td><td class='status line'><span id='activate' data-msg="+key+">Active</span><span style='background-color: #ed6f56;' id='block' data-msg="+key+">Closed</span></td></tr>");
			}
		});
	}

	function displayUserFilter(username, full_name, banned, key) {
		var readUsers = firebase.database().ref('users/' + key);
		readUsers.on('value', function(data) {
			username = data.val().username;
			full_name = data.val().fullName;
			
			if (banned == 0) {
				$("#usersShow").append("<tr class='userBlock'><td class='media line'>" + full_name + "</td><td class='client line' data-id="+key+" data-blocked='0'>" + username + "</td></tr>");
			} else {
				$("#usersShow").append("<tr class='userBlock'><td class='media line' style='color: red !important;'>" + full_name + "</td><td class='client line' style='color: red !important;' data-id="+key+" data-blocked='1'>" + username + "</td></tr>");
			}
		});
	}

	$(document).on('click', '#activate', function() {
		var msgID = $(this).data('msg');

		var messageRef = firebase.database().ref("messages/" + msgID);
		messageRef.update({active: 1});

		
	});

	$(document).on('click', '#block', function() {
		var msgID = $(this).data('msg');

		var messageRef = firebase.database().ref("messages/" + msgID);
		messageRef.update({active: 2});
	});

	$(document).on('click', '.userBlock', function() {
		var userID = $(this).find(".client").data('id');
		var blockedID = $(this).find(".client").data('blocked');

		if (blockedID == 0) {
			console.log("test");
			var usersRef = firebase.database().ref("users/" + userID);
			usersRef.update({blocked: 1});
		} else {
			console.log("test");
			var usersRef = firebase.database().ref("users/" + userID);
			usersRef.update({blocked: 0});
		}
		
		location.reload();
	});

});