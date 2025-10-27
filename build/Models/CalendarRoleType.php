<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CalendarRoleType - Enum
 */
enum CalendarRoleType: string
{
    case NONE = 'none';
    case FREEBUSYREAD = 'freeBusyRead';
    case LIMITEDREAD = 'limitedRead';
    case READ = 'read';
    case WRITE = 'write';
    case DELEGATEWITHOUTPRIVATEEVENTACCESS = 'delegateWithoutPrivateEventAccess';
    case DELEGATEWITHPRIVATEEVENTACCESS = 'delegateWithPrivateEventAccess';
    case CUSTOM = 'custom';
}
