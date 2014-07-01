<?php

class UserController extends BaseController
{
    public function loginAction()
    {
    /*
        $data = array();

        if ( Input::server("REQUEST_METHOD") == "POST")
        {
            $validator =  Validator::make( Input::all(), ( array(
                            "username" => "required",
                            "password" => "required"
            ) ));
        }

        if ($validator->passes() )
        {

        }
        else
        {
            $data["errors"] = new MessageBag(
                array("password" => "username and/or password invalid")
            );
        }
        //blah blah blah, make sure you delete
    */
        return View::make("user/login");
    }
}