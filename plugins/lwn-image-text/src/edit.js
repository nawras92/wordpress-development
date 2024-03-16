import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import { MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { BlockControls } from '@wordpress/block-editor';
import { Toolbar, ToolbarButton, ToolbarGroup } from '@wordpress/components';
import { RichText } from '@wordpress/block-editor';
import { SelectControl } from '@wordpress/components';
import { edit, trash } from '@wordpress/icons';
import './editor.scss';
import { DropdownMenu } from '@wordpress/components';
import { paragraph } from '@wordpress/icons';

export default function Edit({ attributes, setAttributes }) {
	const blockProps = useBlockProps();
	const ALLOWED_MEDIA_TYPES = ['image'];
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
				<ToolbarGroup>
					{attributes?.image && (
						<ToolbarButton
							onClick={() => setAttributes({ image: '' })}
							icon={trash}
						/>
					)}

					<MediaUploadCheck>
						<MediaUpload
							onSelect={(media) => setAttributes({ image: media })}
							allowedTypes={ALLOWED_MEDIA_TYPES}
							value={attributes?.image?.id || 0}
							render={({ open }) => (
								<ToolbarButton onClick={open} icon={edit} />
							)}
						/>
					</MediaUploadCheck>
				</ToolbarGroup>
			</BlockControls>
			<div {...blockProps}>
				{attributes?.image && (
					<img src={attributes.image.url} alt={attributes.image.alt} />
				)}
				<RichText
					tagName={attributes.tagName}
					value={attributes.content}
					onChange={(content) => setAttributes({ content })}
				/>
			</div>
		</>
	);
}
