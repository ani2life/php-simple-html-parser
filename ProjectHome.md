## 요구환경 ##
PHP5

## SAX ##
HTMLParser 클래스가 SAX와 비슷한 기능을 제공합니다.
문법에 어긋나는 HTML 코드도 파이어폭스에 준하는 수준으로 처리 가능합니다.

## DOM ##
SimpleNode와 SimpleDocument 클래스가 간단한 DOM 기능을 제공합니다.
내부적으로 HTMLParser 클래스를 이용합니다.
태그의 열림과 닫힘이 일치하지 않는 코드도 파이어폭스에 준하는 수준으로 처리 가능합니다.

## 문법에 어긋나는 HTML 코드 지원 ##
```
<b alt="><" x y g>xxx</b>
```

## Doxygen 문서 포함 ##
샘플 예제 및 Doxygen으로 만들어진 문서를 제공합니다.