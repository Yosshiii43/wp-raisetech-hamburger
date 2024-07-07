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
                    <h2 class="p-access__caption__ttl c-title">見出しが入ります</h2>
                    <div class="p-access__caption__horizon c-horizon"></div>
                    <p class="p-access__caption__txt c-lineHeightWide c-text-smal">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入りま</p>
                    </div>
                </article>
                <div class="p-access__base"></div>
        </div>
    </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>