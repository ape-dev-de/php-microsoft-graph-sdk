<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomExtensionCalloutInstanceStatus - Enum
 */
enum CustomExtensionCalloutInstanceStatus: string
{
    case CALLOUTSENT = 'calloutSent';
    case CALLBACKRECEIVED = 'callbackReceived';
    case CALLOUTFAILED = 'calloutFailed';
    case CALLBACKTIMEDOUT = 'callbackTimedOut';
    case WAITINGFORCALLBACK = 'waitingForCallback';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
