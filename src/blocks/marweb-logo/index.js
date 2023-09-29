import { registerBlockType } from '@wordpress/blocks';
import block from './block.json';
import Edit from './Edit';


registerBlockType(block.name, {
    edit() {
        return <Edit />
    },
    save() {
        return <Save />
    }
})