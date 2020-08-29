<?php

use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert(array(
            [
                'block' => 'first_block',
                'key' => 'title',
                'en' => 'FIND - OBSERVE - CHECK',
                'ru' => 'НАХОДИМ - НАБЛЮДАЕМ - ПРОВЕРЯЕМ',
                'fr' => 'НАХОДИМ - НАБЛЮДАЕМ - ПРОВЕРЯЕМ',
                'de' => 'FINDEN - BEOBACHTEN - PRÜFEN',
            ],[
                'block' => 'first_block',
                'key' => 'sub_title',
                'en' => 'PRIVATE INVESTIGATIONS AND INTELLECTUAL SERVICES',
                'ru' => 'ЧАСТНЫЕ РАССЛЕДОВАНИЯ И ИНТЕЛЛЕКТУАЛЬНЫЕ УСЛУГИ',
                'fr' => 'ЧАСТНЫЕ РАССЛЕДОВАНИЯ И ИНТЕЛЛЕКТУАЛЬНЫЕ УСЛУГИ',
                'de' => 'PRIVATE UNTERSUCHUNGEN UND GEISTIGE DIENSTLEISTUNGEN',
            ],[
                'block' => 'first_block',
                'key' => 'text',
                'en' => 'Such text is referred to as placeholder. It is a very handy tool for models (mockups). It helps highlight visual elements in a document or presentation, such as text, font, or markup.',
                'ru' => 'Такой текст называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.',
                'fr' => 'Такой текст называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.',
                'de' => 'Ein solcher Text wird als Platzhalter bezeichnet. Es ist ein sehr praktisches Werkzeug für Modelle (Modelle). Es hilft dabei, visuelle Elemente in einem Dokument oder einer Präsentation hervorzuheben, z. B. Text, Schriftart oder Markup.',
            ],[
                'block' => 'first_block',
                'key' => 'button',
                'en' => 'Submit your application',
                'ru' => 'Оставить заявку',
                'fr' => 'Оставить заявку',
                'de' => 'Reichen Sie Ihre Bewerbung ein',
            ],[
                'block' => 'second_block',
                'key' => 'title',
                'en' => 'Search',
                'ru' => 'РОЗЫСК',
                'fr' => 'РОЗЫСК',
                'de' => 'Suche',
            ],[
                'block' => 'second_block',
                'key' => 'text',
                'en' => 'Such text is referred to as placeholder. It is a very handy tool for models (mockups). It helps highlight visual elements in a document or presentation, such as text, font, or markup.',
                'ru' => 'Такой текст называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.',
                'fr' => 'Такой текст называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.',
                'de' => 'Ein solcher Text wird als Platzhalter bezeichnet. Es ist ein sehr praktisches Werkzeug für Modelle (Modelle). Es hilft dabei, visuelle Elemente in einem Dokument oder einer Präsentation hervorzuheben, z. B. Text, Schriftart oder Markup.',
            ],[
                'block' => 'second_block',
                'key' => 'category_1',
                'en' => 'People',
                'ru' => 'Людей',
                'fr' => 'Людей',
                'de' => 'Menschen',
            ],[
                'block' => 'second_block',
                'key' => 'category_2',
                'en' => 'Transport',
                'ru' => 'Транспорта',
                'fr' => 'Транспорта',
                'de' => 'Transport',
            ],[
                'block' => 'second_block',
                'key' => 'category_3',
                'en' => 'Cargo',
                'ru' => 'Груза',
                'fr' => 'Груза',
                'de' => 'Ladung',
            ],[
                'block' => 'second_block',
                'key' => 'category_4',
                'en' => 'Organizations',
                'ru' => 'Организаций',
                'fr' => 'Организаций',
                'de' => 'Organisationen',
            ],[
                'block' => 'third_block',
                'key' => 'title',
                'en' => 'OBSERVATION',
                'ru' => 'НАБЛЮДЕНИЕ',
                'fr' => 'НАБЛЮДЕНИЕ',
                'de' => 'ÜBERWACHUNG',
            ],[
                'block' => 'third_block',
                'key' => 'text',
                'en' => 'Such text is referred to as placeholder. It is a very handy tool for models (mockups). It helps highlight visual elements in a document or presentation, such as text, font, or markup.',
                'ru' => 'Такой текст называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.',
                'fr' => 'Такой текст называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.',
                'de' => 'Ein solcher Text wird als Platzhalter bezeichnet. Es ist ein sehr praktisches Werkzeug für Modelle (Modelle). Es hilft dabei, visuelle Elemente in einem Dokument oder einer Präsentation hervorzuheben, z. B. Text, Schriftart oder Markup.',
            ],[
                'block' => 'third_block',
                'key' => 'category_1',
                'en' => 'for Physical / legal persons',
                'ru' => 'за Физ./ юр. лицами ',
                'fr' => 'за Физ./ юр. лицами ',
                'de' => 'für physische / rechtliche Personen',
            ],[
                'block' => 'third_block',
                'key' => 'category_2',
                'en' => 'behind the Cargo',
                'ru' => 'за Грузом',
                'fr' => 'за Грузом',
                'de' => 'hinter der Ladung',
            ],[
                'block' => 'third_block',
                'key' => 'category_3',
                'en' => 'for Transport',
                'ru' => 'за Транспортом',
                'fr' => 'за Транспортом',
                'de' => 'for Transport',
            ],[
                'block' => 'third_block',
                'key' => 'category_4',
                'en' => 'for real estate',
                'ru' => 'за Недвижимостью',
                'fr' => 'за Недвижимостью',
                'de' => 'für Immobilien',
            ],[
                'block' => 'fourth_block',
                'key' => 'title',
                'en' => 'COMPROMAT',
                'ru' => 'КОМПРОМАТ',
                'fr' => 'КОМПРОМАТ',
                'de' => 'KOMPROMAT',
            ],[
                'block' => 'fourth_block',
                'key' => 'text',
                'en' => 'Such text is referred to as placeholder. It is a very handy tool for models (mockups). It helps highlight visual elements in a document or presentation, such as text, font, or markup.',
                'ru' => 'Такой текст называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.',
                'fr' => 'Такой текст называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.',
                'de' => 'Ein solcher Text wird als Platzhalter bezeichnet. Es ist ein sehr praktisches Werkzeug für Modelle (Modelle). Es hilft dabei, visuelle Elemente in einem Dokument oder einer Präsentation hervorzuheben, z. B. Text, Schriftart oder Markup.',
            ],[
                'block' => 'fourth_block',
                'key' => 'category_1',
                'en' => 'Checking individuals and legal entities',
                'ru' => 'Проверка физических и Юридических лиц',
                'fr' => 'Проверка физических и Юридических лиц',
                'de' => 'Überprüfung von Personen und juristischen Personen',
            ],[
                'block' => 'fourth_block',
                'key' => 'category_2',
                'en' => 'Checking the accuracy of information',
                'ru' => 'Проверка на достоверность информации',
                'fr' => 'Проверка на достоверность информации',
                'de' => 'Überprüfung der Richtigkeit der Informationen  ',
            ],[
                'block' => 'fifth_block',
                'key' => 'title',
                'en' => 'GUARANTEE CONFIDENTIALITY',
                'ru' => 'ГАРАНТИРУЕМ КОНФИДЕНЦИАЛЬНОСТЬ',
                'fr' => 'ГАРАНТИРУЕМ КОНФИДЕНЦИАЛЬНОСТЬ',
                'de' => 'GARANTIE VERTRAULICHKEIT',
            ],[
                'block' => 'sixth_block',
                'key' => 'title',
                'en' => 'WRITE TO US',
                'ru' => 'НАПИШИТЕ НАМ',
                'fr' => 'НАПИШИТЕ НАМ',
                'de' => 'SCHREIB UNS',
            ],[
                'block' => 'sixth_block',
                'key' => 'name_label',
                'en' => 'Full name',
                'ru' => 'ФИО',
                'fr' => 'ФИО',
                'de' => 'Vollständiger Name',
            ],[
                'block' => 'sixth_block',
                'key' => 'name_placeholder',
                'en' => 'Timurov Alexander',
                'ru' => 'Тимуров Александр Кириллович ',
                'fr' => 'Тимуров Александр Кириллович ',
                'de' => 'Timurov Alexander',
            ],[
                'block' => 'sixth_block',
                'key' => 'email_placeholder',
                'en' => 'Email address',
                'ru' => 'E-mail адресс',
                'fr' => 'E-mail адресс',
                'de' => 'E-Mail addresse',
            ],[
                'block' => 'sixth_block',
                'key' => 'message_label',
                'en' => 'Message',
                'ru' => 'Сообщение',
                'fr' => 'Сообщение',
                'de' => 'Botschaft',
            ],[
                'block' => 'sixth_block',
                'key' => 'button',
                'en' => 'Send a letter',
                'ru' => 'Отправить письмо',
                'fr' => 'Отправить письмо',
                'de' => 'einen Brief schicken',
            ],[
                'block' => 'seventh_block',
                'key' => 'text',
                'en' => 'All rights reserved. Moscow, 2020',
                'ru' => 'Все права защишены. Москва, 2020',
                'fr' => 'Все права защишены. Москва, 2020',
                'de' => 'Alle Rechte vorbehalten. Moskau, 2020',
            ],[
                'block' => 'seventh_block',
                'key' => 'tel',
                'en' => '+7 984 621 03 02',
                'ru' => '+7 984 621 03 02',
                'fr' => '+7 984 621 03 02',
                'de' => '+7 984 621 03 02',
            ],[
                'block' => 'seventh_block',
                'key' => 'privacy_policy',
                'en' => 'PRIVACY POLICY',
                'ru' => 'ПОЛИТИКА  КОНФИДЕНЦИАЛЬНОСТИ',
                'fr' => 'ПОЛИТИКА  КОНФИДЕНЦИАЛЬНОСТИ',
                'de' => 'DATENSCHUTZ-BESTIMMUNGEN',
            ]
        ));
    }
}
