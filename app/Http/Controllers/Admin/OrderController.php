<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class OrderController extends Controller
{
    public function index() {
        return 'orders';
    }
}