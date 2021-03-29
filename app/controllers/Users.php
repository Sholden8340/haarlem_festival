<?php


class Users extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function login()
    {
        $data = [
            'title'=> 'Login Page',
            'email'=> '',
            'password' => '',
            'emailError' => '',
            'passwordError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email'=> trim($_POST['email']),
                'password' => trim($_POST['password']),
                'emailError' => '',
                'passwordError' => ''
            ];

            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter Email';
            }
            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter your password';
            }


            if (empty($data['emailError'])  && empty($data['passwordError'])) {
                $LogInUserCheck = $this->userModel->loginCheck($data['email'],$data['password']);

                if($LogInUserCheck){
                    $this->createUserSession($LogInUserCheck);
                } else {
                    $data['passwordError'] = 'Password or email is incorrect. PLease try again';
                    $this->view('users/login', $data);
                }
            }
        }
        $this->view('users/login', $data);
    }


    public function createUserSession($user){
        $_SESSION['userID'] = $user->id;
        $_SESSION['firstname'] = $user->firstname;
        $_SESSION['email'] = $user->email;
        header('location:' . URLROOT . '/pages/index');
    }

    public function logout(){
        unset($_SESSION['userID']);
        unset($_SESSION['firstname']);
        unset($_SESSION['email']);
        header('location:' . URLROOT . '/users/login');
    }

    public function register()
    {
        $data = [
            'firstname' => '',
            'lastname' => '',
            'email' => '',
            'password' => '',
            'confirmPassword' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'firstname' => trim($_POST['firstname']),
                'lastname' => trim($_POST['lastname']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => ''
            ];


            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";



            //Check if a username is valid or empty
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter a email address';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter a valid email';
            } else {
                //Check if the email exists in the database
                if ($this->userModel->finduserByEmail($data['email'])) {
                    $data['emailError'] = 'Email is already taken';
                }


                //Validate the length of the password and also if it is empty
                if (empty($data['password'])) {
                    $data['passwordError'] = 'Please enter your password';
                } elseif (strlen($data['password']) < 6) {
                    $data['passwordError'] = 'Password must be at least 6 characters.';
                } elseif (!preg_match($passwordValidation, $data['password'])) {
                    $data['passwordError'] = 'Password must have at lest 1 numerical value';
                }

                //Confirm password
                if (empty($data['confirmPassword'])){
                    $data['confirmPasswordError'] = 'Please enter your password ';
                } else {
                    if($data['password'] != $data['confirmPassword']){
                        $data['confirmPasswordError'] = 'Passwords do not match. Please try again';
                    }
                }

                if (empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

                    $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);

                    if ($this->userModel->newCustomer($data)){
                        header('location: ' . URLROOT . '/users/login');
                    } else {
                        die('Something went wrong please try again later');
                    }
                }
            }
        }
        $this->view('users/register', $data);
    }
}