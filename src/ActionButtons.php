<?php

namespace Lukasilestam\ActionButtons;

use Laravel\Nova\Fields\Field;

class ActionButtons extends Field
{
    public $showOnIndex = true;

    public $showOnDetail = false;

    public $showOnCreation = false;
    
    public $showOnUpdate = false;

    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'action-buttons';
}
