$(document).ready(function() {
	$("#send").click(function() {
		var msg = $(".form-control").val();
		var timestamp = new Date().toLocaleTimeString();
		var active = 1;
		var userKey = "-LYi67VpUwjmb4p9o7RU";

		writeMessage(active, msg, timestamp, userKey);
	});

	function writeMessage(active, msg, timestamp, userKey) {
		firebase.database().ref('messages/').push().set({
		    timestamp: timestamp,
		    message: msg,
		    active: active,
		    userKey: userKey 
		}, function(error) {
			if (error) {
				alert(error);
			} else {
				$(".form-control").val("");
			}
		});
	}

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
				if (color != "#FFF") {
					$("#chat").append("<span id='chat-item' style='color: " + color + "'>" + username + " (admin): " + msg + " - " + time + "</span>");
				} else {
					$("#chat").append("<span id='chat-item' style='color: " + color + "'>" + username + ": " + msg + " - " + time + "</span>");
				}
			}
		});
	}





	$("#auto").click(function() {
		$(".form-control").val("Wil je ook gebruik maken van de Wall of Shame? Surf dan naar http://wallofshame.myware.be!");
	});

});