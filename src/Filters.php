<?php
/**
 * Genesis BEM
 *
 * @package SeoThemes\GenesisBem
 */
namespace SeoThemes\GenesisBem;

/**
 * Filters
 *
 * @package SeoThemes\GenesisBem
 */
class Filters {

	/**
	 * @var
	 */
	protected $defaults;

	/**
	 * Set defaults and apply values.
	 *
	 * @since 0.1.0
	 *
	 * @return void
	 */
	public function init() {
		$this->defaults = apply_filters( 'genesis_bem_defaults', [
			'site-container'               => 'site',
			'gallery'                      => 'gallery',
			'gallery-item'                 => 'gallery__item',
			'gallery-icon'                 => 'gallery__icon',
			'site-header'                  => 'site-header',
			'site-header-wrap'             => 'site-header__wrap',
			'title-area'                   => 'site-header__branding',
			'site-title'                   => 'site-header__title',
			'site-description'             => 'site-header__description',
			'custom-logo-link'             => 'site-header__link',
			'custom-logo'                  => 'site-header__logo',
			'header-widget-area'           => 'site-header__widget-area',
			'nav-primary'                  => 'site-navigation--primary',
			'nav-secondary'                => 'site-navigation--secondary',
			'nav-header'                   => 'site-navigation--header',
			'nav-wrap'                     => 'site-navigation__wrap',
			'menu-toggle'                  => 'menu__toggle',
			'menu'                         => 'menu',
			'menu-item'                    => 'menu__item',
			'current-menu-item'            => 'menu__item--current',
			'menu-item-has-children'       => 'menu__item--has-children',
			'sub-menu'                     => 'menu__sub-menu',
			'site-inner'                   => 'site-content',
			'content-sidebar-wrap'         => 'site-content__wrap',
			'content'                      => 'site-main',
			'breadcrumb'                   => 'breadcrumb',
			'breadcrumb-link-wrap'         => 'breadcrumb__wrap',
			'breadcrumb-separator'         => 'breadcrumb__separator',
			'archive-description'          => 'archive-header',
			'taxonomy-archive-description' => 'archive-header--taxonomy',
			'author-archive-description'   => 'archive-header--author',
			'cpt-archive-description'      => 'archive-header--cpt',
			'date-archive-description'     => 'archive-header--date',
			'blog-archive-description'     => 'archive-header--blog',
			'posts-archive-description'    => 'archive-header--posts',
			'archive-title'                => 'archive-header__title',
			'archive-paragraph'            => 'archive-header__description',
			'author-box'                   => 'author-box',
			'author-box-title'             => 'author-box__title',
			'author-box-content'           => 'author-box__content',
			'pagination'                   => 'pagination',
			'archive-pagination'           => 'pagination--archive',
			'entry-pagination'             => 'pagination--entry',
			'adjacent-entry-pagination'    => 'pagination--adjacent',
			'pagination-active'            => 'pagination__link--active',
			'pagination-previous'          => 'pagination__link--previous',
			'pagination-next'              => 'pagination__link--next',
			'entry'                        => 'entry',
			'entry-header'                 => 'entry__header',
			'entry-title'                  => 'entry__title',
			'entry-title-link'             => 'entry__link',
			'entry-meta'                   => 'entry__meta',
			'entry-meta-before-content'    => 'entry__meta--before-content',
			'entry-meta-after-content'     => 'entry__meta--after-content',
			'entry-time'                   => 'entry__time',
			'entry-modified-time'          => 'entry__time--modified',
			'entry-author'                 => 'entry__author',
			'entry-author-link'            => 'entry__link',
			'entry-author-name'            => 'entry__name',
			'entry-comments-link'          => 'entry__link',
			'entry-content'                => 'entry__content',
			'entry-image'                  => 'entry__image',
			'entry-image-widget'           => 'entry__widget',
			'entry-image-grid-loop'        => 'entry__loop',
			'entry-footer'                 => 'entry__footer',
			'entry-categories'             => 'entry__categories',
			'entry-tags'                   => 'entry__tags',
			'entry-comments'               => 'comments',
			'comment-list'                 => 'comments__list',
			'comment'                      => 'comment',
			'avatar'                       => 'comment__avatar',
			'says'                         => 'comment__says',
			'comment-header'               => 'comment__header',
			'comment-author'               => 'comment__author',
			'comment-author-link'          => 'comment__link',
			'comment-meta'                 => 'comment__meta',
			'comment-time'                 => 'comment__time',
			'comment-time-link'            => 'comment__link',
			'comment-edit-link'            => 'comment__link',
			'comment-content'              => 'comment__content',
			'comment-reply'                => 'comment__reply',
			'comment-reply-link'           => 'comment__link',
			'comment-respond'              => 'comment__respond',
			'comment-reply-title'          => 'comment__title',
			'comment-form'                 => 'comment__form',
			'comment-notes'                => 'comment__notes',
			'comment-form-comment'         => 'comment__comment',
			'logged-in-as'                 => 'comment__logged-in-as',
			'form-submit'                  => 'comment__form-submit',
			'submit'                       => 'comment__submit',
			'sidebar'                      => 'site-sidebar',
			'sidebar-primary'              => 'site-sidebar--primary',
			'sidebar-secondary'            => 'site-sidebar--secondary',
			'widget'                       => 'widget',
			'widget-wrap'                  => 'widget__wrap',
			'widget-title'                 => 'widget__title',
			'site-footer'                  => 'site-footer',
			'site-footer-wrap'             => 'site-footer__wrap',
			'footer-credits'               => 'site-footer__credits',
			'footer-widgets'               => 'footer-widgets',
			'footer-widgets-wrap'          => 'footer-widgets__wrap',
			'footer-widget-area'           => 'footer-widgets__area',
		] );

		$this->apply( $this->defaults );
	}

	/**
	 * Applies classes to elements.
	 *
	 * @since 0.1.0
	 *
	 * @param array $elements Array of elements and classes.
	 *
	 * @return void
	 */
	protected function apply( $elements ) {
		foreach ( $elements as $context => $classes ) {
			add_filter( 'genesis_attr_' . $context, function ( $attr ) use ( $classes ) {
				$attr['class'] = $classes;

				return $attr;
			} );
		}
	}
}
