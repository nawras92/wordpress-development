import { useBlockProps } from '@wordpress/block-editor';
import { RichText } from '@wordpress/block-editor';
import { InnerBlocks } from '@wordpress/block-editor';

export default function save({ attributes }) {
	const blockProps = useBlockProps.save();
	return (
		<div {...blockProps}>
			<RichText.Content
				tagName={attributes.tagName}
				value={attributes.content}
			/>
			<InnerBlocks.Content />
		</div>
	);
}
