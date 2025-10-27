<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingPageAccessControl - Enum
 */
enum BookingPageAccessControl: string
{
    case UNRESTRICTED = 'unrestricted';
    case RESTRICTEDTOORGANIZATION = 'restrictedToOrganization';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
