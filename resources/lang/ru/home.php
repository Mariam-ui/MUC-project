<?php
use App\Models\Contents as Contents;
$contents = Contents::all()->groupBy('block');
if( !empty($contents) ){
    $plucked = [];
    foreach ($contents as $key => $content){
        $plucked[$content[0]->block] = $content->pluck('ru', 'key');
    }
    return $plucked;
}
return [
    'first_block.title' => 'НАХОДИМ - НАБЛЮДАЕМ - ПРОВЕРЯЕМ',
    'first_block.sub_title' => 'ЧАСТНЫЕ РАССЛЕДОВАНИЯ И ИНТЕЛЛЕКТУАЛЬНЫЕ УСЛУГИ',
    'first_block.text' => 'Такой текст называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.',
    'first_block.button' => 'Оставить заявку',
    'second_block.title' => 'РОЗЫСК',
    'second_block.text' => 'Такой текст называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.',
    'second_block.category_1' => 'Людей',
    'second_block.category_2' => 'Транспорта',
    'second_block.category_3' => 'Груза',
    'second_block.category_4' => 'Организаций',
    'third_block.title' => 'НАБЛЮДЕНИЕ',
    'third_block.text' => 'Такой текст называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.',
    'third_block.category_1' => 'за Физ./ юр. лицами ',
    'third_block.category_2' => 'за Грузом',
    'third_block.category_3' => 'за Транспортом',
    'third_block.category_4' => 'за Недвижимостью',
    'fourth_block.title' => 'КОМПРОМАТ',
    'fourth_block.text' => 'Такой текст называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.',
    'fourth_block.category_1' => 'Проверка физических и Юридических лиц',
    'fourth_block.category_2' => 'Проверка на достоверность информации',
    'fifth_block.title' => 'ГАРАНТИРУЕМ КОНФИДЕНЦИАЛЬНОСТЬ',
    'sixth_block.title'  => 'НАПИШИТЕ НАМ',
    'sixth_block.name_label' => 'ФИО',
    'sixth_block.name_placeholder' => 'Тимуров Александр Кириллович ',
    'sixth_block.email_placeholder' => 'E-mail адресс',
    'sixth_block.message_label' => 'Сообщение',
    'sixth_block.button' => 'Отправить письмо',
    'seventh_block.text' => 'Все права защишены. Москва, 2020',
    'seventh_block.tel' => '+7 984 621 03 02',
    'seventh_block.privacy_policy' => 'ПОЛИТИКА  КОНФИДЕНЦИАЛЬНОСТИ',
];
