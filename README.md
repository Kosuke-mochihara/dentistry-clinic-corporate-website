# clinic-corporate-website

歯科クリニック向け WordPress テーマ（Gulp 4 / スマホファースト）

---

## 必要環境

```
環境
├ Gulp 4 系が利用できること
└ Node.js 14 以降
```

---

## セットアップ

```
1. テーマフォルダを開く
2. ターミナルで依存関係をインストール
   └ npm i
      ├ node_modules/
      └ package-lock.json   … 生成されることを確認
3. 開発タスクを起動
   └ npx gulp
      ├ Sass のコンパイル（監視）
      ├ 画像の圧縮（監視）
      └ BrowserSync（ローカルプレビュー）
```

---

## ディレクトリ構成

編集する場所と、ビルド後の出力先の対応です。

```
clinic-corporate-website/
├ src/                          … 編集用（Gulp が監視）
│  ├ sass/                      … Sass の記述はここ
│  │  ├ base/
│  │  ├ global/
│  │  ├ layout/
│  │  ├ object/
│  │  │  ├ component/
│  │  │  ├ plugin/
│  │  │  └ project/
│  │  └ styles.scss             … エントリーポイント
│  └ images/                    … 元画像（圧縮される）
│     └ common/
├ css/                          … コンパイル後の CSS（出力先）
├ images/                       … 圧縮後の画像（出力先）
├ js/                           … JavaScript（圧縮なし・直接編集）
├ html/                         … 静的 HTML（開発用）
├ assets/                       … その他アセット
├ gulpfile.js
├ package.json
└ *.php                         … WordPress テンプレート
   ├ front-page.php
   ├ header.php / footer.php
   ├ page-*.php
   └ single*.php / archive*.php など
```

### ビルドの入出力

```
src/sass/**/*.scss  ──コンパイル──▶  css/
src/images/**/*     ──圧縮──────▶  images/
js/                 ──（Gulp 対象外・そのまま利用）
```

---

## 開発の仕様

```
方針
├ スマホファースト
├ サイズ指定は rem を前提
└ ルートフォントを vw で設定
   └ rem 指定の場合、PC レイアウトをタブレット幅でも再現可能
```

| 種別 | 編集場所 | 備考 |
|------|----------|------|
| Sass | `src/sass/` | コンパイル後は `css/` に出力 |
| 画像 | `src/images/` | 圧縮後は `images/` に出力 |
| JS | `js/` | 圧縮・バンドルは行っていない |

---

## 主な npm スクリプト

Gulp タスクは `gulpfile.js` で定義されています。通常は次のコマンドで開発を開始します。

```bash
npx gulp
```
