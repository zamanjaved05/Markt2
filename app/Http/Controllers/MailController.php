<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mailchimp;

class MailController extends Controller
{
    public function sendNewsletter(Request $request)
    {
        $listId = env('MAILCHIMP_LIST_ID');

        $mailchimp = new MailChimp(env('MAILCHIMP_APIKEY'));

        $list_id =env('MAILCHIMP_LIST_ID');
        $campaign = $mailchimp->campaigns->create('regular',[
            'list_id'=>$list_id,
            'subject'=>'Welcome Mail',
            'from_email'=>'noreply@devrohit.com',
            'from_name'=>'Devrohit',
            'to_name'=>'Devrohit Subscriber',
        ],[
            'html'=> $request->input('body'),
            'text'=>strip_tags($request->input('body'))
        ]);

        $mailchimp->campaigns->send($campaign['id']);

        dd('Campaign send successfully.');
    }
}
