<?php
/*Replace = progetti*/

function federicotoldo_custom_progetti()
{
    register_post_type(
        'progetti',
        array(
            'labels'                =>          array(
                'name'              =>          'Progetti',
                'singular_name'     =>          'Progetto',
                'all_items'         =>          'Tutti i progetti',
                'add_new'           =>          'Aggiungi un nuovo progetto',
                'add_new_item'      =>          'Aggiungi un nuovo progetto',
                'edit_item'         =>          'Modifica progetto',
                'new_item'          =>          'Nuovo progetto',
                'view_item'         =>          'Visualizza progetto',
                'search_items'      =>          'Cerca',
                'not_found'         =>          'Nessun elemento trovato',
                'not_found_in_trash' =>          'Nessun elemento nel cestino',
                'parent_item_colon' =>          '',
            ),
            'description'           =>          'Progetti',
            'public'                =>          true,
            'publicly_queryable'    =>          true,
            'exclude_from_search'   =>          false,
            'show_ui'               =>          true,
            'query_var'             =>          true,
            'menu_position'         =>          20,
            'menu_icon'             =>          'dashicons-media-document', //Dashicon
            'rewrite'               =>          array(
                'slug'              =>          'progetti',
                'with-front'        =>          false,
            ),
            'has_archive'           =>          true,
            'capability_type'       =>          'post',
            'hierarchycal'          =>          false,
            'taxonomies'            =>          array(''),
            'show_in_rest'          =>          false, //gutemberg disattivato
            'supports'              =>          array('title','thumbnail') //campi supportati
        ),
        flush_rewrite_rules() /*fine delle opzioni*/
    );
}
add_action('init', 'federicotoldo_custom_progetti');

//aggiunta categorie
function federicotoldo_progetti_taxonomies()
{
    register_taxonomy(
        'progetti_tax',
        'progetti',
        array(
            'labels' => array(
                'name' => 'Categorie',
                'add_new_item' => 'Aggiungi nuova categoria',
                'new_item_name' => "Nuova categoria"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true,
            'show_admin_column' => true,
            'show_in_rest' => true
        )
    );
}
add_action('init', 'federicotoldo_progetti_taxonomies', 0);
