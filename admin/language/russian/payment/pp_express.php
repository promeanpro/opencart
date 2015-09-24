<?php
$_ = array_merge(
  (isset($_)?$_:array()),
  array (
  'heading_title' => 'PayPal Экспресс-платежи',
  'text_payment' => 'Payment',
  'text_success' => 'Настройки успешно изменены!',
  'text_edit' => 'Редактирование',
  'text_pp_express' => '<a href="https://www.paypal.com/uk/mrb/pal=W9TBB5DTD6QJW" taget="_blank"><img src="view/image/payment/paypal.png" alt="PayPal" title="PayPal" style="border: 1px solid #EEEEEE;" /></a>',
  'text_authorization' => 'Авторизация',
  'text_sale' => 'Продажа',
  'text_clear' => 'Очистить',
  'text_browse' => 'Обзор',
  'text_image_manager' => 'Обзор изображений',
  'text_ipn' => 'IPN url',
  'entry_username' => 'API Username',
  'entry_password' => 'API Password',
  'entry_signature' => 'API Signature',
  'entry_test' => 'Тестовый режим (Sandbox) Mode',
  'entry_method' => 'Метод транзакции',
  'entry_geo_zone' => 'Географическая зона',
  'entry_status' => 'Статус',
  'entry_sort_order' => 'Порядок сортировки',
  'entry_icon_sort_order' => 'Иконка порядок сортировки',
  'entry_debug' => 'Запись ошибок',
  'entry_total' => 'Минимальная сумма заказа',
  'entry_currency' => 'Валюта по умолчанию',
  'entry_recurring_cancellation' => 'Allow customers to cancel recurring payments',
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
  'entry_display_checkout' => 'Показать иконку быстрого заказа',
  'entry_allow_notes' => 'Разрешить заметки',
  'entry_logo' => 'Логотип',
  'entry_border_colour' => 'Цвет рамки шапки',
  'entry_header_colour' => 'Цвет фона шапки',
  'entry_page_colour' => 'Цвет фона страницы',
  'tab_general' => 'Основное',
  'tab_api' => 'API Details',
  'tab_order_status' => 'Статус заказа',
  'tab_checkout' => 'Checkout',
  'help_ipn' => 'Required for subscriptions',
  'help_total' => 'The checkout total the order must reach before this payment method becomes active',
  'help_logo' => 'Максимум 750px(ш) x 90px(в)<br />Вы должны использовать логотип, если установили SSL',
  'help_colour' => 'HTML цвет в формате HEX, например D6D7F5',
  'help_currency' => 'Used for transaction searches',
  'error_permission' => 'У Вас нет прав для управления данным модулем!',
  'error_username' => 'Необходимо заполнить API Username!',
  'error_password' => 'Необходимо заполнить API Password!',
  'error_signature' => 'Необходимо заполнить API Signature!',
  'error_data' => 'Ошибка запроса',
  'error_timeout' => 'Время ожидания запроса окончено',
));
