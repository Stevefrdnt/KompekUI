@extends('layouts.master')

@section('title', 'Registration')

@section('more_link')
    <link rel="stylesheet" type="text/css" href="{{asset('css/competition_registration.css')}}">
@stop

@section('content')
    <div id="content" class="pt-5 pb-5 pl-5">
            <div id="identifier" class="heading">
                <span class="color-black fw-bold"> &nbsp Competition Registration </span>
            </div>

        <form action="/Participant" method="post" enctype="multipart/form-data">
            @csrf
            <div id="mid-content" class="dis-flex">
                <div class="w-50">
                    <table style="margin: 10px 0 10px 20px; border-spacing: 0 15px; border-collapse: separate;;">
                        <tbody>
                        <tr>
                            <td class="color-black lbl td-w-250"> School</td>
                            <td><input type="text" name="school" id="school_txt" class="input-field" required></td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="color-black lbl"> Accompanying <br> Teacher</td>
                            <td rowspan="2"><input type="text" name="teacher" id="teacher_txt" class="input-field" required></td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td colspan="2" class="heading"><span class="color-black"> &nbsp Head of Delegation </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="color-black lbl "> Name</td>
                            <td><input type="text" name="head" id="name_txt" class="input-field" required></td>
                        </tr>
                        <tr>
                            <td class="color-black lbl "> Email</td>
                            <td><input type="email" name="email" id="email_txt" class="input-field" required></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="heading"><span class="color-black"> &nbsp Delegations </span></td>
                        </tr>
                        <tr>
                            <td class="color-black lbl "> Delegate 2</td>
                            <td><input type="text" name="participant_2" id="delegate2_txt" class="input-field" required></td>
                        </tr>
                        <tr>
                            <td class="color-black lbl "> Delegate 3</td>
                            <td><input type="text" name="participant_3" id="delegate3_txt" class="input-field" required></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="w-50">
                    <table style="margin: 10px 0 10px 20px; border-spacing: 0 15px; border-collapse: separate">
                        <tbody>
                        <tr>
                            <td class="color-black lbl td-w-250 pad"> Competition </td>
                            <td>
                                <select id="competition_option" class="option-field" name="competition"
                                    style="">
                                    <option value = "1"> EQ </option>
                                    <option value = "2"> EDC </option>
                                    <option value = "3"> BC </option>
                                    <option value = "4"> ERP </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                        <span class="color-light-red"> Choose your competition. Please download the following
                            <a class="color-light-red fw-bold decor-u" href="/Form/Download"> Registration Form </a>
                        </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="color-black lbl pad"> Telephone</td>
                            <td><input type="text" name="phone" id="telephone_txt" class="input-field" required></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="heading"><span class="color-black"> &nbsp Administration </span></td>
                        </tr>
                        <tr>
                            <td class="color-black lbl pad"> Proof of Payment</td>
                            <td>
                                <input class="upload-btn" type="file" name="payment_file" id="upload_payment_btn">
                                <small>File must be .pdf format and less then 200MB</small>
                            </td>
                        </tr>
                        <tr>
                            <td class="color-black lbl pad"> Registration Form</td>
                            <td>
                                <input class=" upload-btn" type="file" name="regis_file" id="upload_form_btn">
                                <small>File must be .pdf format and less then 200MB</small>
                            </td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="dis-flex flex-c flex-m">
                <button type="submit" id="register_btn" class=""> Submit</button>
            </div>
        </form>

    </div>
@stop