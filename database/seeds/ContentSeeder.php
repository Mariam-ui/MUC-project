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
            ['block' => 1,
            'key' => 'title',
            'en' => 'FIND - OBSERVE - CHECK',
            'ru' => 'НАХОДИМ - НАБЛЮДАЕМ - ПРОВЕРЯЕМ',
            'de' => 'FINDEN - BEOBACHTEN - PRÜFEN',
        ],[
        'block' => 1,
        'key' => 'sub_title',
        'en' => 'PRIVATE INVESTIGATIONS AND INTELLECTUAL SERVICES',
        'ru' => 'ЧАСТНЫЕ РАССЛЕДОВАНИЯ И ИНТЕЛЛЕКТУАЛЬНЫЕ УСЛУГИ',
        'de' => 'PRIVATE UNTERSUCHUNGEN UND GEISTIGE DIENSTLEISTUNGEN',
    ],[
        'block' => 1,
        'key' => 'text',
        'en' => 'Such text is referred to as placeholder. It is a very handy tool for models (mockups). It helps highlight visual elements in a document or presentation, such as text, font, or markup.',
        'ru' => 'Такой текст называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.',
        'de' => 'Ein solcher Text wird als Platzhalter bezeichnet. Es ist ein sehr praktisches Werkzeug für Modelle (Modelle). Es hilft dabei, visuelle Elemente in einem Dokument oder einer Präsentation hervorzuheben, z. B. Text, Schriftart oder Markup.',
    ],[
        'block' => 1,
        'key' => 'button',
        'en' => 'Submit your application',
        'ru' => 'Оставить заявку',
        'de' => 'Reichen Sie Ihre Bewerbung ein',
    ],[
        'block' => 2,
        'key' => 'title',
        'en' => 'Search',
        'ru' => 'РОЗЫСК',
        'de' => 'Suche',
    ],[
        'block' => 2,
        'key' => 'text',
        'en' => 'Such text is referred to as placeholder. It is a very handy tool for models (mockups). It helps highlight visual elements in a document or presentation, such as text, font, or markup.',
        'ru' => 'Такой текст называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.',
        'de' => 'Ein solcher Text wird als Platzhalter bezeichnet. Es ist ein sehr praktisches Werkzeug für Modelle (Modelle). Es hilft dabei, visuelle Elemente in einem Dokument oder einer Präsentation hervorzuheben, z. B. Text, Schriftart oder Markup.',
    ],[
        'block' => 2,
        'key' => 'category_1',
        'en' => 'People',
        'ru' => 'Людей',
        'de' => 'Menschen',
    ],[
        'block' => 2,
        'key' => 'category_2',
        'en' => 'Transport',
        'ru' => 'Транспорта',
        'de' => 'Transport',
    ],[
        'block' => 2,
        'key' => 'category_3',
        'en' => 'Cargo',
        'ru' => 'Груза',
        'de' => 'Ladung',
    ],[
        'block' => 2,
        'key' => 'category_4',
        'en' => 'Organizations',
        'ru' => 'Организаций',
        'de' => 'Organisationen',
    ],[
        'block' => 3,
        'key' => 'title',
        'en' => 'OBSERVATION',
        'ru' => 'НАБЛЮДЕНИЕ',
        'de' => 'ÜBERWACHUNG',
    ],[
        'block' => 3,
        'key' => 'text',
        'en' => 'Such text is referred to as placeholder. It is a very handy tool for models (mockups). It helps highlight visual elements in a document or presentation, such as text, font, or markup.',
        'ru' => 'Такой текст называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.',
        'de' => 'Ein solcher Text wird als Platzhalter bezeichnet. Es ist ein sehr praktisches Werkzeug für Modelle (Modelle). Es hilft dabei, visuelle Elemente in einem Dokument oder einer Präsentation hervorzuheben, z. B. Text, Schriftart oder Markup.',
    ],[
        'block' => 3,
        'key' => 'category_1',
        'en' => 'for Physical / legal persons',
        'ru' => 'за Физ./ юр. лицами ',
        'de' => 'für physische / rechtliche Personen',
    ],[
        'block' => 3,
        'key' => 'category_2',
        'en' => 'behind the Cargo',
        'ru' => 'за Грузом',
        'de' => 'hinter der Ladung',
    ],[
        'block' => 3,
        'key' => 'category_3',
        'en' => 'for Transport',
        'ru' => 'за Транспортом',
        'de' => 'for Transport',
    ],[
        'block' => 3,
        'key' => 'category_4',
        'en' => 'for real estate',
        'ru' => 'за Недвижимостью',
        'de' => 'für Immobilien',
    ],[
        'block' => 4,
        'key' => 'title',
        'en' => 'COMPROMAT',
        'ru' => 'КОМПРОМАТ',
        'de' => 'KOMPROMAT',
    ],[
        'block' => 4,
        'key' => 'text',
        'en' => 'Such text is referred to as placeholder. It is a very handy tool for models (mockups). It helps highlight visual elements in a document or presentation, such as text, font, or markup.',
        'ru' => 'Такой текст называется как заполнитель. Это очень удобный инструмент для моделей (макетов). Он помогает выделить визуальные элементы в документе или презентации, например текст, шрифт или разметка.',
        'de' => 'Ein solcher Text wird als Platzhalter bezeichnet. Es ist ein sehr praktisches Werkzeug für Modelle (Modelle). Es hilft dabei, visuelle Elemente in einem Dokument oder einer Präsentation hervorzuheben, z. B. Text, Schriftart oder Markup.',
    ],[
        'block' => 4,
        'key' => 'category_1',
        'en' => 'Checking individuals and legal entities',
        'ru' => 'Проверка физических и Юридических лиц',
        'de' => 'Überprüfung von Personen und juristischen Personen',
    ],[
        'block' => 4,
        'key' => 'category_2',
        'en' => 'Checking the accuracy of information',
        'ru' => 'Проверка на достоверность информации',
        'de' => 'Überprüfung der Richtigkeit der Informationen  ',
    ],[
        'block' => 5,
        'key' => 'title',
        'en' => 'GUARANTEE CONFIDENTIALITY',
        'ru' => 'ГАРАНТИРУЕМ КОНФИДЕНЦИАЛЬНОСТЬ',
        'de' => 'GARANTIE VERTRAULICHKEIT',
    ],[
        'block' => 6,
        'key' => 'title',
        'en' => 'WRITE TO US',
        'ru' => 'НАПИШИТЕ НАМ',
        'de' => 'SCHREIB UNS',
    ],[
        'block' => 6,
        'key' => 'name_label',
        'en' => 'Full name',
        'ru' => 'ФИО',
        'de' => 'Vollständiger Name',
    ],[
        'block' => 6,
        'key' => 'name_placeholder',
        'en' => 'Timurov Alexander',
        'ru' => 'Тимуров Александр Кириллович ',
        'de' => 'Timurov Alexander',
    ],[
        'block' => 6,
        'key' => 'email_placeholder',
        'en' => 'Email address',
        'ru' => 'E-mail адресс',
        'de' => 'E-Mail addresse',
    ],[
        'block' => 6,
        'key' => 'message_label',
        'en' => 'Message',
        'ru' => 'Сообщение',
        'de' => 'Botschaft',
    ],[
        'block' => 6,
        'key' => 'button',
        'en' => 'Send a letter',
        'ru' => 'Отправить письмо',
        'de' => 'einen Brief schicken',
    ],[
        'block' => 7,
        'key' => 'text',
        'en' => 'All rights reserved. Moscow, 2020',
        'ru' => 'Все права защишены. Москва, 2020',
        'de' => 'Alle Rechte vorbehalten. Moskau, 2020',
    ],[
        'block' => 7,
        'key' => 'tel',
        'en' => '+7 984 621 03 02',
        'ru' => '+7 984 621 03 02',
        'de' => '+7 984 621 03 02',
    ],[
        'block' => 7,
        'key' => 'privacy_policy',
        'en' => 'PRIVACY POLICY',
        'ru' => 'ПОЛИТИКА  КОНФИДЕНЦИАЛЬНОСТИ',
        'de' => 'DATENSCHUTZ-BESTIMMUNGEN',
    ]
        )
        );
    }
}
