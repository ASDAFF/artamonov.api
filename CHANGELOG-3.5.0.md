- Исправлена проблема с кодировкой при возникновении ошибок в контроллерах
- Доработано логирование запросов в файл. Теперь файлы логов пишутся в разрезе суток.
- Добавлена поддержка метода PATCH.
- Доработана проверка заголовка Content type.
- В контроллерах-примерах (/example/check/) добавлен вывод результата с дополнительным параметром JSON_UNESCAPED_UNICODE -> Response::ShowResult($arResult, JSON_UNESCAPED_UNICODE). Теперь в ответе не будет юникода - \u041f\u043e\u043b.
- Доработан сбор всех параметров при GET/POST/PUT/PATCH/DELETE/OPTIONS-запросах. Теперь, если был выполнен запрос, например: /api/example/check/param1/param2/param3/?param4=value4&param5=value5 - тогда в будут возвращены все значения: param1, param2, param3, param4, param5, а также все параметры переданные из тела запроса (если не GET).
- Добавлена возможность подключать собственные контроллеры. Достаточно указать лишь путь к ним. Пример подключения смотрите в документации. Пункт: Настройки - Контроллеры
- Оптимизирована логика и увеличина скорость работы.
