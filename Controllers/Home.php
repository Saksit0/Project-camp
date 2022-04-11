<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function v_Project_List()
    {
        $this->output("v_Project_List");
    }
    public function v_Add_Project()
    {
        $this->output("v_Add_Project");
    }
    public function v_attachment()
    {
        $this->output("v_attachment");
    }
    public function v_Project_info()
    {
        $this->output("v_Project_info");
    }
    public function v_Edit_Project()
    {
        $this->output("v_Edit_Project");
    }
    public function v_Attachment_Project()
    {
        $this->output("v_Attachment_Project");
       
    }
}
