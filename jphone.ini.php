<?php
/////////////////////////////////////////////////
// PukiWiki - Yet another WikiWikiWeb clone.
//
// $Id: jphone.ini.php,v 1.4 2003/03/07 08:03:51 panda Exp $
//
// PukiWiki setting file (user agent:J-PHONE)

/////////////////////////////////////////////////
// スキンファイルの場所
define('SKIN_FILE','./skin/keitai.skin.'.LANG.'.php');

/////////////////////////////////////////////////
// 雛形とするページの読み込みを表示させる
$load_template_func = 0;

/////////////////////////////////////////////////
// 検索文字列を色分けする
$search_word_color = 0;

/////////////////////////////////////////////////
// 一覧ページに頭文字インデックスをつける
$list_index = 0;

/////////////////////////////////////////////////
// リスト構造の左マージン
$_ul_left_margin = 0;   // リストと画面左端との間隔(px)
$_ul_margin = 16;       // リストの階層間の間隔(px)
$_ol_left_margin = 0;   // リストと画面左端との間隔(px)
$_ol_margin = 16;       // リストの階層間の間隔(px)
$_dl_left_margin = 0;   // リストと画面左端との間隔(px)
$_dl_margin = 16;        // リストの階層間の間隔(px)
$_list_pad_str = '';

/////////////////////////////////////////////////
// テキストエリアのカラム数
$cols = 24;

/////////////////////////////////////////////////
// テキストエリアの行数
$rows = 20;

/////////////////////////////////////////////////
// 大・小見出しから目次へ戻るリンクの文字
$top = '';

/////////////////////////////////////////////////
// 関連ページ表示のページ名の区切り文字
$related_str = "\n ";

/////////////////////////////////////////////////
// 整形ルールでの関連ページ表示のページ名の区切り文字
$rule_related_str = "</li>\n<li>";

/////////////////////////////////////////////////
// 水平線のタグ
$hr = '<hr>';

/////////////////////////////////////////////////
// 文末の注釈の直前に表示するタグ
$note_hr = '<hr>';

/////////////////////////////////////////////////
// 関連するリンクを常に表示する(負担がかかります)
$related_link = 0;

/////////////////////////////////////////////////
// WikiName,BracketNameに経過時間を付加する
$show_passage = 0;

/////////////////////////////////////////////////
// リンク表示をコンパクトにする
$link_compact = 1;

/////////////////////////////////////////////////
// フェイスマークを使用する
$usefacemark = 0;

/////////////////////////////////////////////////
// accesskey (SKINで使用)
$accesskey = 'accesskey';

/////////////////////////////////////////////////
// ユーザ定義ルール
//
//  正規表現で記述してください。?(){}-*./+\$^|など
//  は \? のようにクォートしてください。
//  前後に必ず / を含めてください。行頭指定は ^ を頭に。
//  行末指定は $ を後ろに。
///////////////////////////////////////////////////
// ユーザ定義ルール(コンバート時に置換)
$line_rules = array(
"COLOR\(([^\(\)]*)\){([^}]*)}" => '<font color="$1">$2</font>',
"SIZE\(([^\(\)]*)\){([^}]*)}" => '$2',
"COLOR\(([^\(\)]*)\):((?:(?!COLOR\([^\)]+\)\:).)*)" => '<font color="$1">$2</font>',
"SIZE\(([^\(\)]*)\):((?:(?!SIZE\([^\)]+\)\:).)*)" => '$2',
"%%%(?!%)((?:(?!%%%).)*)%%%" => '<ins>$1</ins>',
"%%(?!%)((?:(?!%%).)*)%%" => '<del>$1</del>',
"'''(?!')((?:(?!''').)*)'''" => '<em>$1</em>',
"''(?!')((?:(?!'').)*)''" => '<strong>$1</strong>',
'&amp;br;' => '<br>',
'&amp;(#[0-9]+|#x[0-9a-f]+|[0-9a-zA-Z]+);' => '&$1;',
"\r" => "<br>", /* 行末にチルダは改行 */
'#related' => '<del>#related</del>'
);

/////////////////////////////////////////////////
// max_size (SKINで使用)
$max_size = 6; //KByte
if (array_key_exists(1,$user_agent['matches']))
{
	$max_size = 12;
}

/////////////////////////////////////////////////
// $scriptを短縮
if (preg_match('#([^/]+)$#',$script,$matches)) {
	$script = $matches[1];
}

?>