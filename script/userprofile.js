/*IT23164826
  DISANAYAKA E.S*/
  
function saveUserInfo(){
    var profilePicBtn = document.getElementById('profilePicBtn').value;
    var userName = document.getElementById('userName').value;
    var firstName = document.getElementById('firstName').value;
    var lastName = document.getElementById('lastName').value;
    var telephone = document.getElementById('telephone').value;
    var email = document.getElementById('email').value;
    
    if(!profilePicBtn|| !userName || !firstName || !lastName || !telephone || !email){
        alert("Hmm... It seems you haven't completed all the fields. Please upload a Profile Picture & complete all fields before you Save Changes");
        return;
    }
    else{
        alert('Your user information changed successfully');
        return;
    }

}





