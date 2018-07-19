<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    $this->load->model('Login');
    $this->load->model('Slidebar');
    $this->load->model('Singup');
    $this->load->model('User');
    $this->load->model('News');
  }

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   * 		http://example.com/index.php/welcome
   * 	- or -
   * 		http://example.com/index.php/welcome/index
   * 	- or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */
  public function index()
  {
    $dataslidebar = $this->Slidebar->slidebar_data();

    $data = array('data_bar' => $dataslidebar);
      $this->load->view('index', $data);
  }

  public function team()
  {
    $this->load->view('index');
  }

  public function Financial()
  {
    $this->load->view('index');
  }

  public function Stock()
  {
    $this->load->view('index');
  }

  public function message()
  {
    $this->load->view('index');
  }

  public function about2()
  {
    $this->load->view('index');
  }

  public function Profile()
  {
    $this->load->view('index');
  }
  public function Vision()
  {
    $this->load->view('index');
  }
  public function Organization()
  {
    $this->load->view('index');
  }
  public function Committee()
  {
    $this->load->view('index');
  }
  public function Management()
  {
    $this->load->view('index');
  }
  public function Subsidiaries()
  {
    $this->load->view('index');
  }
  public function Ethice()
  {
    $this->load->view('index');
  }
  public function Whistle()
  {
    $this->load->view('index');
  }
  public function Stock_Ex()
  {
    $this->load->view('index');
  }
  public function Newsroom()
  {
    $this->load->view('index');
  }
  public function Publications()
  {
    $this->load->view('index');
  }
  public function Event_Pre()
  {
    $this->load->view('index');
  }
  public function Information()
  {
    $this->load->view('index');
  }
  public function Activities()
  {
    $this->load->view('index');
  }

  public function The_news_deatail()
  {
    $id = $this->input->get('id');
    $data = $this->News->news_show_detail($id);
    $data_news = array('data_news' => $data);

    $this->load->view('index', $data_news);
  }

  public function The_news()
  {
    $dataslidebar = $this->Slidebar->slidebar_data();
    $user = $this->User->user_data();
    $news = $this->News->news_data();
    $dataUser = array(
      'data_user' => $user,
      'data_bar' => $dataslidebar,
      'data_news' => $news
    );
    $this->load->view('index', $dataUser);
  }
  public function Gallery()
  {
    $this->load->view('index');
  }
  public function Important()
  {
    $this->load->view('index');
  }
  public function Press_Releases()
  {
    $Press = $this->News->Press_data();
    $dataUser = array('data_Press' => $Press);

    $this->load->view('index', $dataUser);
  }

  function Login()
  {
    $dataslidebar = $this->Slidebar->slidebar_data();
    $user = "";
    $dataUser = array(
      'data_user' => $user,
      'data_bar' => $dataslidebar
    );
    if ($this->session->userdata('weblogin')) {
      $datases = $this->session->userdata('weblogin');
      $user = $this->User->user_data();
      $dataUser = array(
        'data_user' => $user,
        'data_bar' => $dataslidebar
      );
      if ($datases['login_permit'] == '3') {
        header("Location:" . base_url("controller/"));
      } else {
        $this->load->view('index', $dataUser);
      }
    } else {
      $id = $this->input->post('signin-email');
      $password = $this->input->post('signin-password');
      $check_login = $this->Login->Loginweb($id, $password);

      if ($check_login) {
        foreach ($check_login as $datases) {
          $this->session->set_userdata('weblogin', $data);
          $datases1 = $this->session->userdata('weblogin');
          $user = $this->User->user_data();
          $dataUser = array(
            'data_user' => $user,
            'data_bar' => $dataslidebar
          );
          if ($datases1['login_permit'] == 3) {
            header("Location:" . base_url("controller/"));
          } else {
            $this->load->view('index', $dataUser);
          }
        }
      } else {
        $dataUser = array(
          'massege' => 'fail',
          'data_bar' => $dataslidebar
        );
        $this->load->view('index', $dataUser);
        header("Location:" . base_url("test/"));
      }
    }
  }

  function signup()
  {
    //$agree= $this->input->post('agree');
    //$username=  $this->input->post('signup-email');
    //$password=  $this->input->post('signup-password'); 
    //$pass=  md5($password);
    //echo $agree." ".$username." ".$pass;
    $name = $this->input->post('singup-username');
    $email = $this->input->post('signup-email');
    $password = $this->input->post('signup-password');
    $agree = $this->input->post('agree');

    if ($agree == "") {
    } else {
      $check_singup = $this->Singup->Singupweb($name, $email, $password);

      if ($check_singup == 1) {
        echo 'ล้มเหลว มีผู้ใช้ Email นี้แล้ว';
      } else {
        echo 'บันทึกข้อมูลสำเร็จ';
      }
    }
  }

  function get_edit_slidebar()
  {
    $this->load->view('Edit_slide');
  }

  function get_edit_userlogin()
  {
    $this->load->view('user_edit');
  }

  function slide_save()
  {
    $Save = $this->Slidebar->slidebar_save();

    header("Location:" . base_url("Welcome/login?menu=1"));
    exit(0);
  }

  function user_save()
  {
    $Save = $this->User->user_save();

    header("Location:" . base_url("Welcome/login?menu=2"));
    exit(0);
  }

  function logout()
  {
    $this->session->unset_userdata('weblogin');
    $dataslidebar = $this->Slidebar->slidebar_data();
    $dataUser = array('data_bar' => $dataslidebar);
    $this->load->view('index', $dataUser);
  }

  function delete_data_user()
  {
    $user = $this->User->user_delete();
    $dataUser = array('data_user' => $user, );
    $this->load->view('Controllers_page', $dataUser);
  }
}
