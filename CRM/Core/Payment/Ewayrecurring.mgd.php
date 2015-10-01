<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array(
  0 => array(
    'name' => 'ewayrecurring',
    'entity' => 'PaymentProcessorType',
    'params' => array(
      'version' => 3,
      'name' => 'ewayrecurring',
      'title' => 'Eway (Recurring)',
      'description' => 'Recurring payments payment processor for eWAY',
      'user_name_label' => 'Username',
      'password_label' => 'Password',
      'subject_label' => 'Customer Id',
      'signature_label' => 'Public Key (if wishing to use Client Encryption - recommended)',
      'class_name' => 'Payment_Ewayrecurring',
      'billing_mode' => 1,
      'url_site_default' => 'https://api.ewaypayments.com/DirectPayment.json',
      'payment_type' => 1,
      'is_recur' => 0,
      'url_recur_default' => 'https://www.eway.com.au/gateway/ManagedPaymentService/managedCreditCardPayment.asmx?WSDL',
      'url_site_test_default' => 'https://api.sandbox.ewaypayments.com/DirectPayment.json',
      'url_recur_test_default' => 'https://www.eway.com.au/gateway/ManagedPaymentService/test/managedcreditcardpayment.asmx?WSDL',
    ),
  ),
);
