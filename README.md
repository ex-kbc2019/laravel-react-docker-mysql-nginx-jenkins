# Laravel-react-docker-mysql-nginx-jenkins
## 概要
Laravel(v9.51.0) + React(v18.2.0) 勉強用 Repository

---

## 初期設定
### コンテナ準備
```
$ make init
```
## 開発用コマンド
### コンテナ準備
```
$ make up
```
### コンテナ停止＆削除
```
$ make down
```

---

## コミットルール
```
feat: 機能追加
fix: バグ修正
refactor: 外部的振る舞いを保ちつつ，内部構造を改善する
style: コードの見た目の変更（機能部分は変更しない）．空白，フォーマット，改行，セミコロンなど
perf: パフォーマンス改善
docs: ドキュメントの編集
```
必ず commit は上の 6 種類から始めること  
例)  
`feat: ログイン処理を追加`  
`fix: ログイン処理のバグ修正`
### 注意点

-   自分のブランチが`develop`または`main`にはなっていない
-   ブランチをきる際は、基本は develop から切ること
-   作業分での commit を作成し、PullRequest を作成していること
-   PullRequest の Reviewer に適切なユーザをアサインすること


### コード整形
コードの整形は以下のコマンドを使用して行う
```
$ make f
```