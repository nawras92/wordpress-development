import { useBlockProps } from '@wordpress/block-editor';
export default function save(props) {
	const { attributes } = props;
	const blockProps = useBlockProps.save();
	return (
		<div {...blockProps}>
			<h1
				style={{
					color: attributes.headingColor,
					background: attributes.headingBackground,
				}}
			>
				Heading
			</h1>
			<p>{attributes.userText}</p>
		</div>
	);
}
