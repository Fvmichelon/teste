<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendContact;
use App\Models\GeneralModel;

class EmailController extends Controller
{
    private $recaptcha;
    public function sendEmail(Request $request)
    {
        $this->recaptcha = $request->input('g-recaptcha-response');
        if ($this->validateCaptcha($this->recaptcha)) {
            // Validação dos dados
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'cellphone' => 'required|string',
                'message' => 'required|string',
            ], [
                'required' => 'O campo :attribute é obrigatório.', // Mensagem genérica para todos os campos obrigatórios
            ], [
                'name' => 'Nome',
                'email' => 'E-mail',
                'cellphone' => 'Celular',
                'message' => 'Mensagem',
            ]);
            // Captura os dados do formulário
            $data = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'cellphone' => $request->input('cellphone'),
                'subject' => $request->input('subject', null),
                'message' => $request->input('message'),
            ];

           $general_admin = GeneralModel::first()->toArray();
           $email = $general_admin['email'];

            // Enviar o e-mail
            Mail::to($email)->send(new SendContact($data));

            if ($request->ajax()) {
                return response()->json(['success' => 'E-mail enviado com sucesso!']);
            }

            // Redirecionar de volta com mensagem de sucesso
            return back()->with('success', 'E-mail enviado com sucesso!');
        }
    }


    protected function validateCaptcha($recaptcha)
    {
        $checkRecaptcha = false;
        $captcha = $recaptcha;
        $secretKey = config('services.recaptcha.secret');
        $response = $captcha;
        $userIP = $_SERVER['REMOTE_ADDR'];
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$userIP";
        $response = file_get_contents($url);
        $response = json_decode($response);

        if ($response->success) {
            $checkRecaptcha = true;
        };
        return $checkRecaptcha;
    }
}
