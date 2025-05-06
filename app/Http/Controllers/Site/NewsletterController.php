<?php
namespace App\Http\Controllers\Site;
use App\Models\NewsletterModel;
use Illuminate\Http\Request;


class NewsletterController extends Controller
{
    public function add_to_newsletter(Request $request)
    {
            // Validação dos dados
            $request->validate([
                'email' => [
                    'required',
                    'email',
                    'unique:admin_newsletter,email',
                    'regex:/^[a-zA-Z0-9._%+-]+@(' .
                        'gmail\.com|yahoo\.com|outlook\.com|hotmail\.com|aol\.com|' .
                        'icloud\.com|protonmail\.com|zoho\.com|gmx\.com|yandex\.com|' .
                        'live\.com|msn\.com|comcast\.net|verizon\.net|sbcglobal\.net|' .
                        'mail\.ru|web\.de|t-online\.de|free\.fr|laposte\.net|orange\.fr|' .
                        'bol\.com\.br|uol\.com\.br|terra\.com\.br|ig\.com\.br|r7\.com|' .
                        'globomail\.com|oi\.com\.br|hotmail\.es|yahoo\.es|outlook\.es|' .
                        'sapo\.pt|netcabo\.pt|yahoo\.co\.jp|docomo\.ne\.jp|ezweb\.ne\.jp|' .
                        'naver\.com|hanmail\.net|163\.com|126\.com|sina\.com|qq\.com|' .
                        'me\.com|fastmail\.com|hushmail\.com|att\.net|charter\.net|' .
                        'rogers\.com|btinternet\.com|virginmedia\.com' .
                    ')$/i'
                ]
            ], [
                'required' => 'O campo :attribute é obrigatório.',
                'email.email' => 'O e-mail informado não é válido.',
                'email.unique' => 'Este e-mail já está cadastrado na nossa newsletter.',
                'email.regex' => 'O e-mail deve ser de um provedor válido.',
            ], [
                'email' => 'E-mail',
            ]);

            $email = $request->get('email');
            $count = NewsletterModel::where('email',$email)->count();
            if($count == 0){
                $model = new NewsletterModel();
                $model->email = $email;
                $model->save();

                return response()->json(['success' => 'E-mail cadastrado com sucesso!']);
            }

            return response()->json(['error' => 'E-mail já cadastrado!']);


        }

}

