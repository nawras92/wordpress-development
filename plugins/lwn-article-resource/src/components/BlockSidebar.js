import { __ } from '@wordpress/i18n';
import { InspectorControls } from '@wordpress/block-editor';
import { Panel } from '@wordpress/components';
import { PanelBody } from '@wordpress/components';
import { TextControl } from '@wordpress/components';
import { URLInput } from '@wordpress/block-editor';
import { ToggleControl } from '@wordpress/components';
import { RangeControl } from '@wordpress/components';

export default function BlockSidebar(props) {
	const { attributes, setAttributes } = props;
	return (
		<InspectorControls>
			<Panel
				header={__('Settings for Article Resource', 'lwn-article-resource')}
			>
				<PanelBody
					title={__('Basic Settings', 'lwn-article-resource')}
					initialOpen={true}
				>
					<TextControl
						label={__('Resource Title', 'lwn-article-resource')}
						value={attributes.resourceTitle}
						onChange={(newValue) => setAttributes({ resourceTitle: newValue })}
					/>
					<URLInput
						label={__('Resource URL', 'lwn-article-resource')}
						__nextHasNoMarginBottom
						value={attributes.resourceUrl}
						onChange={(newUrl) => setAttributes({ resourceUrl: newUrl })}
					/>
				</PanelBody>
				<PanelBody
					title={__('Style Settings', 'lwn-article-resource')}
					initialOpen={true}
				>
					<ToggleControl
						label={__('Underline Text', 'lwn-article-resource')}
						help={
							attributes.isTextUnderlined
								? __('Text Underline enabled', 'lwn-article-resource')
								: __('Text Underline NOT enabled', 'lwn-article-resource')
						}
						checked={attributes.isTextUnderlined}
						onChange={(newValue) => {
							setAttributes({ isTextUnderlined: newValue });
						}}
					/>
					<RangeControl
						label={__('Border Radius', 'lwn-article-resource')}
						value={attributes.resourceRadius}
						onChange={(value) => setAttributes({ resourceRadius: value })}
						min={5}
						max={100}
					/>
					<RangeControl
						label={__('Resource Padding', 'lwn-article-resource')}
						value={attributes.resourcePadding}
						onChange={(value) => setAttributes({ resourcePadding: value })}
						min={1}
						max={100}
					/>
				</PanelBody>
			</Panel>
		</InspectorControls>
	);
}
