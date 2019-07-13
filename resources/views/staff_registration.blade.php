<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <title>KOMPEK FEB UI 2019</title>
</head>
<body>
    <header class="txt-middle txt-center fs-18" style="
          position: fixed;
          top: 0;
          width: 100%;
          height: 100px;
          background: #800;
          display: flex;
          line-height: 100px;
          font-weight: bold;">

        <div style="width: 6%">
            <img src="{{asset('images/logo_white_small.png')}}" style="width: 80px; height: 80px">
        </div>
        <div style="width: 10%;">
            <a class="color-white hov-cl0" href="http://127.0.0.1:8000/registration#"> HOMEPAGE </a>
        </div>
        <div style="width: 10%; ">
            <a class="color-white hov-cl0" href="http://127.0.0.1:8000/registration"> REGISTRATION </a>
        </div>
        <div style="width: 10%">
            <a class="color-white hov-cl0" href="http://127.0.0.1:8000/registration"> FAQ </a>
        </div>

    </header>

    <div style="margin: 120px 0 10px 80px; border-left: 6px solid #b60000; ">
        <span class="fs-30 color-black"> &nbsp; Staff Recruitment </span>
    </div>

    <div style="display: flex">
        <div style="width: 50%">
            <table class="" style="margin: 10px 0 10px 80px;; border-spacing: 0 15px; border-collapse: separate">
                <tbody><tr>
                    <td class="color-black fs-20"> Name </td>
                    <td> <input type="text" name="" id="name_txt" style="width: 300px"> </td>
                </tr>
                <tr>
                    <td class="color-black fs-20"> Student ID </td>
                    <td> <input type="text" name="" id="id_txt" style="width: 300px"> </td>
                </tr>
                <tr>
                    <td class="color-black fs-20"> Program </td>
                    <td>
                        <select id="program_option" style="outline: none; width: 300px; height: 26px">
                            <option value="acc"> Accounting </option>
                            <option value="eco"> Economics </option>
                            <option value="man"> Management </option>
                            <option value="isEco"> Islamic Economics </option>
                            <option value="isBus"> Islamic Business </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="color-black fs-20 " style="padding-right: 20px"> LINE / Phone </td>
                    <td> <input type="text" name="" id="contact_txt" style="width: 300px"> </td>
                </tr>
                <tr>
                    <td class="color-black fs-20 " style="padding-right: 20px"> 1st Choice </td>
                    <td>
                        <select id="1_choice_option" style="outline: none; width: 300px; height: 26px">
                            <option value="event"> Event </option>
                            <option value="officer"> Liaison Officer </option>
                            <option value="eco_research"> Economic Research Paper </option>
                            <option value="business"> Business Case </option>
                            <option value="eco_quiz"> Economic Quiz </option>
                            <option value="eco_debate"> Economic Debate Competition </option>
                            <option value="log"> Logistics </option>
                            <option value="transport"> Transportation and Acommodation </option>
                            <option value="sponsor"> Sponsorship </option>
                            <option value="food"> Food, Beverage, and Bazaar </option>
                            <option value="creative"> Creative Design and Marketing </option>
                            <option value="communication"> Communication and General Affairs </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="color-black fs-20 " style="padding-right: 20px"> 2nd Choice </td>
                    <td>
                        <select id="2_choice_option" style="outline: none; width: 300px; height: 26px">
                            <option value="event"> Event </option>
                            <option value="officer"> Liaison Officer </option>
                            <option value="eco_research"> Economic Research Paper </option>
                            <option value="business"> Business Case </option>
                            <option value="eco_quiz"> Economic Quiz </option>
                            <option value="eco_debate"> Economic Debate Competition </option>
                            <option value="log"> Logistics </option>
                            <option value="transport"> Transportation and Acommodation </option>
                            <option value="sponsor"> Sponsorship </option>
                            <option value="food"> Food, Beverage, and Bazaar </option>
                            <option value="creative"> Creative Design and Marketing </option>
                            <option value="communication"> Communication and General Affairs </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="color-black fs-20 " style="padding-right: 20px"> 3rd Choice </td>
                    <td>
                        <select id="3_choice_option" style="outline: none; width: 300px; height: 26px">
                            <option value="event"> Event </option>
                            <option value="officer"> Liaison Officer </option>
                            <option value="eco_research"> Economic Research Paper </option>
                            <option value="business"> Business Case </option>
                            <option value="eco_quiz"> Economic Quiz </option>
                            <option value="eco_debate"> Economic Debate Competition </option>
                            <option value="log"> Logistics </option>
                            <option value="transport"> Transportation and Acommodation </option>
                            <option value="sponsor"> Sponsorship </option>
                            <option value="food"> Food, Beverage, and Bazaar </option>
                            <option value="creative"> Creative Design and Marketing </option>
                            <option value="communication"> Communication and General Affairs </option>
                        </select>
                    </td>
                </tr>
                </tbody></table>
        </div>
        <div style="width: 50%">

            Nanti disini checkbox
        </div>
    </div>
    <div class="dis-flex flex-c flex-m">
        <button id="register_staff_btn" class=""> Register </button>
    </div>
</body>
</html>