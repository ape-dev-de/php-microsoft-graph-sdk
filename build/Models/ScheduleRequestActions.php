<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ScheduleRequestActions - Enum
 */
enum ScheduleRequestActions: string
{
    case ADMINASSIGN = 'adminAssign';
    case ADMINUPDATE = 'adminUpdate';
    case ADMINREMOVE = 'adminRemove';
    case SELFACTIVATE = 'selfActivate';
    case SELFDEACTIVATE = 'selfDeactivate';
    case ADMINEXTEND = 'adminExtend';
    case ADMINRENEW = 'adminRenew';
    case SELFEXTEND = 'selfExtend';
    case SELFRENEW = 'selfRenew';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
