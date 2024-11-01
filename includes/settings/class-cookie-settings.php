<?php

namespace Smeechos\Simple_GDPR_Cookies\Includes\Settings;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Cookie_Settings extends Settings_Parent
{
    /**
     * Adds the array of fields to the content section of the plugin.
     */
    public function add_fields()
    {
        $fields = [
            [
                'id' => 'simple_gdpr_cookies_cookie_duration',
                'title' => 'Cookie Duration',
                'callback' => 'cookie_duration_display',
                'page' => $this->get_page_name(),
                'section' => $this->get_setting_id(),
                'args' => [
                    'option'        => 'cookie_duration',
                    'selects'       => [
                        'seconds'   => 'Seconds',
                        'minutes'   => 'Minutes',
                        'hours'     => 'Hours',
                        'days'      => 'Days',
                        'months'    => 'Months',
                        'years'     => 'Years'
                    ]
                ]
            ]
        ];

        foreach( $fields as $field ) {
            $this->add_field(
                $field['id'],
                $field['title'],
                $field['callback'],
                $field['page'],
                $field['section'],
                $field['args']
            );
        }
    }
}