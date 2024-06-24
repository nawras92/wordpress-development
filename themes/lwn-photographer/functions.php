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
  register_block_style('core/image', [
    'name' => 'lwn-photographer-image',
    'label' => 'Theme Image',
    'inline_style' => '
			 .wp-block-image.is-style-lwn-photographer-image{
           transition: all 1s ease-in;
			}
			 .wp-block-image.is-style-lwn-photographer-image:hover{
           transform: scale(1.05)
			}
		',
  ]);
  register_block_style('core/column', [
    'name' => 'lwn-photographer-about-us-content-column',
    'label' => 'Theme Content Column',
    'inline_style' => '
			 .wp-block-column.is-style-lwn-photographer-about-us-content-column{
           transition: all 1s ease-in;
			}
      @media screen and (max-width: 786px){
			 .wp-block-column.is-style-lwn-photographer-about-us-content-column{
           margin-top:-100px;
           opacity: 0.95;
      }
    }
		',
  ]);
  register_block_style('core/group', [
    'name' => 'lwn-photographer-about-us-content',
    'label' => 'Theme Content',
    'inline_style' => '
			 .wp-block-group.is-style-lwn-photographer-about-us-content{
           transform: translate(90px, 70px);
           max-width: 95%;
			}
      @media screen and (max-width: 786px){
			 .wp-block-group.is-style-lwn-photographer-about-us-content{
           transform:none;
           max-width: 100%;
      }
    }
		',
  ]);
}
