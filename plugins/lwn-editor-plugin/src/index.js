import { PluginSidebar } from '@wordpress/edit-post';
import { registerPlugin } from '@wordpress/plugins';
import { cog } from '@wordpress/icons';
import { Panel } from '@wordpress/components';
import { PanelBody } from '@wordpress/components';
import { useEntityProp } from '@wordpress/core-data';
import { TextControl } from '@wordpress/components';
import { RangeControl } from '@wordpress/components';

const lwnTestPluginRender = () => {
	const [meta, setMeta] = useEntityProp('postType', 'post', 'meta');
	console.log(meta);
	return (
		<PluginSidebar name="lwn-test" title="LWN Test Title">
			<Panel title="Settings">
				<PanelBody title="Setting 1" initialOpen={true}>
					<TextControl
						label="Meta 1"
						value={meta['lwn-post-meta-1']}
						onChange={(val) => setMeta({ ...meta, ['lwn-post-meta-1']: val })}
					></TextControl>
				</PanelBody>
				<PanelBody title="Setting 2" initialOpen={false}>
					<RangeControl
						label="Meta 2"
						value={meta['lwn-post-meta-2']}
						onChange={(val) => setMeta({ ...meta, ['lwn-post-meta-2']: val })}
						min={0}
						max={50}
					></RangeControl>
				</PanelBody>
			</Panel>
		</PluginSidebar>
	);
};
registerPlugin('lwn-test-plugin', {
	icon: cog,
	render: lwnTestPluginRender,
});
