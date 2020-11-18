<PHP 생활코딩>

# PHP 
- PHP의 문법은 <?php 으로 시작하여 ~ ?> 으로 끝난다.

# 변수
- 변수는 $로 시작한다. (타입을 따로 지정해주지 않는다.)

# 출력
- echo "" ; 
- print();
- var_dump(); 타입과 문자열 인 경우 길이 까지 출력해준다.

# strlen();
- 문자열 길이 함수 strlen($String);

# nl2br
- 문자열의 줄바꿈을 <br> 태그 없이 자동으로 줄바꿈을 해주는 함수

# isset();
- 변수 설정 여부 확인

# echo file_get_contents(경로.$_GET['id']);

# array();
- 배열 ex) $Array= array("A","B","C","D");
 
# count();
- 배열의 원소 개수 ex) count($Array)	

# array_push();
- 배열의 원소 추가 ex) array_push($Array,"F");

# scandir();
- 디렉토리 안에있는 파일을 배열의 원소로 

# substr( string, start [, length ] )
- 문자열 인덱스부터 길이만큼 문자열 

# 매개변수
- parameter(파라미터) 

# 입력한 실제 값
- argument

# file_put_contents(파일생성 할 경로와 파일명, 생성할 파일의 내용);
- 파일 생성

# header('Location : 경로');
- 리다이렉트하여 경로으로 이동 그 이후 코드는 실행 X

# rename(old_name , new_name);
- 파일 이름 변경

#basename()
-  디렉토리를 제외한 가장 마지막의 이름을 되돌려준다
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
<HTML>
 
 # form 태그
 - 사용자가 입력한 정보를 url 파라미터로 만들어주는 태그
 - GET 방식 : 서버를 통해 url로 파라미터를 통해 데이터 전송 ( 북마크 용도 ) PHP 에서 $_GET[] 으로 파라미터를 받음
 - POST 방식 : PHP 에서 $_POST[] 으로 파라미터를 받음
 - action : form이 파라미터를 넘겨줄 경로 / method : post 또는 get 방식으로 받을지 선택 (기본값은 get)
 
 # input 태그
 - 사용자의 입력값을 받음 
 - name : 서버에서 사용될 이름 / value : 입력되어있는 값 / type : 타입 ex) text, submit, hidden / placeholder: 양식 안내 문구
