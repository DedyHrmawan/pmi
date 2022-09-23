<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}

	//authentication
	public function VLogin()
	{
		$this->load->view('pmi-admin/VLogin');
	}

	//signup penodnor
	public function VSignUp()
	{
		$this->load->view('pmi-depan/VSignUp');
	}

	//Blank Page
	public function VBlank()
	{
		$this->template->depan('pmi-depan/VBlank');
	}

	public function reminderEmail()
	{
		$response = false;
		$mail = new PHPMailer();


		// SMTP configuration
		$mail->isSMTP();
		$mail->Host     = 'smtp.googlemail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'uddpmimalang@gmail.com'; 
		$mail->Password = 'pgxilesstwliahpu'; 
		$mail->SMTPSecure = 'ssl';
		$mail->Port     = 465;

		$mail->Timeout = 60;
		$mail->SMTPKeepAlive = true;

		$mail->setFrom('uddpmimalang@gmail.com', 'UDD PMI Malang');
		$mail->addReplyTo('uddpmimalang@gmail.com', 'UDD PMI Malang'); 

		// Add a recipient
		$mail->addAddress('deblenk.dh@gmail.com'); 

		// Email subject
		$mail->Subject = 'Reminder Donor Darah'; 

		// Set email format to HTML
		$mail->isHTML(true);

		// Email body content
		$mailContent =  $this->load->view('pmi-admin/template/email','',true);
		$mail->Body = $mailContent;

		// Send email
		if (!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			echo 'Message has been sent';
		}
	}
}
