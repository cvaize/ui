@extends('layouts.app', ["bodyClass"=>"bg-light"])

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>
                    My personal wallet
                </h2>
                <p>
                    Wallet name
                </p>
            </div>
        </div>
    </div>
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-7">
                <div class="bg-white">
                    <div class="p-4 m-xl-2">
                        @include("forms._input", [
                            "type"=>"text",
                            "name"=>"address",
                            "value"=>"",
                            "label"=>'Wallet address: <i class="fas fa-info-circle ml-3" data-toggle="tooltip" data-tippy-placement="right" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt dolor dolores ipsam labore nam nisi nobis quo rerum sunt. A at, aut commodi consequuntur corporis deserunt facilis fuga illum iusto laudantium maiores nam nisi perferendis, qui ratione sapiente voluptates."></i>',
                            "placeholder"=>"Wallet address:"
                        ])
                        @include("forms._input", [
                            "type"=>"password",
                            "name"=>"password",
                            "value"=>"gsfuo7232370462462083hef723",
                            "label"=>'Private Key (unencrypted): <i class="fas fa-info-circle ml-3" data-toggle="tooltip" data-tippy-placement="right" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt dolor dolores ipsam labore nam nisi nobis quo rerum sunt. A at, aut commodi consequuntur corporis deserunt facilis fuga illum iusto laudantium maiores nam nisi perferendis, qui ratione sapiente voluptates."></i>',
                            "eye"=>true
                        ])
                        <button class="btn btn-outline-primary font-weight-bold btn-block">PRINT PAPER WALLET</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="bg-white">
                    <div class="py-4 my-2">
                        <h3 class="font-weight-light px-4 mx-xl-2">Balance</h3>
                        <p class="text-muted font-weight-light px-4 mx-xl-2">Here is displayed your balance and quantity in active wallets</p>
                        <hr>
                            <p class="text-center text-muted mb-1 font-weight-light px-4 mx-xl-2">On smart contract</p>
                            <p class="text-center h4 text-success mb-3 px-4 mx-xl-2"><b>3500 EOS</b> (16 645$)</p>
                        <hr>
                        <div class="px-4 mx-xl-2">
                            <table class="table mb-3 mt-4">
                                <tbody>
                                <tr>
                                    <td class="border-0 p-0">
                                        <p class="mb-3 lh--1_4">
                                            <i class="fas fa-wallet mr-2 text-warning"></i> Assets balance:
                                        </p>
                                    </td>
                                    <td class="border-0 p-0">
                                        <p class="h5 mb-3 lh--1_4">
                                            <span class="font-weight-light text-muted">USD</span>
                                            35 000
                                            <span class="font-weight-light text-muted">(~6 000 BTC)</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-0 p-0">
                                        <p class="mb-3 lh--1_4">
                                            <i class="fas fa-wallet mr-2 text-warning"></i> ET-Token balance:
                                        </p>
                                    </td>
                                    <td class="border-0 p-0">
                                        <p class="h5 mb-3 lh--1_4">
                                            <span class="font-weight-light text-muted">EET</span>
                                            250
                                            <span class="font-weight-light text-muted">(~6 000 $)</span>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-0 p-0" colspan="2">
                                        <p class="mb-3 lh--1_4">
                                            <i class="fas fa-wallet mr-2 text-warning"></i> Active purpose: <b>2</b>
                                        </p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="px-4 mx-xl-2">
                            <button class="btn btn-success mb-3 btn-block">DEPOSIT ON A TRANSFER FUND</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop