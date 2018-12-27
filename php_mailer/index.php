<?php
 require 'phpmailer/PHPMailerAutoload.php';
 $name=$_POST['name'];
 $email=$_POST['mail'];
$billnumber=$_POST['billdata'];
$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = "smtp.sendgrid.net";
$mail->SMTPSecure = "tls";
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'azure_7ccdeda452370438d3e0cbab060465e5@azure.com';
$mail->Password = 'Marketing2017!';

$mail->setFrom($email, 'Going To Expire');
$mail->addAddress($email);
$mail->Subject = 'SMTP email test';
$mail->Charset='UTF-8';
$mail->isHTML(true);
$mail->Body = 
'<div style="background-color:#dcd69a; padding:60px">
<h1>SAMY & SONS PAWN BROKER</h1><br/>
<h1>Final Notice</h1><hr>
<label>Mr.&Mrs/Miss</label>  '.$name.'<br/>
<p>Dear Sir/Madam!<br>
Pawn Ticket Number '.$billnumber .'<br>
We write to notify you that we have decided to sell the articles that was pawned by you.but failed to redeem<br>
within the time.
<br/>
Please note this is your final notification and action will be taken to sell your pawned articles without any<br/>
further notice after <h5> 15 days</h5> No credit will be given for any payments made before this date unless the pawned <br/>
articles is redeemed.
<br/>
<br/>
If you would like to prevent this action being taken,please contact our store within <h4>15 days</h4> from the receipt of <br/>
this letter.<br>
Thank you<br>
Samy & Sons<br/><br/><br/></p>
<p>அன்புடையீர்‌ <br/><br/>
உங்களால்‌ எமது ஸ்தாபனத்தில்‌ அடைவு வைக்கப்பட்ட பொருட்களை தங்கள் குறிப்பிட்ட<br>
காலத்தவணையின்படி மீட்டுக்கொள்ள தவறியபடியால், நாம் இவற்றை விற்பனை செய்ய முடிவு செய்துள்ளோம்<br>
இதுவே உங்களுக்கு தரப்படும் இறுதி அறிவித்தலாகும். மேலே குறிப்பிட்ட திகதியில் இருந்து<br> 
15 நாட்கள் பின் அடைவு வைக்கப்பட்டுள்ள தங்க நகைகள்  விற்பனை செய்யப்படும்.இத்திகதிக்கு <br/>
முன் அடைவு வைக்கப்பட்ட பொருட்களை மீட்டாலன்றி திருப்பித்தரமாட்டாது.<br>
தாங்கள் இந்த நடவடிக்கையைத் தவிர்க்க விரும்பினால், தயவு செய்து இக்கடிதம் கிடைத்த <br>
15 நாட்களுக்குள் காரியாலத்துடன் தொடர்புகொள்ளும்படி தாழ்மையுடன் கேட்டுக்கொள்கின்றோம்<br>
<br>
நன்றி நிர்வாகம்<br>
சாமி அன்ட் சன்ஸ் 
</p>


</div>
';

if ($mail->send())
{
    echo "Mail sent";
}
else
{
	echo "Mail not sent";
}

?>	
