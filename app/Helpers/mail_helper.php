<?php
helper('mail');
if (!function_exists('sendEmails')) {
    function sendEmails(string $to, string $template, array $data, string $view = '')
    {
        if (empty($view)) {
            $view = '_default';
        }
        $email = \Config\Services::email();
        // $content = mailTemplate($template, $table, $where);

        $content = 'Your OTP for account verification is {OTP}';

        // $htmlMessage = view('backend/mail-template/'.$view, ['body' => lang($content, $data)]);
        $htmlMessage = lang($content, $data);
        // print_r($htmlMessage);die;
        $email->initialize([
            'mailType' => 'html'
        ]);

        $email->setTo($to);
        $email->setSubject($data['subject']);
        $email->setMessage($htmlMessage);
        if ($email->send()) {
            return [
                'success'   => 1,
                'htmlBody'   => $htmlMessage,
                'to'        => $to,
                'subject'   => $data['subject']
            ];
        } else {
            print_r($email->printDebugger(['headers']));
            die;
        }
    }
}
