import slugify from 'slugify';

const { __ } = wp.i18n;
const { Component } = wp.element;
const {
    TextControl,
} = wp.components;

export default class LabelRow extends Component {
    constructor() {
        super( ...arguments );

        this.generateUniqueName = this.generateUniqueName.bind( this );
    }

    generateUniqueName() {
        const {
            updateData,
            data,
        } = this.props;

        const {
            label = '',
            name = '',
        } = data;

        if ( ! label || name ) {
            return;
        }

        updateData( {
            name: slugify( label, {
                replacement: '_',
                lower: true,
            } ),
        } );
    }

    render() {
        const {
            updateData,
            data,
        } = this.props;

        const {
            label = '',
        } = data;

        return (
            <div className="lzb-constructor-controls-item-settings-row">
                <div className="lzb-constructor-controls-item-settings-row-label">
                    <span>{ __( 'Label' ) }</span>
                    <small>{ __( 'This is the name which will appear on the block edit control' ) }</small>
                </div>
                <div className="lzb-constructor-controls-item-settings-row-control">
                    <TextControl
                        value={ label }
                        onChange={ ( value ) => updateData( { label: value } ) }
                        onBlur={ this.generateUniqueName }
                    />
                </div>
            </div>
        );
    }
}
