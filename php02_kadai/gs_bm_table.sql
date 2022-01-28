-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2022-01-28 12:53:53
-- サーバのバージョン： 5.7.24
-- PHP のバージョン: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `bookName` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `bookUrl` text COLLATE utf8_unicode_ci NOT NULL,
  `bookComment` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `bookName`, `bookUrl`, `bookComment`, `date`) VALUES
(7, 'DXの思考法 日本経済復活への最強戦略', 'https://www.amazon.co.jp/gp/product/4163913599/ref=ppx_yo_dt_b_asin_title_o08_s00?ie=UTF8&psc=1', '会社、産業、社会、そして国家、個人までが\r\nDX(デジタル・トランスフォーメーション)の「対象」かつ「主体」となる時代が到来。\r\n\r\n天才ビジョナリーが描く「DX成功の極意」とは。「ミルフィーユ化する未来」とは。', '2022-01-17 10:00:18'),
(8, 'SXの時代~究極の生き残り戦略としてのサステナビリティ経営', 'https://www.amazon.co.jp/gp/product/4296000209/ref=ppx_yo_dt_b_asin_title_o08_s00?ie=UTF8&psc=1', '本書『SXの時代』は、読者の方々を、こうした「ムダなサステナビリティ・SDGs合戦」から解放すべく、著者であるPwC Japanグループの敏腕コンサルタントが、読者のみなさんを「本当のサステナビリティ経営」へといざないます。サステナビリティ経営の基本から、利益を出すための要諦、KPIを設定したマネジメント方法まで、数多くの事例とともにわかりやすく解説しました。', '2022-01-17 10:02:03'),
(9, 'Pythonエンジニア育成推進協会監修 Python 3スキルアップ教科書', 'https://www.amazon.co.jp/gp/product/4297107562/ref=ppx_yo_dt_b_asin_title_o00_s00?ie=UTF8&psc=1', '本書は、Pythonエンジニアとしてのスキルアップを目指す人のための、Python 3の本格的な学習書として執筆されました', '2022-01-26 20:32:30');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
