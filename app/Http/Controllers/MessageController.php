<?php

namespace App\Http\Controllers;

use App\Helpers\EmailConfig;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;


class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $mensajes = Message::where('status' , '=', 1 )->get();
        return view('pages.message.index', compact('mensajes'));
    
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    function storePublic(Request $request)
    {
        $mensaje = new Message();
        $data= $request->all();

        $mensaje->full_name = $request-> nombre; 
        $mensaje->email = $request-> email; 
        $mensaje->phone = $request-> telefono; 
        $mensaje->source = $request-> textoSeleccionado; 
        $mensaje->service_product = $request-> textoMeet; 

        
        $mensaje->save();
        $this->envioCorreo($data);    
        return response()->json(['message' => 'Solicitud enviada Correctamente']);
    }
    private function envioCorreo($data){
        dump($data);
        
        $name = $data['nombre'];
        $mail = EmailConfig::config();
        try {
            $mail->addAddress($data['email']);
            $mail->Body = '
                    <html lang="en">
                    <head>
                    <meta charset="UTF-8" />
                    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                    <title>Mundo web</title>
                    <link rel="preconnect" href="https://fonts.googleapis.com" />
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
                    <link
                        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
                        rel="stylesheet"
                    />
                    <style>
                        * {
                        margin: 0;
                        padding: 0;
                        box-sizing: border-box;
                        }
                
                        @font-face {
                        font-family: grotesk;
                        src: url(https://yepadvisors.com/fonts/PPRightGroteskCompactMedium.woff);
                        font-weight: normal;
                        }
                    </style>
                    </head>
                    <body>
                    <main>
                        <table
                        style="
                            width: 600px;
                            margin: 0 auto;
                            text-align: center;
                            background-image: url(https://yepadvisors.com/images/mail/fondo.png);
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                        "
                        >
                        <thead>
                            <tr>
                            <th
                                style="
                                flex-direction: row;
                                justify-content: center;
                                align-items: center;
                                margin: 100px;
                                "
                            >
                                <img
                                src="https://yepadvisors.com/images/mail/logo.png"
                                alt="mundo web"
                                />
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>
                                <p
                                style="
                                    color: #050a41;
                                    font-weight: 500;
                                    font-size: 18px;
                                    text-align: center;
                                    width: 500px;
                                    margin: 0 auto;
                                    padding: 20px 0;
                                    font-family: Montserrat, sans-serif;
                                "
                                >
                                <span style="display: block">Hola </span>
                                </p>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <p
                                style="
                                    color: #2d694b;
                                    font-size: 40px;
                                    line-height: 20px;
                                    font-family: grotesk;
                                "
                                >
                                <span style="display: block">' . $name . ' </span>
                                </p>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <p
                                style="
                                    color: #2d694b;
                                    font-size: 40px;
                                    line-height: 70px;
                                    font-family: grotesk;
                                "
                                >
                                !Gracias
                                <span style="color: #020303">por escribirnos! 💹</span>
                                </p>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <p
                                style="
                                    color: #050a41;
                                    font-weight: 500;
                                    font-size: 18px;
                                    text-align: center;
                                    width: 500px;
                                    margin: 0 auto;
                                    padding: 20px 0;
                                    font-family: Montserrat, sans-serif;
                                "
                                >
                                En breve nos pondremos en contacto
                                contigo.
                                </p>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <a
                                href="https://yepadvisors.com/"
                                style="
                                    text-decoration: none;
                                    background-color: #2d694b;
                                    color: white;
                                    border-radius: 10px;
                                    padding: 12px 16px;
                                    display: inline-flex;
                                    justify-content: center;
                                    align-items: center;
                                    gap: 10px;
                                    font-weight: 600;
                                    font-family: Montserrat, sans-serif;
                                    font-size: 16px;
                                "
                                >
                                <span>Visita nuestra web</span>
                                
                                </a>
                            </td>
                            </tr>
                            <tr>
                            <td style="text-align: right; padding-right: 30px">
                                <img
                                src="https://yepadvisors.com/images/mail/persona.png"
                                alt="mundo web"
                                style="width: 80%; margin-top: 100px"
                                />
                            </td>
                            </tr>
                        </tbody>
                        </table>
                    </main>
                    </body>
                </html>
          
            ';
            $mail->isHTML(true);
            $mail->send();
            
        } catch (\Throwable $th) {
            //throw $th;
        }
        
       
    }

    /**
     * Display the specified resource.
     */
    //public function show(Message $message)
    public function show($id)
    {
        //
        $message = Message::findOrFail($id);

        $message->is_read = 1; 
        $message->save();

        return view('pages.message.show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMessageRequest $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function borrar(Request $request)
    {

        $mensaje = Message::find($request->id);
        $mensaje->status = 0; 
        $mensaje->save();

        return response()->json(['success' => true]);

    }
}
