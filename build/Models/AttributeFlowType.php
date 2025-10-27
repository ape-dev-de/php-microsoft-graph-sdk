<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeFlowType - Enum
 */
enum AttributeFlowType: string
{
    case ALWAYS = 'Always';
    case OBJECTADDONLY = 'ObjectAddOnly';
    case MULTIVALUEADDONLY = 'MultiValueAddOnly';
    case VALUEADDONLY = 'ValueAddOnly';
    case ATTRIBUTEADDONLY = 'AttributeAddOnly';
}
