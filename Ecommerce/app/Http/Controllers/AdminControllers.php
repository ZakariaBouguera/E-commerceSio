<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControllers extends Controller{
    public function connexion(){
        return 'connexion';
    }

    public function connecter(){
        return 'connecter';
    }

    public function ModificationPrix(){
        return 'Vous pouvez modifier le prix';
    }

    public function PromotionPrix(){
        return 'Vous pouvez appliquer une promotion';
    }

    public function Stock(){
        return 'Vous pouvez gerer les stock';
    }

    public function SeDeconnetcer(){
        return 'Vous pouvez vous deconnecter ';
    }

    
}
