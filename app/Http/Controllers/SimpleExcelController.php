<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

//use Spatie\SimpleExcel\SimpleExcelWriter;
use Spatie\SimpleExcel\SimpleExcelReader;

class SimpleExcelController extends Controller
{
    public function index()
    {
        return view('back.importcsv');
    }

     // Importer les données

    public function import(Request $request)
    {
       	$file = $request->fichier->move(public_path());
           //dd($fichier);
        fopen($file, 'r');
        while (($line = fgetcsv($file,0,';')) !== FALSE) {
            dump($line);
            list($prenom, $nom) = explode(" ", $line[0]);
            DB::table('users')->insert([

                
                
                'name'          => $nom, 
                'firstname'     => $prenom,
                'email'         => $line[1],
                'company'       => $line[4],
                'title'         => $line[2],
                'password'      => bcrypt($line[5]),
                'is_admin'      => FALSE,
                'created_at'    => Carbon::now()->toDateTimeString(),
                'updated_at'    => Carbon::now()->toDateTimeString()
            ]);
        }
        fclose($file);
    }















    /*
        public function import (Request $request) {

            // 1. Validation du fichier uploadé. Extension ".csv" autorisée
    	$this->validate($request, [
    		'fichier' => 'bail|required|file|mimes:csv'
    	]);

    	// 2. On déplace le fichier uploadé vers le dossier "public" pour le lire
    	$fichier = $request->fichier->move(public_path(), $request->fichier->hashName());

        // 3. $reader : L'instance Spatie\SimpleExcel\SimpleExcelReader
    	$reader = SimpleExcelReader::create($fichier);

        // On récupère le contenu (les lignes) du fichier
        $rows = $reader->getRows();

        // $rows est une Illuminate\Support\LazyCollection

        // 4. On insère toutes les lignes dans la base de données
        $status = User::insert($rows->toArray());

        // Si toutes les lignes sont insérées
    	if ($status) {

            // 5. On supprime le fichier uploadé
            $reader->close(); // On ferme le $reader
            unlink($fichier);

            // 6. Retour vers le formulaire avec un message $msg
            return back()->withMsg("Importation réussie !");

        } else { abort(500); }
    }*/
}

