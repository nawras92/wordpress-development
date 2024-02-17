import { useBlockProps } from '@wordpress/block-editor';
export default function save(props) {
	const { attributes } = props;
	return <p {...useBlockProps.save()}>{attributes.userText}</p>;
}
