<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $request)
    {
        $p1 = new Product();
        $p1->price = "100,000€";
        $p1->title = "Nissan GTR";
        $p1->description = "The best car in the world";
        $p1->image = "https://i.kinja-img.com/gawker-media/image/upload/s--GgpOUVnh--/c_scale,f_auto,fl_progressive,q_80,w_800/riufs7rtpk6okzrqiqmy.jpg";

        $p2 = new Product();
        $p2->price = "29,000€";
        $p2->title = "Chevrolet Camaro";
        $p2->description = "The fastest car ine the world";
        $p2->image = "https://st.motortrend.com/uploads/sites/10/2016/10/2016-chevrolet-camaro-2ss-coupe-angular-front.png?interpolation=lanczos-none&fit=around|660:439";

        $p3 = new Product();
        $p3->price = "38,600€";
        $p3->title = "JEEP Wrangler";
        $p3->description = "Big Car for your small penis";
        $p3->image = "https://c4d709dd302a2586107d-f8305d22c3db1fdd6f8607b49e47a10c.ssl.cf1.rackcdn.com/thumbnails/stock-images/b98986dbd0b43c7bb586c0d09fb48d41.png";

        $p4 = new Product();
        $p4->price = "33,979€";
        $p4->title = "Mercedes Benz E 350";
        $p4->description = "Heated Front Seats(Incl.in P01 pkg),harman/kardon® Logic 7® Surround Sound System,Black Ash Wood Trim,Black Roof Liner,Rearview Camera,
                                  Comfort Box,Rear Deck Spoiler,Wheel Locking Bolts,18-Inch 5-Double Spoke Wheels";
        $p4->image = "https://935408b1a668ad3a5346-fdac75a8a0484ce714879a3353528f9d.ssl.cf1.rackcdn.com/WDDHF5KB6GB272862/ffce56c5719a85e43e067600348239ca.jpg";

        $login = $request->session()->has(["user"]);
        $name = $request->session()->get("user", "Denis");
        return view("index", ["logged_in" => $login, "name" => $name,"Products" => [$p1, $p2, $p3, $p4]]);
    }

    public function login(Request $request)
    {
        $request->session()->put("user", "Denis");
        return redirect("/");
    }

    public function logout(Request $request)
    {
        $request->session()->forget(["user"]);
        return redirect("/");
    }
}

class Product
{
    var $price;
    var $title;
    var $description;
    var $image;

}
