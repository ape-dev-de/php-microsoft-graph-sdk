<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceEnrollmentFailureReason - Enum
 * Top level failure categories for enrollment.
 */
enum DeviceEnrollmentFailureReason: string
{
    case UNKNOWN = 'unknown';
    case AUTHENTICATION = 'authentication';
    case AUTHORIZATION = 'authorization';
    case ACCOUNTVALIDATION = 'accountValidation';
    case USERVALIDATION = 'userValidation';
    case DEVICENOTSUPPORTED = 'deviceNotSupported';
    case INMAINTENANCE = 'inMaintenance';
    case BADREQUEST = 'badRequest';
    case FEATURENOTSUPPORTED = 'featureNotSupported';
    case ENROLLMENTRESTRICTIONSENFORCED = 'enrollmentRestrictionsEnforced';
    case CLIENTDISCONNECTED = 'clientDisconnected';
    case USERABANDONMENT = 'userAbandonment';
}
