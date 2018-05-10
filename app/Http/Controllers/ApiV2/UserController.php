<?php namespace App\Http\Controllers\ApiV2;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\User;

class UserController extends Controller
{
  public function init() {
    $users = [
      ['name'=>'yoovtest1', 'email'=>'yoovtest1@gmail.com', 'password'=>bcrypt('yoovyoov')],
      ['name'=>'yoovtest2', 'email'=>'yoovtest2@gmail.com', 'password'=>bcrypt('yoovyoov')],
      ['name'=>'yoovtest3', 'email'=>'yoovtest3@gmail.com', 'password'=>bcrypt('yoovyoov')],
      ['name'=>'yoovtest4', 'email'=>'yoovtest4@gmail.com', 'password'=>bcrypt('yoovyoov')],
      ['name'=>'yoovtest5', 'email'=>'yoovtest5@gmail.com', 'password'=>bcrypt('yoovyoov')],
      ['name'=>'yoovtest6', 'email'=>'yoovtest6@gmail.com', 'password'=>bcrypt('yoovyoov')],
      ['name'=>'yoovtest7', 'email'=>'yoovtest7@gmail.com', 'password'=>bcrypt('yoovyoov')],
    ];

    foreach( $users as $user ) {
      $dbUser = User::whereName( $user['name'] )->first();
      if(is_null($dbUser)) {
        User::create($user);
      }
    }
    return 'finished';
  }
}
