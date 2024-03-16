import { useBlockProps } from '@wordpress/block-editor';
import { RichText } from '@wordpress/block-editor';

export default function save({ attributes }) {
	const blockProps = useBlockProps.save();
	return (
		<div {...blockProps}>
			{attributes?.image && (
				<img src={attributes.image.url} alt={attributes.image.alt} />
			)}
			<RichText.Content
				tagName={attributes.tagName}
				value={attributes.content}
			/>
		</div>
	);
}
