<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index');
    }
    public function index2()
    {
        return view('admin.index2');
    }
    public function index3()
    {
        return view('admin.index3');
    }
    public function form()
    {
        return view('admin.form');
    }
    public function advance()
    {
        return view('admin.form_advanced');
    }
    public function upload()
    {
        return view('admin.form_upload');
    }
    public function buttons()
    {
        return view('admin.form_buttons');
    }
    public function validation()
    {
        return view('admin.form_validation');
    }
    public function wizards()
    {
        return view('admin.form_wizards');
    }
    public function tables()
    {
        $data = Student::all();
        return view('admin.tables', compact('data'));
    }
    public function dynamic()
    {
        return view('admin.tables_dynamic');
    }
    public function fixed_sidebar()
    {
        return view('admin.fixed_sidebar');
    }
    public function fixed_footer()
    {
        return view('admin.fixed_footer');
    }
    public function general_elements()
    {
        return view('admin.general_elements');
    }  public function media_gallary()
    {
        return view('admin.media_gallery');
    }  public function typography()
    {
        return view('admin.typography');
    }  public function icons()
    {
        return view('admin.icons');
    }  public function glyphicons()
    {
        return view('admin.glyphicons');
    }  public function widgets()
    {
        return view('admin.widgets');
    }  public function invoice()
    {
        return view('admin.invoice');
    }  public function inbox()
    {
        return view('admin.inbox');
    }  public function calendar()
    {
        return view('admin.calendar');
    }  public function chartjs()
    {
        return view('admin.chartjs');
    }  public function chartjs2()
    {
        return view('admin.chartjs2');
    }  public function morisjs()
    {
        return view('admin.morisjs');
    }  public function echarts()
    {
        return view('admin.echarts');
    }  public function other_charts()
    {
        return view('admin.other_charts');
    }  public function e_commerce()
    {
        return view('admin.e_commerce');
    }  public function projects()
    {
        return view('admin.projects');
    }  public function project_detail()
    {
        return view('admin.project_detail');
    }  public function contacts()
    {
        return view('admin.contacts');
    }  public function profile()
    {
        return view('admin.profile');
    }  public function page_403()
    {
        return view('admin.page_403');
    }  public function page_404()
    {
        return view('admin.page_404');
    }  public function page_500()
    {
        return view('admin.page_500');
    }  public function plain_page()
    {
        return view('admin.plain_page');
    }  public function login_page()
    {
        return view('admin.login_page');
    }  public function pricing_tables()
    {

        return view('admin.pricing_tables');
    }  public function level2()
    {
        return view('admin.level2');
    } 
}
