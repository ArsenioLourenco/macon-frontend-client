<?php
require_once 'vendor/autoload.php';
require_once 'ImageBase64.php';

// Reference the DOM Namespace
use Dompdf\Dompdf;
class GenerateTicket {

    private $dompdf;
    private $imageBase64;

    function __construct()
    {
        $this->dompdf = new Dompdf();

        $this->imageBase64 = new ImageBase64();  
    }
    function run() {

        $logo = __DIR__ . '/../assets/img/macon-logo.png';

        // seats, route, departureDate, price, reservationCode 

        // Later create a separate function to return session values
        $seats = isset($_GET['seats']) ? $_GET['seats'] : '0';
        $route = isset($_GET['route']) ? $_GET['route'] : '-------';
        $departureDate = isset($_GET['departureDate']) ? $_GET['departureDate'] : '-------';
        $reservationCode = isset($_GET['reservationCode']) ? $_GET['reservationCode'] : '-------';
        $price = isset($_GET['price']) ? $_GET['price'] : '0Kzs';
        $date = isset($_GET['date']) ? $_GET['date'] : '---------';

        $htmlData = <<<HTML
            <div style="text-align:center;">
                <img src="data:image/png;base64,{$this->imageBase64->generateBase64($logo)}" />
            </div>
            <h1 style="
                text-align: center; 
                color: #172b4d; 
                font-size: 25; 
                font-family: Arial, Helvetica, sans-serif;
                padding-top: 10px;
                ">
                TICKET PARA VIAGEM
            </h1>

            <div>
                <div style="padding-bottom: 10px; font-size: 20px;">
                    <strong>Reserva: </strong>{$seats}
                </div>

                <div style="padding-bottom: 10px; font-size: 20px;">
                    <strong>Tragecto: </strong> {$route}
                </div>

                <div style="padding-bottom: 10px; font-size: 20px;">
                    <strong>Data: </strong> {$departureDate} 
                </div>

                <div style="padding-bottom: 10px; font-size: 20px;">
                    <strong>Montante: </strong> {$price}
                </div>

                <div style="padding-bottom: 10px; font-size: 20px;">
                    <strong>Codigo de Reserva: </strong> {$reservationCode}
                </div>
            </div>
            <div  style="padding-bottom: 1px; font-size: 10px; margin-left: 500px">
                {$date}
            </div>
        HTML;

        $this->dompdf->loadHtml($htmlData);

        // (Optional) Setup the paper size and orientation
        $this->dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $this->dompdf->render();

        // Output the generated PDF to Browser and open in browser tab
        $this->dompdf->stream('ticket.pdf', array("Attachment" => false));

        session_destroy();
    }

    function test() {

        // var_dump(isset($_REQUEST['teste']) ? $_POST['teste'] : 'nada');

        return json_encode(['teste' => 'fd']);
    }
}
