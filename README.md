# ЕДРО:ПОЛИМЕР
База данных ЕСЛИ ДЕЙСТВИЕ РЕАЛЬНОСТЬ ОБЪЕКТЫ <br/>
<br/>
>?Е->Д:<br/>
>?Р->О<br/>
<br/>
## Example of object ЕДРО:<br/>
?Е=load table record.(if(load table record))<br/>
:Д=Write Reality to access log, <br/>
<br/>
## Пример объекта ЕДРО:<br/>
?Е = Если чтение объекта;<br/>
:Д = Действие: Создать запись в журнал просмотра объектов;<br/>
>Р = Дополнить объект сведениями об окружающей ситуации;<br/>
=О : Параметры сформированного записываемого объекта.<br/>
<br/>
<br/>
<br/>
ЕДРО:ПОЛИМЕР, может обрабатывать хранимые объекты следующего вида:<br/>
Е - ЕСЛИ, условие, например (EDRO->objReality['bIzandroid']!=true)<br/>
Д - Действие, программа описывающая действие.<br/>
Р - Реальность исполняемой среды , <br/>
О - Сформированный объект.<br/><br/>
<br/>

# Features


* Counts view of a record, table row or group of records.
* Smart adaptation to reality (Platform, can react on Reality for example:Detects Android or iPhone, and shows different rows from table, adopted to Reality).

# Методы
_CreatePrimaryIndex('Database/Table', dataObject);<br/>
_CreateFullTextIndex('Database/Table', dataObject);<br/>
_AddJoinedTable_Belongs('Database/Table/BelongsTo', Relative object);<br/>
_AddJoinedTable_HasMany('Database/Table/BelongsTo', Relative object);<br/>

© Andrey Chekmaryov tubmulur@yandex.ru 2020<br/>

