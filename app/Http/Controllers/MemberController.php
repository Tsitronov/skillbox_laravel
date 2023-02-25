<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index() {
        $name = ' ';
        $member = \App\Member::orderBy('id', 'asc')->get();
        return view('member.tutti', compact('name', 'member'));
    }
    public function varalo() {
        $member = \App\Member::where('reparto', 'varalo')->orderBy('id', 'asc')->get();
        return view('member.tutti', compact('member'));
    }
    public function mongrando() {
        $member = \App\Member::where('reparto', 'mongrando')->orderBy('id', 'asc')->get();
        return view('member.tutti', compact('member'));
    }

    public function show(\App\Member $member){
        //$member = \App\Member::get()->find($member);
        return view('member.index', compact('member'));
    }

    public function create(){
        return view('member.create');
    }

    public function store(){
        request()->validate([
            'nome'=>'required | max:300',
            'reparto'=>'required | max:3000',
            'panolini'=>'required | max:300',
            'dentiera'=>'required | max:300',
            'dieta'=>'required | max:3000',
            'cintura'=>'required | max:300',
            'malatia'=>'required | max:3000',
            'altro'=>'required | max:30000',
        ]);
        
        \App\Member::create(request()->all());
        return redirect('/member');
    }

    public function update(Request $request, $id)
    {
        \App\Member::where('id', $id)->update(['nome'=>request('nome'),'reparto'=>request('reparto'),'panolini'=>request('panolini'),'dentiera'=>request('dentiera'),'dieta'=>request('dieta'),'cintura'=>request('cintura'),'malatia'=>request('malatia'),'altro'=>request('altro')]);
            return redirect('/member');
    }

    public function destroy($id)
    {
        \App\Member::destroy($id);
        return redirect('/member');
    }
}
