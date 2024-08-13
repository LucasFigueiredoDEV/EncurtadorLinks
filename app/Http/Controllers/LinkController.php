<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Links;
use Validator;

class LinkController extends Controller
{
    // Function to return view home
    public function home(){
        $shortLink = '';
        $sucesso = '';
        return view('home', compact('shortLink', 'sucesso'));
    }

    //Function to return view to create a short link
    public function viewLink(){
        return view('link');
    }

    //Function to verify if link exists in database, and create if not exists
    public function link(Request $request){
        $input = $request->all();
        $customize = $input['customize'];
        $validator = Validator::make($request->all(), [
            'link' => 'required',
            'customize' => 'required'
        ]);
        if ($validator->fails()){
            return redirect()->back()
                    ->withErrors($validator);
        } else {
            if(Links::where('customize', $input['customize'])->exists()){
                $validator = 'A palavra customizada inserida já está sendo utilizada, por favor, insira outra.';
                return redirect()->back()
                        ->withErrors($validator);
            } else {
                $input['short_link'] = 'http://localhost/encurtadorLinks/public/'.$customize;
                $shortLink = $input['short_link'];
                $link = Links::create($input);
                $sucesso = 'ok';
                $validator = 'Link criado com Sucesso';
                return redirect()->route('home', compact('sucesso', 'shortLink'))
                    ->withErrors($validator);
            }
        }
    }

    // Function to find the word customized by user in database, and redirect to url configured
    public function redirectLink($customize){
        if(Links::where('customize', $customize)->exists()){
            $link = Links::where('customize', $customize)->get();
            $url = $link[0]->link;
            return redirect($url);
        } else {
            $shortLink = '';
            $validator = 'Link inserido não encontrado em nossos servidores, por favor, insira outro ou preencha o formulário e crie um.';
            return redirect()->route('home')
                ->withErrors($validator);
        }
    }
}
