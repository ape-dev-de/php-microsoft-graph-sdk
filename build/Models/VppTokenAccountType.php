<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VppTokenAccountType - Enum
 * Possible types of an Apple Volume Purchase Program token.
 */
enum VppTokenAccountType: string
{
    case BUSINESS = 'business';
    case EDUCATION = 'education';
}
