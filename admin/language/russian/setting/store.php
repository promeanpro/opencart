<?php
$_ = array_merge(
  (isset($_)?$_:array()),
  array (
  'heading_title' => 'Управление магазинами',
  'text_settings' => 'Настройки',
  'text_success' => 'Настройки успешно изменены!',
  'text_list' => 'Магазины',
  'text_add' => 'Добавить',
  'text_edit' => 'Редактирование',
  'text_items' => 'Товары',
  'text_tax' => 'Налоги',
  'text_account' => 'Аккаунт',
  'text_checkout' => 'Оформление заказа',
  'text_stock' => 'Склад',
  'text_shipping' => 'Адрес доставки',
  'text_payment' => 'Адрес плательщика',
  'column_name' => 'Название магазина',
  'column_url' => 'URL магазина',
  'column_action' => 'Действие',
  'entry_url' => 'URL магазина',
  'entry_ssl' => 'SSL URL',
  'entry_name' => 'Название магазина',
  'entry_owner' => 'Владелец магазина',
  'entry_address' => 'Адрес',
  'entry_geocode' => 'Geocode',
  'entry_email' => 'E-Mail',
  'entry_telephone' => 'Телефон',
  'entry_fax' => 'Факс',
  'entry_image' => 'Изображения',
  'entry_open' => 'Режим работы',
  'entry_comment' => 'Дополнительная информация',
  'entry_location' => 'Местонахождение',
  'entry_meta_title' => 'Мета-тег Title',
  'entry_meta_description' => 'Мета-тег Description',
  'entry_meta_keyword' => 'Мета-тег Keywords',
  'entry_layout' => 'Макет по умолчанию',
  'entry_template' => 'Шаблон',
  'entry_country' => 'Страна',
  'entry_zone' => 'Регион / Область',
  'entry_language' => 'Язык',
  'entry_currency' => 'Валюта',
  'entry_product_limit' => 'Лимит товаров (Витрина)',
  'entry_product_description_length' => 'Количество символов (Витрина)',
  'entry_tax' => 'Отображать цены с налогом',
  'entry_tax_default' => 'Налоговый адрес магазина',
  'entry_tax_customer' => 'Налоговый адрес клиента',
  'entry_customer_group' => 'Группа клиентов',
  'entry_customer_group_display' => 'Показывать группы клиентов',
  'entry_customer_price' => 'Клиентские цены',
  'entry_account' => 'Подтверждение при регистрации',
  'entry_cart_weight' => 'Вес на странице корзины',
  'entry_checkout_guest' => 'Гостевой заказ',
  'entry_checkout' => 'Подтверждение при заказе',
  'entry_order_status' => 'Статус заказа',
  'entry_stock_display' => 'Показывать остаток на складе',
  'entry_stock_checkout' => 'Заказ при нехватке на складе',
  'entry_logo' => 'Логотип',
  'entry_icon' => 'Иконка',
  'entry_image_category' => 'Размер изображения в списке категорий',
  'entry_image_thumb' => 'Размер большого изображения товара',
  'entry_image_popup' => 'Размер всплывающего изображения товара',
  'entry_image_product' => 'Размер изображения в списке товаров',
  'entry_image_additional' => 'Размер дополнительных изображений товара',
  'entry_image_related' => 'Размер изображения аналогичных товаров',
  'entry_image_compare' => 'Размер изображения в списке сравнения',
  'entry_image_wishlist' => 'Размер изображения в списке заметок',
  'entry_image_cart' => 'Размер изображений товаров в корзине',
  'entry_image_location' => 'Размер изображения магазина',
  'entry_width' => 'Ширина',
  'entry_height' => 'Высота',
  'entry_secure' => 'Использовать SSL',
  'help_url' => 'Включая полный URL к магазину. Добавьте \'/\' в конце. Например: http://wwww.yourdomain.com/path/',
  'help_ssl' => 'SSL URL адрес вашего магазина. Добавьте \'/\' в конце. Пример: http://www.yourdomain.com/path/  Не используйте каталоги для создания нового расположения. Вы должны всегда использовать другой домен или субдомен хостинг.',
  'help_geocode' => 'Пожалуйста, введите ваше местонахождение как GeoCode.',
  'help_open' => 'Режим работы вашего магазина.',
  'help_comment' => 'Это поле для дополнительной информации клиенту. Например, Наш магазин принимает к оплате только карты Visa.',
  'help_location' => 'Дополнительная информация о местонахождении магазина, которую Вы хотели бы разместить на станице "Связаться с нами".',
  'help_currency' => 'Изменение валюты по умолчанию. Необходимо очистить кэш браузера для просмотра изменений и сбрасывания cookies.',
  'help_product_limit' => 'Определяет, сколько товаров отображаются на странице (Список товаров).',
  'help_product_description_length' => 'Количество символов в кратком описании товара (Список товаров)',
  'help_tax_default' => 'Использовать адрес магазина для вычисления налогов если пользователь не авторизирован. Вы можете выбрать использование адреса магазина в качестве адреса доставки или адреса плательщика',
  'help_tax_customer' => 'Использовать адрес (по умолчанию) клиента, когда он авторизирован, для подсчета налогов. Вы можете выбрать использование выбранного по умолчанию адреса клиента для адреса доставки или адрес плательщика',
  'help_customer_group' => 'Группа клиентов по умолчанию.',
  'help_customer_group_display' => 'Показывать группы клиентов, которую, новые покупатели смогут выбрать при регистрации, Например "Оптовые покупатели"',
  'help_customer_price' => 'Показывать цены только зарегистрированным клиентам',
  'help_account' => 'Требовать подтверждение "согласия с правилами" при регистрации аккаунта.',
  'help_checkout_guest' => 'Позволяют клиентам оформлять заказ без создания учетной записи. Если есть у товара загружаемые файлы, то данная функция работать не будет.',
  'help_checkout' => 'Требовать подтверждение "согласия с правилами" при оформлении заказа.',
  'help_order_status' => 'Статус заказа по умолчанию, когда поступил новый заказ.',
  'help_stock_display' => 'Показывать остаток товаров на складе на странице товара.',
  'help_stock_checkout' => 'Разрешить клиентам оформлять заказ, если заказываемых товаров на данный момент нет на складе.',
  'help_icon' => 'Иконка должна быть в формате PNG, размером 16px*16px.',
  'help_secure' => 'Для использования SSL убедитесь, что Ваш хостинг поддерживает SSL сертификат и прописаны SSL адреса в файле конфигурации.',
  'error_warning' => 'Ошибка! Проверьте форму на наличие ошибок!',
  'error_permission' => 'У Вас нет прав для изменения настроек!',
  'error_name' => 'Название магазина должно быть от 3 до 32 символов!',
  'error_owner' => 'Имя владельца магазина должно быть от 3 до 64 символов!',
  'error_address' => 'Адрес магазина должен быть от 10 до 256 символов!',
  'error_email' => 'E-Mail адрес введен неверно!',
  'error_telephone' => 'Телефон должен быть от 3 до 32 символов!',
  'error_url' => 'Необходим URL магазина!',
  'error_meta_title' => 'Title должен быть от 3 до 32 символов!',
  'error_limit' => 'Укажите лимит!',
  'error_customer_group_display' => 'Вы должны добавить группу клиентов по умолчанию, если собираетесь использовать эту возможность!',
  'error_image_thumb' => 'Необходимо указать размер большого изображения товара!',
  'error_image_popup' => 'Необходимо указать размер всплывающего изображения товара!',
  'error_image_product' => 'Необходимо указать размер изображения в списке товаров!',
  'error_image_category' => 'Необходимо указать размер изображения в списке категорий!',
  'error_image_additional' => 'Необходимо указать размер дополнительных изображений товара!',
  'error_image_related' => 'Необходимо указать размер изображения аналогичных товаров!',
  'error_image_compare' => 'Необходимо указать размер изображения в списке сравнения!',
  'error_image_wishlist' => 'Необходимо указать размер изображения в списке заметок!',
  'error_image_cart' => 'Необходимо указать размер изображения товара в корзине!',
  'error_image_location' => 'Необходимо указать размер изображения магазина!',
  'error_default' => 'Нельзя удалить основной магазин!',
  'error_store' => 'Ошибка: Этот магазин нельзя удалить, так как у него есть %s заказов!',
));

