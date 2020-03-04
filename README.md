# VK
group_id = 57169109
user_id=309667469
https://oauth.vk.com/authorize?client_id=7342231&display=page&redirect_uri=https://oauth.vk.com/blank.html&scope=offline&response_type=token&v=5.52
https://api.vk.com/method/METHOD_NAME?PARAMETERS&access_token=ACCESS_TOKEN&v=v=5.52

METHOD_NAME (обязательно) — название метода API, к которому Вы хотите обратиться. Полный список методов доступен на этой странице. Обратите внимание: имя метода чувствительно к регистру.
PARAMETERS (опционально) — входные параметры соответствующего метода API, последовательность пар name=value, разделенных амперсандом. Список параметров указан на странице с описанием метода.
ACCESS_TOKEN (обязательно) — ключ доступа. Подробнее о получении токена Вы можете узнать в этом руководстве.
V (обязательно) — используемая версия API. Использование этого параметра применяет некоторые изменения в формате ответа различных методов. На текущий момент актуальная версия API — 5.103. Этот параметр следует передавать со всеми запросами.

https://api.vk.com/method/METHOD_NAME?PARAMETERS&access_token=ACCESS_TOKEN&v=v=5.52
https://vk.com/dev/wall.get?params[owner_id]=-57169109&params[count]=2&params[filter]=owner&params[extended]=1&params[v]=5.103
https://api.vk.com/method/wall.get?owner_id=-57169109&count=2&filter=owner&extended=0&v=5.103&access_token=f802f98a7fbb64c4ced99638ef06832ba5c7d8a7b0906785b178d1146e2296f313f6039f08a32cd83e918