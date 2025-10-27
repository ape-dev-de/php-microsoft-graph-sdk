<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkforceIntegrationSupportedEntities - Enum
 */
enum WorkforceIntegrationSupportedEntities: string
{
    case NONE = 'none';
    case SHIFT = 'shift';
    case SWAPREQUEST = 'swapRequest';
    case USERSHIFTPREFERENCES = 'userShiftPreferences';
    case OPENSHIFT = 'openShift';
    case OPENSHIFTREQUEST = 'openShiftRequest';
    case OFFERSHIFTREQUEST = 'offerShiftRequest';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case TIMECARD = 'timeCard';
    case TIMEOFFREASON = 'timeOffReason';
    case TIMEOFF = 'timeOff';
    case TIMEOFFREQUEST = 'timeOffRequest';
}
