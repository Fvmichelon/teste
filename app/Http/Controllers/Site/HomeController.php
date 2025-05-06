<?php

namespace App\Http\Controllers\Site;

use App\Models\HomePageModel;
use App\Models\TranslateModel;

use App\Models\MamaHowModel;
use App\Models\MamaHowBulletsModel;

use App\Models\MamaWhyModel;
use App\Models\MamaWhyBulletsModel;


use App\Models\AboutModel;

use App\Models\AboutItemsModel;
use App\Models\ServicesModel;
use App\Models\WhyModel;
use App\Models\WhyItemsModel;
use App\Models\GeneralModel;
use App\Models\PartnersModel;
use App\Models\ComplianceModel;



class HomeController extends Controller
{

    public function index()
    {

        $this->vm['homepage'] = HomePageModel::orderBy('position')->get()->toArray();
        $this->vm['mamahow'] = MamaHowModel::first()->toArray();
        $this->vm['mamahow_items'] = MamaHowBulletsModel::orderBy('position')->get()->toArray();
        $this->vm['services'] = ServicesModel::orderBy('position')->get()->toArray();
        $this->vm['mamawhy'] = MamaWhyModel::first()->toArray();
        $this->vm['mamawhy_items'] = MamaWhyBulletsModel::orderBy('position')->get()->toArray();

        $this->vm['about'] = AboutModel::orderBy('position')->get()->toArray();
        $this->vm['about_items'] = AboutItemsModel::orderBy('position')->get()->toArray();

        $this->vm['why_us'] = WhyModel::orderBy('position')->first()->toArray();
        $this->vm['why_us_items'] = WhyItemsModel::orderBy('position')->with('aboutCardBp')->get()->toArray();

        $this->vm['contact'] = GeneralModel::first()->toArray();
        $this->vm['partners'] = PartnersModel::orderBy('position')->get()->toArray();
        $this->vm['compliance'] = ComplianceModel::first()->toArray();
        return view("site.home", $this->vm);

    }
}
