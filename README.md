# This library is not maintained after build.

# Codeigniter Textlocal SMS Library
Textlocal sms library integration for codeigniter. Send textlocal sms using codeigniter manipulated library.

# Textlocal SMS Account Setup:
1. Download the application folder.
2. Open the folder application/libraries & edit Setupfile.php and configure 
  "username"=> 'your@email.com'
  "hash"=> 'Your hash code here' & 
  "SenderName" with your sender name. 
  Save the file.
3. Finally textlocal sms setup completed. You can able to send sms by loading the library where you want in your code
  $this->load->library('setupfile');
  $this->setupfile->send("9000000000", "Hello there this is message");

