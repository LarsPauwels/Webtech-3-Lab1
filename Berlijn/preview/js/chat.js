$(document).ready(function() {
	/*$("#send").click(function() {
		//alert("test");
		var msg = $(".form-control").val();
		var timestamp = new Date().toLocaleTimeString();

		writeMessage(msg, timestamp);
	});

	function writeMessage(msg, timestamp) {
		firebase.database().ref('messages/').push().set({
		    time: timestamp,
		    message: msg
		}, function(error) {
			if (error) {
				alert(error);
			} else {
				$(".form-control").val("");
			}
		});
	}*/

	var readMessages = firebase.database().ref('messages/');
	readMessages.on('value', updateMessages, errorMessages);

	function updateMessages(data) {
		var dataLength = data.numChildren();

		if (dataLength > 0) {
			$("#chat").text("");

			//console.log(data.val());
			var messages = data.val();
			var keys = Object.keys(messages);

			for (var i = 0; i < keys.length; i++) {
				var k = keys[i];
				var time = messages[k].timestamp;
				var msg = messages[k].message;
				var userID = messages[k].userKey;
				var active = messages[k].active;

				displayChat(msg, time, active, userID);
			}
		}
	}

	function errorMessages(error) {
		console.log('Error!');
		console.log(error);
	}

	function displayChat(msg, time, active, userID) {
		var readUsers = firebase.database().ref('users/' + userID);
		readUsers.on('value', function(data) {
			username = data.val().username;
			color = data.val().color;
			if (active == 1) {
				$("#chat").append("<span style='color: " + color + "'>" + username + ": " + msg + " - " + time + "</span><br>");
			}
		});
	}

});