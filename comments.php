<?php
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}

$comment_count = get_comments_number();
?>

<div id="comments" class="comments-area default-max-width <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">

    <?php
    if ( have_comments() ) :
        ;
        ?>
        <h2 class="comments-title">
            <?php if ( '1' === $comment_count ) : ?>
                <?php esc_html_e( '1 comment', 'wp-developer-theme' ); ?>
            <?php else : ?>
                <?php
                printf(
                /* translators: %s: Comment count number. */
                    esc_html( _nx( '%s comment', '%s comments', $comment_count, 'Comments title', 'wp-developer-theme' ) ),
                    esc_html( number_format_i18n( $comment_count ) )
                );
                ?>
            <?php endif; ?>
        </h2><!-- .comments-title -->

        <ol class="comment-list">
            <?php
            wp_list_comments(
                array(
                    'avatar_size' => 60,
                    'style'       => 'ol',
                    'short_ping'  => true,
                )
            );
            ?>
        </ol><!-- .comment-list -->

        <?php
        the_comments_pagination(
            array(
                'before_page_number' => esc_html__( 'Page', 'wp-developer-theme' ) . ' ',
                'mid_size'           => 0,
                'prev_text'          => sprintf(
                    '%s <span class="nav-prev-text">%s</span>',
                    esc_html__( 'Older comments', 'wp-developer-theme' )
                ),
                'next_text'          => sprintf(
                    '<span class="nav-next-text">%s</span> %s',
                    esc_html__( 'Newer comments', 'wp-developer-theme' )
                ),
            )
        );
        ?>

        <?php if ( ! comments_open() ) : ?>
        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'wp-developer-theme' ); ?></p>
    <?php endif; ?>
    <?php endif; ?>

    <?php
    comment_form(
        array(
            'logged_in_as'       => null,
            'title_reply'        => esc_html__( 'Compartilhe seu comentário com a gente!', 'wp-developer-theme' ),
            'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
            'title_reply_after'  => '</h2>',
        )
    );
    ?>

</div><!-- #comments -->
