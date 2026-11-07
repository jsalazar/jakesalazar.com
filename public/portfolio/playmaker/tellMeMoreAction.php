<?php
// INITIALIZE THE ERRORZ & FORMZ ARRAYZ
$errorz = array();
$formz = array();
$saveDate = date("D M j, Y g:i:s a", mktime());

// SANITY CHECK - check if form is being submitted
//echo "<div class=\"notice\"> TESTING  TESTING  TESTING  TESTING  TESTING  TESTING  TESTING  TESTING  TESTING <br></div>";

// ::::::::::::::::::::::::::::::::::::::::::::::::::
//          CHECK FORM SUBMISSION
// ::::::::::::::::::::::::::::::::::::::::::::::::::

// EXTRACT ALL FORM DATA
foreach($_POST as $key => $value) {
    $formz['s_'.$key] = strip_tags(trim($value));
}

// CONDUCT ERROR CHECKING OF REQUIRED FIELDS
if ($formz['s_pFirstName'] == "") {
    $errorz[] = "Please enter your first name on the form.";
}
else {
    $tempFirst = $formz['s_pFirstName'];
    if (!preg_match("/^[a-zA-Z ]*$/",$tempFirst)) {
        $errorz[] = "Only letters and spaces are allowed in your first name.";
    }
}

if ($formz['s_pLastName'] == "") {
    $errorz[] = "Please enter your last name on the form.";
}
else {
    $tempLast = $formz['s_pLastName'];
    if (!preg_match("/^[a-zA-Z ]*$/", $tempLast)) {
        $errorz[] = "Only letters and spaces are allowed in your last name.";
    }
}

if ($formz['s_pEmail'] == "") {
    $errorz[] = "Please enter your email on the form.";
}
else {
    $tempEmail = $formz['s_pEmail'];
    if (!filter_var($tempEmail, FILTER_VALIDATE_EMAIL)) {
         $errorz[] = "Please enter a valid email on the form.";
     }
}

if ($formz['s_pInterest'] == "") {
    $errorz[] = "Please select your interest on the form.";
}

// ::::::::::::::::::::::::::::::::::::::::::::::::::
//          CHECK FOR ERRORS
// ::::::::::::::::::::::::::::::::::::::::::::::::::

// COUNT AND CHECK FOR ANY ERRORS
$errorz_count = count($errorz);

if ($errorz_count > 0) {
    // RETURN JSON/AJAX RESPONSE
    echo json_encode(array("status"=>"error", "errors"=>$errorz));
}
else {
    // :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
    // NO ERRORS FOUND SO FINISH PROCESSING DATA
    // :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

    // SET DB CONNECTION VALUES
    $APP_hostName = "webapps2-db.miserver.it.umich.edu";
    $APP_userName="infinite";
    $APP_passWord="sC4mb8lic1uss";
    $APP_databaseName="infinite";
    $APP_table="lead_capture";


    // TO DO    !!!!!!!
    // TEST ALL DATABASE ERRORS:: connection, prepare, bind, execute, etc...

    // CONNECT TO DATABASE
    $APP_connection = new mysqli($APP_hostName, $APP_userName, $APP_passWord, $APP_databaseName);

    // CHECK DB CONNECTION
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    // SET DB FOR THIS TRANSACTION
    $APP_connection->select_db("infinite");

    // SET QUERY STATEMENT
    $sqlStatement = 'INSERT INTO lead_capture (save_date, first_name, last_name, email, interest, are_you_a) VALUES (?, ?, ?, ?, ?, ?)';

    // SANITIZE INPUT AS MUCH AS WE CAN
    $f_FirstName = $formz['s_pFirstName'];
    $f_LastName = $formz['s_pLastName'];
    $f_Email = $formz['s_pEmail'];
    $f_Interest = $formz['s_pInterest'];
    $f_AreYouA = $formz['s_pAreYou'];

    // PREPARE THE STATEMENT
    if (!($stmt = $APP_connection->prepare($sqlStatement))) {
        echo "Prepare failed: (" . $APP_connection->errno . ") " . $APP_connection->error;
    }

    // BIND AND EXECUTE STATEMENT :: TYPES:  s = string, i = integer, d = double,  b = blob
    if (!$stmt->bind_param('ssssss', $saveDate, $f_FirstName, $f_LastName, $f_Email, $f_Interest, $f_AreYouA)) {
        echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
    }

    if (!$stmt->execute()) {
        echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
    }

    // EXPLICITLY CLOSE THE STATEMENT
    $stmt->close();


    // SEND EMAIL TO PLAYMAKER
    $to = $f_Email;
    $subject = "Be A Playmaker : University of Michigan School of Education";
    $msg = "Thank you for your interest in our Teacher Education Programs.\nWe will be in touch within 48 hours to talk about our degree options and the benefits of the School of Education at the University of Michigan.\n\nInspired to talk now? Call the Office of Student Affairs at 734.615.1528 or email ask.soe@umich.edu\n\nLearn more about being a Playmaker: http://soe.umich.edu/playmaker";
    $mailheaders = "From: ask.soe@umich.edu\n";
    $mailheaders .= "Reply-To: ask.soe@umich.edu\n\n";
    mail($to, $subject, $msg, $mailheaders);


    // SEND EMAIL TO STAKEHOLDERS
    //$to = "hmgire@umich.edu";
    $to = "kdauka@umich.edu";
    $subject = "Playmaker: Tell Me More Form: Lead Submission";
    $msg = "A new Tell Me More form lead was recently submitted!\n\n";
    $msg .= "Name: {$formz['s_pFirstName']} {$formz['s_pLastName']}\n\n";
    $msg .= "Email: {$formz['s_pEmail']}\n\n";
    $msg .= "Are you interested in: {$formz['s_pInterest']}\n\n";
    $msg .= "Are you a: {$formz['s_pAreYou']}\n\n";
    $msg .= "Date: $saveDate\n\n";
    $msg .= "End of receipt...\n\n";
    $mailheaders = "From: soe-weboperations@umich.edu\n";
    $mailheaders .= "Reply-To: soe-weboperations@umich.edu\n\n";
    mail($to, $subject, $msg, $mailheaders);

    // RETURN JSON/AJAX RESPONSE
    echo json_encode(array("status"=>"success", "message"=>"Your request has been submitted successfully. Thanks for your interest."));


    // :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
    // RECORD THIS TRANSACTION  START
    // :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
    // FORM PARAMETERS

    // $formIdentity = "Prayer Request";
    // $sendEmail = "y";
    //    include("/usr/local/apache2/htdocs/global/bigBrotherAnalytics.php");

    // :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
    // RECORD THIS TRANSACTION  END
    // :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
    }
?>