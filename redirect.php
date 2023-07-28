<?php
// define variables and set to empty values
$name = $email = $gender = $from = $to =$timefrom = $timeto = $noofdays = $age = $occupation = $phone = $google = $Weightcontrol = $fitness = $digestiondisorde = $respiratorytrouble = $jointpain = $backpain = $Thyroid = $BP = $sugar = $tiredfeeling = $allergies = $other = $phem = $Insomnia = $moodswing = $lackingmotivation = $respiratorytrouble = $poorconcentration = $fear = $anger = $anxiety = $Restlessness = $stress = $loneliness = $boredom = $depression = $lowselfesteem = $other2 = $Wantofinnerpeace = $unabletoenjoylifeandwork = $difficultrelationship = $failedaffairs = $otherissue = $other3 = $other4 = $other5 = $date2 = $registration = $remuneration = $venue = "";
$image = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $from = test_input($_POST["from"]);
  $to = test_input($_POST["to"]);
  $timefrom = test_input($_POST["timefrom"]);
  $timeto = test_input($_POST["timeto"]);
  $noofdays = test_input($_POST["noofdays"]);
  $age = test_input($_POST["age"]);
  $occupation = test_input($_POST["occupation"]);
  $phone = test_input($_POST["phone"]);
  $google = test_input($_POST["vendor"]);
  $Weightcontrol = test_input($_POST["Wcontrol"]);
  $fitness = test_input($_POST["fit"]);
  $respiratorytrouble = test_input($_POST["rest"]);
  $jointpain = test_input($_POST["joint"]);
  $backpain = test_input($_POST["backp"]);
  $Thyroid = test_input($_POST["Thyroid"]);
  $BP = test_input($_POST["Blood"]);
  $sugar = test_input($_POST["sug"]);
  $tiredfeeling = test_input($_POST["tiredf"]);
  $allergies = test_input($_POST["aller"]);
  $other = test_input($_POST["other"]);
  $phem = test_input($_POST["phem"]);
  $Insomnia = test_input($_POST["Inso"]);
  $moodswing = test_input($_POST["moods"]);
  $lackingmotivation = test_input($_POST["lackingmotivation"]);
  $poorconcentration = test_input($_POST["poorconcentration"]);
  $fear = test_input($_POST["fear"]);
  $anger = test_input($_POST["anger"]);
  $anxiety = test_input($_POST["anxiety"]);
  $Restlessness = test_input($_POST["Restlessness"]);
  $stress = test_input($_POST["stress"]);
  $loneliness = test_input($_POST["loneliness"]);
  $boredom = test_input($_POST["boredom"]);
  $depression = test_input($_POST["depression"]);
  $other2 = test_input($_POST["other2"]);
  $Wantofinnerpeace = test_input($_POST["Wantofinnerpeace"]);
  $unabletoenjoylifeandwork = test_input($_POST["unabletoenjoylifeandwork"]);
  $difficultrelationship = test_input($_POST["difficultrelationship"]);
  $failedaffairs = test_input($_POST["failedaffairs"]);
  $otherissue = test_input($_POST["otherissue"]);
  $other3 = test_input($_POST["other3"]);
  $other4 = test_input($_POST["other4"]);
  $other5 = test_input($_POST["other5"]);
  $date2 = test_input($_POST["date2"]);
  $registration = test_input($_POST["registration"]);
  $remuneration = test_input($_POST["remuneration"]);
  $Venue = test_input($_POST["venue"]);
  $gender = test_input($_POST["gender"]);
  $digestiondisorde = test_input($_POST["digestion"]);
  $lowselfesteem = test_input($_POST["lowselfesteem"]);

  $image = $_FILES('sigImage');

  print_r($image);


  

  $to = "suman.banik@codtrees.com";
    $subject = "This is subject";
    
    $message = "HOLISTIC LIVING PROGRAM
            Venue $venue
            Date $from
            To $to
            Time $timefrom to $timeto  
            No of Days $noofdays
            Conducted By: Dr. T. K. Maiti & Mrs Mitali Maiti, of Holistic Yog Management Nest(hymn)
            Yogananda Arogya Bhaban. Hijli Co-Operative, Kharagpur-721306
            Govt. Regn No: IV/235/2010. Estd:20-10-2010 Mob:9434056321/9564138104
            WhatsApp: 8637869921 E-Mail: tkm.hymn@gmail.com Website: www.holisticyol
            .com
            Registration Form (Confidential)
            
            Age $age Yr. Gender: $gender Occupation: $occupation 
            E-Mail $email 
            Name $name
            Mob. No: $phone
            Purpose of practicing holisticyog (Holistic Health Information).
            Physical:
            Willing to join google group: $google
            $Weightcontrol/ $fitness/ $digestiondisorde /$respiratorytrouble/ $jointpain/ $backpain
            $Thyroid/$BP/ $sugar/$tiredfeeling / $allergies/ Others if any $other.
            $phem
            $Insomnia ; $moodswing/$lackingmotivation / $poorconcentration /  $fear/  $anger/ $anxiety
            $Restlessness / $stress /  $loneliness/$boredom/$depression /$lowselfesteem . $other2...
            Spiritual:
            $Wantofinnerpeace / $unabletoenjoylifeandwork/ $difficultrelationship / $failedaffairs
            $otherissue
            Doctor's diagnosis for chronic disease (if any). $other3 
            Any recent surgery (if any). $other4 
            Are you currently any type of medication?.. $other5
            I declare that, all relevant information given by me on this form is correct to my belief and take
            the responsibility for myself in attending holistic-yog workshop and any consequences thereof.
            Date: $date2
            Signature of Participant (
            Note: If one has any doubt whether 'holisticyog' can be practiced with a particular health
            conditions, consult beforehand and inform any ill feeling to the instructor during practice.
            #Registration: $registration Rs. -/- Remuneration:  $remuneration Rs/-
            +For On Line Payment - Arch. No: 10224422221 Name Tapas Kumar Maili IFSC-SBIN0000202
           
    ";
    
   
    
    $retval = mail ($to,$subject,$message);
    
    if( $retval == true ) {
        echo "Message sent successfully...";
    }else {
        echo "Message could not be sent...";
    }


  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>