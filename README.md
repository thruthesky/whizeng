# X5

Withcenter X version 5


# TODO
- change project name from 'whizeng' to 'x5'
- prepare for support for multi website.
- optionize the main banner.

    -- banner change

    -- banner text change by i18n, l10n


- json - teacher list 과 skypeenglish 계정의 iframe_login.php 를 분석하여
- 접속 할 때 마다
 id, nick, email, name, classid, domain, mobile, landline 정보를 업데이트하면서

    강사 목록, 예약된 수업 시간표, 지난 수업 시간표를 가져오는 JSON 을 작성한다.


-


# API Protocol


## JSON data format

Server API Endpoint : http://onlineenglish.kr/ajax.php

Data from Client To Server : REST

Data from Server to Client : JSON

### Basic Information

All connection from client to server must have complete profile information.

    id, nickname, name, mobile, landline, email, classid

