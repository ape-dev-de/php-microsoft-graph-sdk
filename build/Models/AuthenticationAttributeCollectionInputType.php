<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationAttributeCollectionInputType - Enum
 */
enum AuthenticationAttributeCollectionInputType: string
{
    case TEXT = 'text';
    case RADIOSINGLESELECT = 'radioSingleSelect';
    case CHECKBOXMULTISELECT = 'checkboxMultiSelect';
    case BOOLEAN = 'boolean';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
