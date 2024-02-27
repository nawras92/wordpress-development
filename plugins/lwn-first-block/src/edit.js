import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import { InspectorControls } from '@wordpress/block-editor';
import { PanelColorSettings } from '@wordpress/block-editor';
import { Panel } from '@wordpress/components';
import { PanelBody } from '@wordpress/components';
import { TextControl } from '@wordpress/components';
import { ColorPalette } from '@wordpress/components';
import { ColorPicker } from '@wordpress/components';

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
					<PanelBody title="color attributes" initialOpen={true}>
						<PanelColorSettings
							title="Color Settings"
							initialOpen={true}
							colorSettings={[
								{
									label: 'Heading Color',
									value: attributes.color,
									onChange: (newValue) =>
										setAttributes({ headingColor: newValue }),
								},
								{
									label: 'Heading Background',
									value: attributes.headingBackground,
									onChange: (newValue) =>
										setAttributes({ headingBackground: newValue }),
								},
							]}
						/>
						{/* <p>Heading Color</p> */}
						{/* <ColorPicker */}
						{/* 	value={attributes.headingColor} */}
						{/* 	onChange={(newValue) => setAttributes({ headingColor: newValue })} */}
						{/* 	enableAlpha={true} */}
						{/* /> */}
						{/* <p>Heading Background</p> */}
						{/* <ColorPalette */}
						{/* 	value={attributes.headingBackground} */}
						{/* 	onChange={(newValue) => */}
						{/* 		setAttributes({ headingBackground: newValue }) */}
						{/* 	} */}
						{/* /> */}
					</PanelBody>
				</Panel>
			</InspectorControls>
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
		</>
	);
}
