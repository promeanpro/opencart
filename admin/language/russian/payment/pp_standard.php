<?php
$_ = array_merge(
  (isset($_)?$_:array()),
  array (
  'heading_title' => 'PayPal Payments Standard',
  'text_payment' => 'Оплата',
  'text_success' => 'Настройки успешно изменены!',
  'text_edit' => 'Редактирование',
  'text_pp_standard' => '<a target="_BLANK" href="https://www.paypal.com/uk/mrb/pal=V4T754QB63XXL"><img src="view/image/payment/paypal.png" alt="PayPal Website Payment Pro" title="PayPal Website Payment Pro iFrame" style="border: 1px solid #EEEEEE;" /></a>',
  'text_authorization' => 'Авторизация',
  'text_sale' => 'Продажа',
  'entry_email' => 'E-Mail',
  'entry_test' => 'Режим отладки',
  'entry_transaction' => 'Метод транзакции',
  'entry_debug' => 'Запись ошибок',
  'entry_total' => 'Минимальная сумма заказа',
  'entry_canceled_reversal_status' => 'Статус заказа, если платеж отменен',
  'entry_completed_status' => 'Статус заказа после оплаты',
  'entry_denied_status' => 'Статус заказа при отказе платежа',
  'entry_expired_status' => 'Статус заказа при просрочки платежа',
  'entry_failed_status' => 'Статус ошибки при платеже',
  'entry_pending_status' => 'Статус заказа в ожидании платежа',
  'entry_processed_status' => 'Статус заказа в процессе платежа',
  'entry_refunded_status' => 'Статус заказа при возврате платежа',
  'entry_reversed_status' => 'Статус заказа при сторнировании средств',
  'entry_voided_status' => 'Статус заказа при аннулировании платежа',
  'entry_geo_zone' => 'Географическая зона',
  'entry_status' => 'Статус',
  'entry_sort_order' => 'Порядок сортировки',
  'tab_general' => 'Основное',
  'tab_order_status' => 'Order Status',
  'help_test' => 'Use the live or testing (sandbox) gateway server to process transactions?',
  'help_debug' => 'Logs additional information to the system log',
  'help_total' => 'The checkout total the order must reach before this payment method becomes active',
  'error_permission' => 'У Вас нет прав для управления данным модулем!',
  'error_email' => ' Необходимо заполнить поле E-Mail!',
));

