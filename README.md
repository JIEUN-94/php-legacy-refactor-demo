# 🚚 물류 시스템 레거시 리팩토링 포트폴리오

> 실무에서 8년간 운영한 PHP 기반 물류 시스템을, 2025년 1월부터 약 4개월간 단독으로 리팩토링하며 구축한 경험을 바탕으로 정리한 포트폴리오입니다.  
> 단순한 기능 개선을 넘어서, **코드 구조, 서버 환경, 보안, 운영 유지보수 측면까지 전반적인 개선을 수행**했으며,  
> 이 경험을 바탕으로 **물류 분야를 넘어 다양한 산업의 IT 시스템으로 확장하고자 하는 목표**를 가지고 정리했습니다.

---

## 🧩 프로젝트 개요

- **프로젝트명:** 물류 배송/청구 시스템 리팩토링
- **담당 역할:** 100% 단독 진행
- **진행 기간:** 2025년 1월 ~ 4월 (약 3~4개월)
- **운영 기간:** 약 8년간 유지보수 및 기능 개선
- **서버 환경 개선:** Windows Server 2012R → 2019 업그레이드
- **기술 스택:** PHP 5.3 → PHP 8.3, MSSQL, JavaScript (jQuery), Composer, dotenv

---

## 🔧 주요 리팩토링 포인트

| 항목               | 변경 전 (Legacy)         | 변경 후 (Modern)                     |
|--------------------|---------------------------|-------------------------------------|
| DB 연결 방식        | `mssql_connect()`         | PDO + 예외 처리 구조                 |
| 설정값 관리         | 하드코딩된 config.php     | `.env` 환경변수 기반 구조             |
| 코드 구조          | 파일 단위 include 구조     | 간단한 MVC 기반 구조화                |
| 보안 처리          | SQL 직접 삽입             | Prepared Statements 사용             |
| HTML 출력 방식     | PHP + HTML 혼합           | 뷰 분리 및 템플릿화                   |
| 암호화 로직        | `mcrypt` 사용             | `openssl_encrypt()`로 대체           |
| 서버 환경          | Windows Server 2012R      | Windows Server 2019 + PHP 8.3       |

---

## 📂 디렉토리 구조 (샘플)


---

## ✨ 주요 기능 경험

- 국내/해외 다수 배송사 API 연동 및 응답 정규화
- 송장 기반 배송 데이터 업로드 + 추적 시스템
- 청구 프로그램: 고객사별 요율 기반 정산 처리 + Excel 출력
- 운영 환경 무중단 전환 전략 (구조 분리 + 점진적 마이그레이션)

---

## 💬 회고 및 확장 목표

- 단순히 코드만 개선하는 것이 아니라, **운영 환경 전반에 대한 분석과 개선**을 직접 주도하며 시스템 운영 역량을 키웠습니다.
- 점진적 전환, 레거시 이해, 예외 대응, DB 최적화 등 실전에서 필요한 역량을 쌓을 수 있었습니다.
- 이 경험을 바탕으로, 물류뿐 아니라 **헬스케어, 금융, 교육 등 다양한 IT 시스템으로 확장해보고자 합니다.**
- 익숙한 것만 고집하기보다 **도메인을 넘나들며 실력을 쌓는 개발자**가 되는 것이 제 목표입니다.

---

## 📎 참고

> 본 프로젝트는 실제 운영된 시스템을 기반으로 하되, 민감한 정보와 내부 코드는 제외한 구조 데모입니다.  
> 실무 경험과 기술 역량을 정리하여, 포트폴리오 용도로 제작하였습니다.

