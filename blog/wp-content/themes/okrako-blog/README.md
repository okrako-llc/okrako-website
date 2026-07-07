# okrako-blog-theme

グループホームおけらこ（`okrako.com`）の **スタッフブログ用 WordPress テーマ** です。
テーマ名（サーバー上のフォルダ名）：`okrako-blog`

---

## サイト全体の構成（重要：okrako.com は2階建て）

`okrako.com` は、見た目は1つですが中身は **2つの別システム** でできています。

```
okrako.com
├─ トップ / 施設紹介 / 会社概要 など        → 【静的HTMLサイト】
│    index.html, facilities.html …             リポジトリ: okrako-website
│                                              置き場所: サーバーの /public_html/
│
└─ okrako.com/blog/ 以下（スタッフブログ）   → 【WordPress】
     記事本文 …… WordPressのデータベース内       このリポジトリ = ブログの「デザイン」だけ
     デザイン …… このテーマ(okrako-blog)         置き場所: /public_html/blog/wp-content/themes/okrako-blog/
```

ヘッダー（上部メニュー）は、両システムで同じ見た目になるよう別々に作り込んで統一しています。

---

## 「何を変えたいか」で作業場所が変わる

| 変えたいもの | 作業場所 | このリポジトリと関係 |
|---|---|---|
| ブログの **記事**（文章・写真・新規投稿） | WordPress管理画面 `okrako.com/blog/wp-admin` | **無関係**（記事はDB内。普段通り投稿でOK） |
| ブログの **デザイン・レイアウト**（ヒーロー等） | このリポジトリのファイルを編集 → FTP | **ここが対象** |
| トップ等 **静的ページ** | `okrako-website` リポジトリ → FTP | 別リポジトリ |

> **記事の投稿フローはこのリポジトリを作っても一切変わりません。**
> Git管理するのは「デザインの設計図」だけで、記事データ（DB）には触れないためです。

### 注意（デザイン編集時のルール）
今後テーマの見た目を変えるときは、WordPressの「外観 → テーマファイルエディター」で
**サーバー上を直接いじらない**でください。必ず「このリポジトリを編集 → FTPでアップ」の順で行うこと。
（直接いじるとGitの内容とサーバーがズレて、履歴の意味がなくなるため）

---

## デプロイ手順（テーマを更新したとき）

アップロード先：`/public_html/blog/wp-content/themes/okrako-blog/`

1. ローカルでファイルを編集
2. 変更前にサーバー側のテーマをバックアップ（`/Users/Shared/` 等、ホーム外へ）
3. 変更したファイルだけを FTP（`lftp`）でアップ
   - ホスト `sv10659.xserver.jp` / `set ftp:ssl-allow true; set ssl:verify-certificate no`
   - `--delete` は付けない（追加・更新のみ）
4. `okrako.com/blog/` を表示して確認（崩れて見えたらブラウザキャッシュ → スーパーリロード）

※ FTPの認証情報はこのリポジトリにもホーム配下にも平文保存しないこと。

---

## ファイル構成

| ファイル | 役割 |
|---|---|
| `index.php` | ブログトップ（記事一覧＋ヒーロー） |
| `archive.php` | カテゴリ・アーカイブ一覧（＋ヒーロー） |
| `single.php` | 記事詳細ページ |
| `page.php` | 固定ページ |
| `header.php` / `footer.php` | 共通ヘッダー・フッター |
| `functions.php` | テーマ設定（CSS読み込み・抜粋長など） |
| `style.css` | ブログ専用の見た目（静的サイトの `style.css` を土台に追加） |
| `404.php` | 404ページ |

ヒーロー画像は `https://okrako.com/images/blog_hero.jpg`（おけらこ自身のサーバーに設置）を参照。
