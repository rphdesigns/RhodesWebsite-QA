function validateForm() {
    var name = document.getElementById('name').value;
    if (name == "") {
        document.querySelector('.status').innerHTML = "Name is required.";
        return false;
    }
    var email = document.getElementById('email').value;
    if (email == "") {
        document.querySelector('.status').innerHTML = "Email cannot be empty";
        return false;
    } else {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!re.test(email)) {
            document.querySelector('.status').innerHTML = "Email format invalid";
            return false;
        }
    }
    var subject = document.getElementById('genderRadioOptions').value;
    if (subject == "") {
        document.querySelector('.status').innerHTML = "Gender cannot be empty";
        return false;
    }
    var message = document.getElementById('fitnessRadioOptions').value;
    if (message == "") {
        document.querySelector('.status').innerHTML = "Please select a Fitness Goal";
        return false;
    }
    var message = document.getElementById('workout_equipmentRadioOptions').value;
    if (message == "") {
        document.querySelector('.status').innerHTML = "Please select your Workout Equipment";
        return false;
    }
    var message = document.getElementById('workouts_perweek').value;
    if (message == "") {
        document.querySelector('.status').innerHTML = "Please select a number of Workouts Per Week";
        return false;
    }
    document.querySelector('.status').innerHTML = "Sending...";
}