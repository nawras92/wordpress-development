import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';

export default function save({ attributes }) {
	const blockProps = useBlockProps.save();
	return (
		<div
			{...blockProps}
			style={{
				borderRadius: attributes.resourceRadius + 'px',
				padding: attributes.resourcePadding + 'px',
			}}
		>
			<a
				style={{
					textDecoration: attributes.isTextUnderlined ? 'underline' : 'none',
				}}
				href={attributes.resourceUrl}
			>
				{' '}
				{attributes.resourceTitle}
			</a>
		</div>
	);
}
