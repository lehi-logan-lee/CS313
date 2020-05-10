<?php get_header(); ?>
<!-- 検索されたクエリー（検索キーワード）と検索結果の件数を取得して変数に格納する -->
<?php
    global $wp_query;
    $total_results = $wp_query->found_posts;
    $search_query = get_search_query();
?>
<!-- 検索キーワードと検索結果件数を<h1>で括って表示する -->
<h1><?php echo $search_query; ?>の検索結果<span>（<?php echo $total_results; ?>件）</span></h1>
 
<?php
if( $total_results >0 ):
if(have_posts()):
while(have_posts()): the_post();
?>
<!-- 検索結果が0件でなければ投稿を表示させ、0件の場合にはメッセージを表示させる。
12行目の「if( $total_results >0 ):」で検索結果件数の判定をする -->
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_excerpt(); ?>
 
<?php endwhile; endif; else: ?>
 
<?php echo $search_query; ?> に一致する情報は見つかりませんでした。
 
<?php endif; ?>