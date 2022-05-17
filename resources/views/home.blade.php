@extends('layouts.app')
@can('isAdmin')
<div class="container">
    <div class="d-flex justify-content-center align-items-center" style="margin-top:18%;">
        <div class="col-lg-2 mb-4">
            <div class="card border-0">
                <img class="card-img-top" src="{{ url('add_home_icon.png') }}" alt="add home">

                <div class="card-body">
                    <a href="http://127.0.0.1:8000/homie" class="btn btn-light btn-md">
                        Add Home
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-2 mb-4">
            <div class="card border-0">
                <img class="card-img-top" src="{{ url('show_inquiry_icon.png') }}" alt="show inquiry">

                <div class="card-body">
                    <a href="#" class="btn btn-light btn-md">
                        Show Inquiries
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@iscan('isUser')

@endcan

