<?php

/* Register Block Styles */
add_action('init', 'lwn_photographer_regster_block_styles_callback');
function lwn_photographer_regster_block_styles_callback()
{
  register_block_style('core/button', [
    'name' => 'lwn-photographer-button',
    'label' => 'Theme Button',
    'inline_style' => '
			 .wp-block-button.is-style-lwn-photographer-button > .wp-block-button__link{
          transition: all 0.3s ease-in;
			}
			 .wp-block-button.is-style-lwn-photographer-button > .wp-block-button__link:hover{
					background: transparent !important;
          color: var(--wp--preset--color--contrast) !important;
          border: 1px solid  var(--wp--preset--color--contrast);

			}
		',
  ]);
  register_block_style('core/heading', [
    'name' => 'lwn-photographer-heading',
    'label' => 'Theme heading',
    'inline_style' => '
			 .wp-block-heading.is-style-lwn-photographer-heading::before {
          content: "";
          background: var(--wp--preset--color--contrast) !important;
          width: 95px;
          height: 1px;
          display: inline-block;
			}
		',
  ]);
}
