<?php namespace App\Http\Controllers\ApiV2;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Product;
use App\Category;

class ProductController extends Controller
{
  public function index() {
    return 'products';
  }

  public function init() {
    $categories = [
      '燒味飯類'=>[
        ['發財三寶飯',90],
        ['金牌滷味飯',90],
        ['脆皮燒鴨飯',80],
        ['花雕油雞飯',80],
        ['化皮燒肉飯',80],
        ['蜜汁叉燒飯',80],
        ['叉燒拼鴨飯',85],
        ['叉燒拼雞飯',85],
        ['燒肉拼鴨飯',85],
        ['燒肉拼雞飯',85],
        ['油雞拼鴨飯',85],
        ['蜜汁雞腿飯',85],
        ['']
      ]
    ]
    return 'init';
  }
}