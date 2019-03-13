<?php

namespace Modules\Enroll\Http\Controllers;

use Illuminate\Support\Facades\App;
use Modules\Enroll\Repositories\EnrollRepository;
use Modules\Core\Http\Controllers\BasePublicController;
use Illuminate\Http\Request;
use Modules\Enroll\Entities\Enroll;
use App\Jobs\SendEnrollJob;

class PublicController extends BasePublicController
{
    /**
     * @var EnrollRepository
     */
    private $enroll;

    public function __construct(EnrollRepository $enroll)
    {
        parent::__construct();
        $this->enroll = $enroll;

    }

    public function index(){

      \App::setLocale(\Request::get('locale'));
      $data = \Request::all();
      if(isset($data['familycontact'])) $data['familycontact'] = json_encode($data['familycontact']);
      if(isset($data['familystatus'])) $data['familystatus'] = json_encode($data['familystatus']);
      if(isset($data['source'])) $data['source'] = json_encode($data['source']);

      $result = $this->enroll->create($data);
      dispatch(new SendEnrollJob($result));

      return back()->with('message', trans('enroll::enrolls.messages.created'));

    }

    public function sendEmail(){

      $data = Enroll::orderBy('id', 'desc')->first();
      dispatch(new SendEnrollJob($data));
      echo "email sent";
    }

}
