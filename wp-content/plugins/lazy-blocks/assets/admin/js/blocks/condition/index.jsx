import Select from '../../components/select';

const { __ } = wp.i18n;
const { Component } = wp.element;
const {
    BaseControl,
} = wp.components;

const { apiFetch } = wp;

export default class ConditionSettings extends Component {
    constructor() {
        super( ...arguments );

        this.state = {
            postTypes: false,
        };
    }

    componentDidMount() {
        apiFetch( {
            path: '/lazy-blocks/v1/get-post-types/?args[show_ui]=1&output=object',
        } ).then( ( resp ) => {
            if ( resp && resp.response ) {
                const result = {};
                Object.keys( resp.response ).forEach( ( name ) => {
                    const post = resp.response[ name ];
                    if ( 'lazyblocks' !== post.name && 'lazyblocks_templates' !== post.name && 'attachment' !== post.name ) {
                        result[ post.name ] = post.label;
                    }
                } );

                this.setState( {
                    postTypes: result,
                } );
            }
        } );
    }

    render() {
        const {
            data,
            updateData,
        } = this.props;

        const {
            condition_post_types: conditionPostTypes,
        } = data;

        return (
            this.state.postTypes ? (
                <div className="lzb-constructor-grid">
                    <div>
                        <BaseControl
                            label={ __( 'Show in posts' ) }
                        >
                            <Select
                                isMulti
                                placeholder={ __( 'In all posts by default' ) }
                                options={
                                    Object.keys( this.state.postTypes ).map( ( type ) => {
                                        return {
                                            value: type,
                                            label: this.state.postTypes[ type ],
                                        };
                                    } )
                                }
                                value={ ( () => {
                                    if ( conditionPostTypes && conditionPostTypes.length ) {
                                        const result = conditionPostTypes.map( ( val ) => {
                                            return {
                                                value: val,
                                                label: this.state.postTypes[ val ] || val,
                                            };
                                        } );
                                        return result;
                                    }
                                    return [];
                                } )() }
                                onChange={ ( value ) => {
                                    const result = [];

                                    value.forEach( ( optionData ) => {
                                        result.push( optionData.value );
                                    } );

                                    updateData( { condition_post_types: result } );
                                } }
                            />
                        </BaseControl>
                    </div>
                    <div>
                    </div>
                </div>
            ) : __( 'Loading...' )
        );
    }
}
