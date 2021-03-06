<?php
// Download the library and copy into the folder containing this file.
require_once '/path/to/vendor/autoload.php'; // Loads the library

use Twilio\Twiml;

$response = new Twiml();
$response->enqueue(["workflowSid" => "WW0123456789abcdef0123456789abcdef"])
    ->task("{'account_number':'12345abcdef'}");
print $response;
?>

<!-- alternatively -->

<?php
$workflowSid = "WW0123456789abcdef0123456789abcdef";

header('Content-Type: application/xml');
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

?>
<Response>
    <Enqueue workflowSid="<?php echo $workflowSid ?>">
        <Task>{"account_number": "12345abcdef"}</Task>
    </Enqueue>
</Response>
