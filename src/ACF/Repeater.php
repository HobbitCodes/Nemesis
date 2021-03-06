<?php

namespace NanoSoup\Nemesis\ACF;

/**
 * Class Repeater
 * @package NanoSoup\Nemesis\ACF
 */
class Repeater extends BaseFields
{
    /**
     * Repeater init
     *
     * @param $args
     * @return array
     */
    public function init($args)
    {
        $defaults = [
            'button_label' => '',
            'label' => '',
            'prefix' => 'ss_acf',
            'min' => '',
            'max' => '',
        ];

        $settings = array_merge($defaults, $args['settings']);

        return [
            'key' => $this->generateUniquePrefix($settings['prefix'], $settings['label']) . 'field_repeater',
            'label' => $settings['label'],
            'name' => $this->generateName($settings['label']),
            'type' => 'repeater',
            'sub_fields' => $args['elements'],
            'button_label' => $settings['button_label'],
            'min' => $settings['min'],
            'max' => $settings['max'],
            'layout' => 'block',
            'collapsed' => 'true',
        ];
    }
}
