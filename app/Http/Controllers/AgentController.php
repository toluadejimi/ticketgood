<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Hash;



class AgentController extends Controller
{
    public function agent_dashboard()
    {


        $data['events'] = Event::where('user_id', Auth::id())->count();
        $data['tickets'] = Ticket::where('user_id', Auth::id())->count();
        $data['activated_ticket'] = Ticket::where('user_id', Auth::id())->where('status', 2)->count();
        $data['wallet'] = User::where('id', Auth::id())->first()->wallet;
        $data['out'] = Transaction::where('user_id', Auth::id())->where('type', 2)->sum('amount');

        return view('agent.agent-dashboard', $data);
    }

    public function add_event()
    {

        $data['events'] = Event::where('user_id', Auth::id())->paginate(10);
        return view('agent.add-event', $data);
    }


    public function save_event(request $request)
    {


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/event'), $imageName); // Save the image to the "uploads" directory in the public folder
        }



        $ev = new Event();
        $ev->title = $request->title;
        $ev->image = $imageName;
        $ev->city = $request->city;
        $ev->description = $request->description;
        $ev->address = $request->address;
        $ev->state = $request->state;
        $ev->date_from = $request->date_from;
        $ev->date_to = $request->date_to;
        $ev->status = $request->status;
        $ev->user_id = Auth::id();
        $ev->save();


        return back()->with('message', 'Event has been Successfully Created');
    }



    public function add_ticket()
    {



        $ticket_content = date('his') . random_int(000000, 999999);
        $data['tickets'] = Ticket::where('user_id', Auth::id())->paginate(10);
        $data['events'] = Event::where('user_id', Auth::id())->get();
        $data['regular_amount'] = Ticket::where('user_id', Auth::id())->count();





        return view('ticket.add-ticket', $data);
    }


    public function save_ticket(request $request)
    {

        for ($i = 0; $i < 2; $i++) {
        }


        $url = url('') . "/verify-qr-code/$request->title" . random_int(00000, 99999) . date('his');

        $event_name = Event::where('id', $request->event_id)->first()->title ?? null;



            $r_qty = $request->input('r_qty');
            for ($i = 0; $i < $r_qty; $i++) {

                    Ticket::create([
                    'title' => $request->input('title'),
                    'qr_code' => $url,
                    'valid_date' => $request->input('date_to'),
                    'status' => $request->input('status'),
                    'event_id' => $request->input('event_id'),
                    'r_amount' => $request->input('r_amount'),
                    'event_name' => $event_name,
                    't_type' => $request->input('t_type'),
                    'user_id' => Auth::id(),
                    'email' => Auth::user()->email,



                ]);
            }





        return back()->with('message', 'Event has been Successfully Created');
    }


    public function view_ticket(request $request)
    {

        $ticket = Ticket::where('id', $request->id)->first();
        $image = Event::where('id', $ticket->event_id)->first()->image ?? null;
        $qr_code = Ticket::where('id', $request->id)->first()->qr_code ?? null;
        $image = Event::where('id', $ticket->event_id)->first()->image ?? null;
        $event_date = Event::where('id', $ticket->event_id)->first()->day_of_event ?? null;
        $event_title = Event::where('id', $ticket->event_id)->first()->title ?? null;
        $event_start = Event::where('id', $ticket->event_id)->first()->event_start_time ?? null;
        $event_stop = Event::where('id', $ticket->event_id)->first()->event_stop_time ?? null;
        $event_kickoff = Event::where('id', $ticket->event_id)->first()->event_kickoff ?? null;
        $address = Event::where('id', $ticket->event_id)->first()->address ?? null;
        $city = Event::where('id', $ticket->event_id)->first()->city ?? null;
        $state = Event::where('id', $ticket->event_id)->first()->state ?? null;
        $id = Ticket::where('id', $request->id)->first()->id ?? null;






        $code = url('')."/verify-qr-code?id=$request->id";

        return view('ticket.view-ticket', compact('id','ticket', 'address', 'city', 'state', 'event_kickoff','image', 'event_start','event_stop',  'code', 'event_date', 'event_title'));
    }



    public function verify_qr(request $request)
    {
        $ticket = Ticket::where('id', $request->id)->first();
        return view('ticket.verify', compact('ticket'));


    }


    public function check_in(request $request)
    {



        $agent_pin = User::where('email', $request->email)->first()->pin ?? null;
        $email = User::where('email', $request->email)->first()->email ?? null;

        $pin = $request->password;
        $ck = Hash::check($pin, $agent_pin);

        if($email != $request->email){
            return back()->with('error', 'Invalid Ticket Agent');
        }


        if($ck == false){
            return back()->with('error', 'Wrong Agent Pin');
        }

        if($ck == true){
            Ticket::where('id', $request->id)->update([
                'status' => 2
            ]);

            return back()->with('message', 'Checked-In successfully');
        }




    }



    public function check_out(request $request)
    {



        $agent_pin = User::where('email', $request->email)->first()->pin ?? null;
        $email = User::where('email', $request->email)->first()->email ?? null;

        $pin = $request->password;
        $ck = Hash::check($pin, $agent_pin);

        if($email != $request->email){
            return back()->with('error', 'Invalid Ticket Agent');
        }


        if($ck == false){
            return back()->with('error', 'Wrong Agent Pin');
        }

        if($ck == true){
            Ticket::where('id', $request->id)->update([
                'status' => 1
            ]);

            return back()->with('message', 'Checked-out successfully');
        }




    }





}
