<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Admin extends Controller {
    public function __construct() {
        parent::__construct();
        $this->call->model('admin_model');
    }

    private function render($view, $data = []) {
        $this->call->view('admin/templates/header', $data);
        $this->call->view('admin/' . $view, $data);
        $this->call->view('admin/templates/footer', $data);
    }

    public function index() {
        $data = [
            'site_name' => 'Budget Tracker Admin',
            'current_year' => date('Y'),
            'user_count' => $this->admin_model->get_user_count(),
            'category_count' => $this->admin_model->get_category_count(),
            'transaction_count' => $this->admin_model->get_transaction_count(),
            'total_budget' => $this->admin_model->get_total_budget(),
            'recent_transactions' => $this->admin_model->get_recent_transactions(),
            'category_totals' => $this->admin_model->get_category_totals()
        ];
        $this->render('dashboard', $data);
    }

    public function users() {
        $data = [
            'site_name' => 'Budget Tracker Admin',
            'current_year' => date('Y'),
            'users' => $this->admin_model->get_users()
        ];
        $this->render('users', $data);
    }

    public function user_feedback() {
        $data = [
            'site_name' => 'Budget Tracker Admin',
            'current_year' => date('Y'),
            'feedback' => $this->admin_model->get_user_feedback()
        ];
        $this->render('user_feedback', $data);
    }

    public function categories() {
        $data = [
            'site_name' => 'Budget Tracker Admin',
            'current_year' => date('Y'),
            'categories' => $this->admin_model->get_categories()
        ];
        $this->render('categories', $data);
    }

    public function transactions() {
        $data = [
            'site_name' => 'Budget Tracker Admin',
            'current_year' => date('Y'),
            'transactions' => $this->admin_model->get_transactions()
        ];
        $this->render('transactions', $data);
    }

    public function notifications() {
        $data = [
            'site_name' => 'Budget Tracker Admin',
            'current_year' => date('Y'),
            'notifications' => $this->admin_model->get_notifications()
        ];
        $this->render('notifications', $data);
    }

    public function log_history() {
        $data = [
            'site_name' => 'Budget Tracker Admin',
            'current_year' => date('Y'),
            'log_history' => $this->admin_model->get_log_history()
        ];
        $this->render('log_history', $data);
    }
}

