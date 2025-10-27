<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceRegistrationState - Enum
 * Device registration status.
 */
enum DeviceRegistrationState: string
{
    case NOTREGISTERED = 'notRegistered';
    case REGISTERED = 'registered';
    case REVOKED = 'revoked';
    case KEYCONFLICT = 'keyConflict';
    case APPROVALPENDING = 'approvalPending';
    case CERTIFICATERESET = 'certificateReset';
    case NOTREGISTEREDPENDINGENROLLMENT = 'notRegisteredPendingEnrollment';
    case UNKNOWN = 'unknown';
}
