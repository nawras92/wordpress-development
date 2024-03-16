import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import BlockSidebar from './components/BlockSidebar';

import './editor.scss';

export default function Edit(props) {
	const { attributes, setAttributes } = props;
	const blockProps = useBlockProps();
	const isTextUnderlined = attributes.isTextUnderlined ? 'underline' : 'none';
	const aClasses = `text-decoration-${isTextUnderlined} `;
	console.log(attributes.resourceRadius + 'px');
	return (
		<>
			<BlockSidebar attributes={attributes} setAttributes={setAttributes} />
			<div
				{...blockProps}
				style={{
					borderRadius: attributes.resourceRadius + 'px',
					padding: attributes.resourcePadding + 'px',
				}}
			>
				<a className={aClasses} href={attributes.resourceUrl}>
					{attributes.resourceTitle}
				</a>
			</div>
		</>
	);
}
