<?php get_header(); ?>
    <main class="l-main">
        <div class="p-wrapper p-wrapper--front">
            <div class="p-salesFormat__wrap">
                <article class="p-salesFormat">
                    <a href="<?php echo esc_url(home_url('/')); ?>category/takeout/">
                        <div class="p-salesFormat__ttl">
                            <h2 class="c-title">Take Out</h2>
                            <div class="c-horizon"></div>
                        </div>
                        <?php if( function_exists('get_field') ): // ACFが有効な場合
                        ?>
                            <?php
                            // Take Outグループフィールドのデータを取得
                            $takeOut_group = get_field('takeOut-group');
                            if( $takeOut_group ): //Take Outグループに値がある時
                            ?>
                                <div class="p-salesFormat__content">
                                    <?php if( !empty($takeOut_group['takeOut1']) ): //Take Outアイテム1が空でない場合
                                        ?>
                                        <dl class="p-salesItem">
                                            <dt class="p-salesItem__ttl c-title c-font-mplus">
                                                <?php
                                                $takeOut1_ttl = $takeOut_group['takeOut1']['takeOut1-ttl']; //Take Out1の見出しを変数に代入
                                                echo !empty($takeOut1_ttl) ? esc_html($takeOut1_ttl) : '見出しが未入力です'; //Take Outアイテム1の見出しが空でなければその値を出力し、空の時は「見出しが未入力です」と出力
                                                ?>
                                            </dt>
                                            <dd class="p-salesItem__txt c-text">
                                                <?php
                                                $takeOut1_txt = $takeOut_group['takeOut1']['takeOut1-txt']; //Take Out1のテキストを変数に代入
                                                echo !empty($takeOut1_txt) ? esc_html($takeOut1_txt) : 'テキストが未入力です'; //Take Outアイテム1のテキストが空でなければその値を出力し、空の時は「テキストが未入力です」と出力
                                                ?>
                                            </dd>
                                        </dl>
                                    <?php else: //Take Outアイテム1が空の場合
                                        ?>
                                        <?php get_template_part('template-parts/salesItemTakeOut1','salesItemTakeOut1') ?>
                                    <?php endif; ?>
                                    <?php if( !empty($takeOut_group['takeOut2']) ): ?>
                                        <dl class="p-salesItem">
                                            <dt class="p-salesItem__ttl c-title c-font-mplus">
                                                <?php
                                                $takeOut2_ttl = $takeOut_group['takeOut2']['takeOut2-ttl']; //Take Out2の見出しを変数に代入
                                                echo !empty($takeOut2_ttl) ? esc_html($takeOut2_ttl) : '見出しが未入力です';//Take Outアイテム2の見出しが空でなければその値を出力し、空の時は「見出しが未入力です」と出力
                                                ?>
                                            </dt>
                                            <dd class="p-salesItem__txt c-text">
                                                <?php
                                                $takeOut2_txt = $takeOut_group['takeOut2']['takeOut2-txt'];//Take Out2のテキストを変数に代入
                                                echo !empty($takeOut2_txt) ? esc_html($takeOut2_txt) : 'テキストが未入力です';//Take Outアイテム2のテキストが空でなければその値を出力し、空の時は「テキストが未入力です」と出力
                                                ?>
                                            </dd>
                                        </dl>
                                    <?php else: //Take Outアイテム2が空の場合
                                        ?>
                                        <?php get_template_part('template-parts/salesItemTakeOut2','salesItemTakeOut2') ?>
                                    <?php endif; ?>
                                </div>
                            <?php else: //Take Outグループに値がない時
                            ?>
                                <div class="p-salesFormat__content">
                                    <?php get_template_part('template-parts/salesItemTakeOut1','salesItemTakeOut1') ?>
                                    <?php get_template_part('template-parts/salesItemTakeOut2','salesItemTakeOut2') ?>
                                </div>
                            <?php endif; //Take Outグループ終わり
                            ?>
                        <?php else: //ACFが無効または削除された場合
                        ?>
                            <div class="p-salesFormat__content">
                                <?php get_template_part('template-parts/salesItemTakeOut1','salesItemTakeOut1') ?>
                                <?php get_template_part('template-parts/salesItemTakeOut2','salesItemTakeOut2') ?>
                            </div>
                        <?php endif; //ACF終わり
                        ?>
                    </a>
                </article>
                <article class="p-salesFormat">
                    <a href="<?php echo esc_url(home_url('/')); ?>category/eatin/">
                        <div class="p-salesFormat__ttl">
                            <h2 class="c-title ">Eat In</h2>
                            <div class="c-horizon"></div>
                        </div>
                        <?php if (function_exists('get_field')): // ACFが有効の場合
                        ?>
                            <?php
                            // Eat Inグループフィールドのデータを取得
                            $eatIn_group = get_field('eatIn-group');
                            if( $eatIn_group ): //Eat Inグループに値がある時
                            ?>
                                <div class="p-salesFormat__content">
                                    <?php if( !empty($eatIn_group['eatIn1']) ): //Eat Inアイテム1が空でない場合
                                        ?>
                                        <dl class="p-salesItem">
                                            <dt class="p-salesItem__ttl c-title c-font-mplus">
                                                <?php
                                                $eatIn1_ttl = $eatIn_group['eatIn1']['eatIn1-ttl']; //Eat In1の見出しを変数に代入
                                                echo !empty($eatIn1_ttl) ? esc_html($eatIn1_ttl) : '見出しが未入力です';//Eat Inアイテム1の見出しが空でなければその値を出力し、空の時は「見出しが未入力です」と出力
                                                ?>
                                            </dt>
                                            <dd class="p-salesItem__txt c-text">
                                                <?php
                                                $eatIn1_txt = $eatIn_group['eatIn1']['eatIn1-txt']; //Eat In1のテキストを変数に代入
                                                echo !empty($eatIn1_txt) ? esc_html($eatIn1_txt) : 'テキストが未入力です';//Eat Inアイテム1のテキストが空でなければその値を出力し、空の時は「テキストが未入力です」と出力
                                                ?>
                                            </dd>
                                        </dl>
                                    <?php else: //Eat Inアイテム1が空の場合
                                        ?>
                                        <?php get_template_part('template-parts/salesItemEatIn1','salesItemEatIn1') ?>
                                    <?php endif; ?>
                                    <?php if( !empty($eatIn_group['eatIn2']) ): ?>
                                        <dl class="p-salesItem">
                                            <dt class="p-salesItem__ttl c-title c-font-mplus">
                                                <?php
                                                $eatIn2_ttl = $eatIn_group['eatIn2']['eatIn2-ttl']; //Eat In2の見出しを変数に代入
                                                echo !empty($eatIn2_ttl) ? esc_html($eatIn2_ttl) : '見出しが未入力です';//Eat Inアイテム2の見出しが空でなければその値を出力し、空の時は「見出しが未入力です」と出力
                                                ?>
                                            </dt>
                                            <dd class="p-salesItem__txt c-text">
                                                <?php
                                                $eatIn2_txt = $eatIn_group['eatIn2']['eatIn2-txt']; //Eat In2の見出しを変数に代入
                                                echo !empty($eatIn2_txt) ? esc_html($eatIn2_txt) : 'テキストが未入力です';//Eat Inアイテム2の見出しが空でなければその値を出力し、空の時は「見出しが未入力です」と出力
                                                ?>
                                            </dd>
                                        </dl>
                                    <?php else: //Eat Inアイテム2が空の場合
                                        ?>
                                        <?php get_template_part('template-parts/salesItemEatIn2','salesItemEatIn2') ?>
                                    <?php endif; ?>
                                </div>
                                <?php else: //Eat Inグループに値がない時
                                    ?>
                                    <div class="p-salesFormat__content">
                                        <?php get_template_part('template-parts/salesItemEatIn1','salesItemEatIn1') ?>
                                        <?php get_template_part('template-parts/salesItemEatIn2','salesItemEatIn2') ?>
                                    </div>
                                <?php endif; //Eat Inグループ終わり
                                ?>
                        <?php else: //ACFが無効または存在しない場合
                        ?>
                            <div class="p-salesFormat__content">
                                <?php get_template_part('template-parts/salesItemEatIn1','salesItemEatIn1') ?>
                                <?php get_template_part('template-parts/salesItemEatIn2','salesItemEatIn2') ?>
                            </div>
                        <?php endif; //ACF終わり
                        ?>
                    </a>
                </article>
            </div>
        </div>
        <div class="p-access">
            <article class="p-access__caption">
                <div>
                <?php if (function_exists('get_field')): // ACFが有効の場合
                ?>
                    <?php
                        $access_group = get_field('access_group');//アクセスグループの中身を配列として変数に代入
                    ?>
                    <?php if($access_group): //アクセスグループに値があった場合
                    ?>
                    <?php
                        $access_ttl = $access_group['access_ttl'];//$access_groupからアクセス見出しを取り出して変数に代入
                        $access_txt= $access_group['access_txt'];//$access_groupからアクセス本文を取り出して変数に代入
                    ?>
                    <h2 class="p-access__caption__ttl c-title">
                        <?php echo !empty($access_ttl) ? esc_html($access_ttl) : '見出しが未入力です'; //アクセス見出しに値があればそれを表示し、なければ「見出しが未入力です」と表示
                        ?>
                    </h2>
                    <div class="p-access__caption__horizon c-horizon"></div>
                    <p class="p-access__caption__txt c-lineHeightWide c-text-smal">
                        <?php echo !empty($access_txt) ? esc_html($access_txt) : 'テキストが未入力です'; //アクセス本文に値があればそれを表示し、なければ「テキストが未入力です」と表示
                        ?>
                    </p>
                    <?php else: //アクセスグループに値が無かった場合
                        ?>
                    <?php get_template_part('template-parts/access','access') ?>
                    <?php endif; //アクセスグループ終わり
                    ?>
                <?php else: //ACFが無効または存在しない場合
                    ?>
                    <?php get_template_part('template-parts/access','access') ?>
                <?php endif; //ACFの条件分岐終わり
                ?>
                </div>
            </article>
            <div class="p-access__base"></div>
            <iframe class="p-access__map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.747798841982!2d139.74285797638572!3d35.658584831216686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1720370637413!5m2!1sja!2sjp"
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div><!-- p-wrapper p-wrapper-front -->
    </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>