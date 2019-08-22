<?php
    $type = get_post_meta( get_the_ID(), 'board_type', true);
    $price = get_post_meta( get_the_ID(), 'price', true);
?>

<div class="board">
        <div class="board__img-holder">
            <img class="board__img" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'board-slider')?>" alt="Surfing board">
        </div>
        <div class="board-desc">
            <div class="board__cat"><?=$type?></div>
            <div class="board__title"><?php the_title(); ?></div>
            <div class="board-buy">
                <div class="board-buy__price"><?=$price?></div>
                <div class="board-buy__link">Buy</div>
            </div>
        </div>
    </div>
