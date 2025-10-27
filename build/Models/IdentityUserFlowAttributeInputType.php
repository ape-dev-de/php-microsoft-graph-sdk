<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityUserFlowAttributeInputType - Enum
 */
enum IdentityUserFlowAttributeInputType: string
{
    case TEXTBOX = 'textBox';
    case DATETIMEDROPDOWN = 'dateTimeDropdown';
    case RADIOSINGLESELECT = 'radioSingleSelect';
    case DROPDOWNSINGLESELECT = 'dropdownSingleSelect';
    case EMAILBOX = 'emailBox';
    case CHECKBOXMULTISELECT = 'checkboxMultiSelect';
}
