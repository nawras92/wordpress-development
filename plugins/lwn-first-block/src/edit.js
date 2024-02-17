import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import { InspectorControls } from '@wordpress/block-editor';
import { Panel } from '@wordpress/components';
import { PanelBody } from '@wordpress/components';
import { TextControl } from '@wordpress/components';

import './editor.scss';

export default function Edit(props) {
	const { attributes, setAttributes } = props;
	const blockProps = useBlockProps();

	return (
		<>
			<InspectorControls>
				<Panel header="Manage your first block attributes">
					<PanelBody title="basic attributes" initialOpen={true}>
						<TextControl
							label="User Text Message"
							value={attributes.userText}
							onChange={(newValue) => setAttributes({ userText: newValue })}
						/>
					</PanelBody>
				</Panel>
			</InspectorControls>
			<div {...blockProps}>
				<p>{attributes.userText}</p>
			</div>
		</>
	);
}
