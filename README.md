# やんばるエキスパートPHP 共同開発資料

共同開発の手順やルールをまとめますので受講生の皆さんは必ずご確認ください。

## 目的

- 複数人開発でのGit操作をマスターする
- Laravelの基本的な処理を自分で考えながら実装できるようになる
- テキストコでのミュニケーションに慣れる

## 完成品

本共同開発で開発するアプリケーションの完成品は以下URLからご覧ください。（Herokuデプロイ済みです）<br>
ユーザー登録、ログイン、投稿、編集等、自由に動作確認していただいて問題ありません。

- [完成版アプリはコチラ](https://yanbaru-qiita.herokuapp.com/)

## 環境構築

共同開発で使用する開発環境の構築手順は以下リンクからご確認ください。

- [環境構築手順はコチラ](https://github.com/shimotaroo/Yanbaru-Qiita-App/blob/main/%E7%92%B0%E5%A2%83%E6%A7%8B%E7%AF%89%E6%89%8B%E9%A0%86.md)

## 画面定義書

共同開発で開発するアプリケーションの情報は以下のスプレッドシートにまとめています。<br>
都度確認しながら開発を進めてください。

- [画面定義書はコチラ](https://docs.google.com/spreadsheets/d/1JgDfCq58ptT_GHOkA-uV2AVS2icB38zlHcqJYc8K4A0/edit?usp=sharing)

スプレッドシートには以下の情報が含まれています。

- 画面遷移図
- ER図
- 各画面の仕様書
## 質問の仕方

エンジニアには質問力は必須です。

良い質問ができるようになればなるほど短い時間でエラーを解決できるようなりますので、学習段階から意識していきましょう。

原則、以下の質問テンプレートに則って質問してください。

※質問はSlackの**各共同開発チャンネル**からお願いします。

```
①聞きたいことの一言まとめ

②発生している問題（起きている現象の詳細/エラー文/スクショ/デバッグ結果）

③ソースコード（関連する全てのソースコード/ファイルを直接添付しない）

④問題解決するために試したこと（コマンドやコードがあれば追記し、参考にしたサイトを全て記載）

⑤問題について自分なりに考えたこと（検索結果/自分なりの原因予想）
```

また、以下の記事を必ず一読してください。

- [初学者目線で見たプログラミング学習において最も大切な｢質問する｣ことについて(やんばるエキスパートPHP受講生の記事です)](https://qiita.com/tera_at/items/cb9f63b04f759ca10e54)
- [良い質問をして自己成長に繋げるためのあれこれ](https://qiita.com/morry_48/items/86ce93c34e5789f38be3)

## ソースコードのバージョン管理

- バージョン管理ツール：Git
- リモートリポジトリ：GitHub

バージョン管理は`Git Flow`という管理手法で行います。

以下の記事で「Git Flowとは何か？」抑えてください。

- [Git-flowをざっと整理してみた](https://dev.classmethod.jp/articles/introduce-git-flow/)

Git Flowを用いたバージョン管理の詳細の作業や手順はこちらの動画をご覧いただき勉強してください。

- [Git Flow動画講義](https://www.youtube.com/watch?v=nG4Xe0fAS1E&list=PL9hBRkFDTzXucbrvS0M9NiSbdzccVZTMb&index=7&t=1s)

## 共同開発タスク一覧

本共同開発で皆さんが担当するタスクはこちらです。

- マイグレーションファイル作成
- シーダーファイル作成
- ユーザー登録画面・処理
- 記事投稿画面・処理
- ログアウト機能
- 一覧画面
- 記事詳細画面・処理
- 記事編集画面・処理
- 記事削除機能
- マイページ画面
- ユーザー情報変更画面・処理

各チームのリーダーは以下のリンクのタスク表で以下の作業をお願いします。

[タスク表はコチラ](https://docs.google.com/spreadsheets/d/1L6ZOn6VZ75veqa1cpASPb2GpKrXg6NV_yGCIxkGsOiY/edit#gid=247038847)

- 皆さんの期のシートがあると思いますので、各チームのリーダーは各タスクに担当者を設定してください。（シートの作成はメンターが行います）
- 担当者設定が完了したら担当メンターにご連絡ください。

## 開発作業に関するルール

- 担当タスクの開発は`develop-○`（メンターからどのdevelopブランチを使うかは連絡があります）から`feature`ブランチを作成して、そこで作業をしてください。
- featureブランチの名前は`feature/名前/タスク概要`にしてください。
  - 例1：田中さんがログイン画面・処理作成の場合は`feature/tanaka/login`
  - 例2：田中さんが記事投稿画面・処理作成の場合は`feature/tanaka/articles_create`
- 1つのタスクにつき1つのブランチ、1つのPR（プルリクエスト）を発行してください。（複数のタスクを1つのPRにまとめないでください）
- PRのマージ先は`develop-各期の番号`にしてください。（デフォルトで`main`になっているので変更を忘れないように変更してください）
- PRの説明欄に作業概要を記載してください。
- レビュー依頼前にPR画面の`Files changed` タブで自分の変更内容が想定どおりか（＝不要なファイルの変更が含まれていないか）を必ずチェックしてください。

## PR（プルリクエスト）のテンプレート

- タイトルは、`共同開発タスク一覧から担当したタスク名（自身の名前）`を記載して下さい。（例：「ログイン画面（田中）」
- レビューしやすいPRは次のような特徴があります。
  - `概要`に変更の目的が説明されている（共同開発タスクに対応する目的が書いてある）
  - `変更内容`が説明されている.
  - 変更内容がシンプルになっている.（複数の変更をまとめない）
  - `動作確認`を行った手順が書いてある.
- 下のテンプレートをご使用ください。

```
## 概要

## 変更内容

## 動作確認

```
## 共同開発のコードレビューついて

レビュー依頼はSlackの**各共同開発チャンネル**からお願いします。なおレビュー依頼では以下の情報を入れるようお願いします。

- コードレビュー担当のメンターのメンション（@○○）
- 担当タスクの名称
- 発行したPRのURL


本講座では公式メンターが全てのPRをコードレビューします。

コードレビューではたくさん修正コメントが入って落ち込んでしまうかもしれませんが、メンターに受講生の皆さんへの人格否定の気持ちは皆無です。コードレビューはその人に向けたものではなく、その人のコードに対してのコメントですのでそのように受け取っていただけると幸いですm(__)m

それでは共同開発頑張っていきましょう！！