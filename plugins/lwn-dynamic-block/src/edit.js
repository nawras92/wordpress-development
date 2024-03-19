import { __ } from '@wordpress/i18n';
import { RichText } from '@wordpress/block-editor';
import { useBlockProps } from '@wordpress/block-editor';
import { BlockControls } from '@wordpress/block-editor';
import { InnerBlocks } from '@wordpress/block-editor';
import { DropdownMenu } from '@wordpress/components';
import { paragraph } from '@wordpress/icons';
import './editor.scss';

export default function Edit({ attributes, setAttributes }) {
	const blockProps = useBlockProps();
	const allowedBlocks = ['core/list', 'core/paragraph'];
	const MY_TEMPLATE = [
		['core/image', {}],
		['core/heading', { placeholder: 'Book Title' }],
		['core/paragraph', { placeholder: 'Summary' }],
		['core/list', { placeholder: 'list' }],
	];

	const handleClick = (e, item) => {
		setAttributes({ tagName: item?.title || 'p' });
	};

	const tagControls = [
		{
			title: 'H1',
			onClick: (e) => handleClick(e, { title: 'H1' }),
		},
		{
			title: 'H2',
			onClick: (e) => handleClick(e, { title: 'H2' }),
		},
		{
			title: 'H3',
			onClick: (e) => handleClick(e, { title: 'H3' }),
		},
		{
			title: 'H4',
			onClick: (e) => handleClick(e, { title: 'H4' }),
		},
		{
			title: 'H5',
			onClick: (e) => handleClick(e, { title: 'H5' }),
		},
		{
			title: 'H6',
			onClick: (e) => handleClick(e, { title: 'H6' }),
		},
		{
			title: 'P',
			onClick: (e) => handleClick(e, { title: 'P' }),
		},
	];

	return (
		<>
			<BlockControls>
				<DropdownMenu
					icon={paragraph}
					label={__('Select tag', 'lwn-image-text')}
					controls={tagControls}
				/>
			</BlockControls>
			<div {...blockProps}>
				<RichText
					tagName={attributes.tagName}
					value={attributes.content}
					onChange={(content) => setAttributes({ content })}
				/>
				<InnerBlocks
					allowedBlocks={allowedBlocks}
					template={MY_TEMPLATE}
					templateLock="all"
				/>
			</div>
		</>
	);
}
