<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TemplateApplicationLevel - Enum
 */
enum TemplateApplicationLevel: string
{
    case NONE = 'none';
    case NEWPARTNERS = 'newPartners';
    case EXISTINGPARTNERS = 'existingPartners';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
