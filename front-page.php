<?php get_header(); ?>
    <main class="l-main">
        <div class="p-wrapper p-wrapper--front">
            <article class="p-salesFormat__wrap">
                <article class="p-salesFormat">
                    <a href="#">
                        <div class="p-salesFormat__ttl">
                            <h2 class="c-title">Take Out</h2>
                            <div class="c-horizon"></div>
                        </div>
            <?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' );//プラグインの状態を取得
            ?>
            <?php if(is_plugin_active('advanced-custom-fields/acf.php')) : //wp-pagenaviプラグインが有効の場合
                ?>
                <?php
                    // Take Outグループフィールドのデータを取得
                    $takeOut_group = get_field('takeOut-group');
                    if( $takeOut_group ): ?>
                        <div class="p-salesFormat__content">
                            <?php if( !empty($takeOut_group['takeOut1']) ): ?>
                                <dl class="p-salesItem">
                                    <dt class="p-salesItem__ttl c-title c-font-mplus">
                                        <?php
                                        $takeOut1_ttl = $takeOut_group['takeOut1']['takeOut1-ttl'];
                                        echo !empty($takeOut1_ttl) ? esc_html($takeOut1_ttl) : 'テキストが未入力です';
                                        ?>
                                    </dt>
                                    <dd class="p-salesItem__txt c-text">
                                        <?php
                                        $takeOut1_txt = $takeOut_group['takeOut1']['takeOut1-txt'];
                                        echo !empty($takeOut1_txt) ? esc_html($takeOut1_txt) : 'テキストが未入力です';
                                        ?>
                                    </dd>
                                </dl>
                            <?php endif; ?>
                    
                            <?php if( !empty($takeOut_group['takeOut2']) ): ?>
                                <dl class="p-salesItem">
                                    <dt class="p-salesItem__ttl c-title c-font-mplus">
                                        <?php
                                        $takeOut2_ttl = $takeOut_group['takeOut2']['takeOut2-ttl'];
                                        echo !empty($takeOut2_ttl) ? esc_html($takeOut2_ttl) : 'テキストが未入力です';
                                        ?>
                                    </dt>
                                    <dd class="p-salesItem__txt c-text">
                                        <?php
                                        $takeOut2_txt = $takeOut_group['takeOut2']['takeOut2-txt'];
                                        echo !empty($takeOut2_txt) ? esc_html($takeOut2_txt) : 'テキストが未入力です';
                                        ?>
                                    </dd>
                                </dl>
                            <?php endif; ?>
                        </div>
                <?php endif; ?>
                <?php else: ?>
                    <div class="p-salesFormat__content">
                        <dl class="p-salesItem">
                            <dt class="p-salesItem__ttl c-title c-font-mplus">Take Out</dt>
                            <dd class="p-salesItem__txt c-text">当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています</dd>
                        </dl>
                        <dl class="p-salesItem">
                            <dt class="p-salesItem__ttl c-title c-font-mplus">Take Out</dt>
                            <dd class="p-salesItem__txt c-text">当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています</dd>
                        </dl>
                    </div>
                <?php endif; ?>
                    </a>
                </article>
                <article class="p-salesFormat">
                    <a href="#">
                        <div class="p-salesFormat__ttl">
                            <h2 class="c-title ">Eat In</h2>
                            <div class="c-horizon"></div>
                        </div>
                        <?php if(is_plugin_active('advanced-custom-fields/acf.php')) : //wp-pagenaviプラグインが有効の場合
                ?>
                <?php
                    // Eat Inグループフィールドのデータを取得
                    $eatIn_group = get_field('eatIn-group');
                    if( $eatIn_group ): ?>
                        <div class="p-salesFormat__content">
                            <?php if( !empty($eatIn_group['eatIn1']) ): ?>
                                <dl class="p-salesItem">
                                    <dt class="p-salesItem__ttl c-title c-font-mplus">
                                        <?php
                                        $eatIn1_ttl = $eatIn_group['eatIn1']['eatIn1-ttl'];
                                        echo !empty($eatIn1_ttl) ? esc_html($eatIn1_ttl) : 'タイトルが未入力です';
                                        ?>
                                    </dt>
                                    <dd class="p-salesItem__txt c-text">
                                        <?php
                                        $eatIn1_txt = $eatIn_group['eatIn1']['eatIn1-txt'];
                                        echo !empty($eatIn1_txt) ? esc_html($eatIn1_txt) : 'テキストが未入力です';
                                        ?>
                                    </dd>
                                </dl>
                            <?php endif; ?>
                            <?php if( !empty($eatIn_group['eatIn2']) ): ?>
                                <dl class="p-salesItem">
                                    <dt class="p-salesItem__ttl c-title c-font-mplus">
                                        <?php
                                        $eatIn2_ttl = $eatIn_group['eatIn2']['eatIn2-ttl'];
                                        echo !empty($eatIn2_ttl) ? esc_html($eatIn2_ttl) : 'タイトルが未入力です';
                                        ?>
                                    </dt>
                                    <dd class="p-salesItem__txt c-text">
                                        <?php
                                        $eatIn2_txt = $eatIn_group['eatIn2']['eatIn2-txt'];
                                        echo !empty($eatIn2_txt) ? esc_html($eatIn2_txt) : 'テキストが未入力です';
                                        ?>
                                    </dd>
                                </dl>
                            <?php endif; ?>
                        </div>
                <?php endif; ?>
                <?php else: ?>
                        <div class="p-salesFormat__content">
                            <dl class="p-salesItem">
                                <dt class="p-salesItem__ttl c-title c-font-mplus">Eat In</dt>
                                <dd class="p-salesItem__txt c-text">店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです</dd>
                            </dl>
                            <dl class="p-salesItem">
                                <dt class="p-salesItem__ttl c-title c-font-mplus">Eat In</dt>
                                <dd class="p-salesItem__txt c-text">店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです</dd>
                            </dl>
                        </div>
                    <?php endif; ?>
                    </a>
                </article>
            </article>
        </div>


            <div class="p-access">
                <article class="p-access__caption">
                    <div>
                    <?php
                    if (function_exists('get_field')): // ACFが使えるかどうかチェック
                    ?>
                    <?php
                        // ACFが有効な場合
                        $access_group = get_field('access_group');//アクセスグループの中身を配列として変数に代入
                        $access_ttl = $access_group['access_ttl'];//$access_groupからアクセス見出しを取り出して変数に代入
                        $access_txt= $access_group['access_txt'];//$access_groupからアクセス本文を取り出して変数に代入
                    ?>
                    <?php if ($access_ttl || $access_txt): //アクセス見出しかアクセス本文があった場合
                        ?>
                        <?php if ($access_ttl): //アクセス見出しはじまり
                            ?>
                            <h2 class="p-access__caption__ttl c-title"><?php echo esc_html($access_ttl); ?></h2>
                        <?php else: ?>
                            <h2 class="p-access__caption__ttl c-title">front-page.phpに書いた見出しが入ります1</h2>
                        <?php endif; //アクセス見出し終わり
                        ?>
                        <div class="p-access__caption__horizon c-horizon"></div>
                        <?php if ($access_txt): //アクセス本文はじまり
                            ?>
                            <p class="p-access__caption__txt c-lineHeightWide c-text-smal"><?php echo esc_html($access_txt); ?></p>
                        <?php else: ?>
                            <p class="p-access__caption__txt c-lineHeightWide c-text-smal">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入りま</p>
                        <?php endif; //アクセス本文終わり
                        ?>
                    <?php else: //アクセス見出しもアクセス本文も無かった場合
                        ?>
                        <h2 class="p-access__caption__ttl c-title">front-page.phpに書いた見出しが入ります2</h2>
                        <p class="p-access__caption__txt c-lineHeightWide c-text-smal">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入りま</p>
                    <?php endif; //アクセス見出しアクセス本文終わり
                    ?>
                    <?php else: //ACFが無効または存在しない場合
                        ?>
                        <h2 class="p-access__caption__ttl c-title">front-page.phpに書いた見出しが入ります3</h2>
                        <p class="p-access__caption__txt c-lineHeightWide c-text-smal">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入りま</p>
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
            </div>
    </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>