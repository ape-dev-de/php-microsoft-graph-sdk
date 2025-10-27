<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualAppointmentMessageType - Enum
 */
enum VirtualAppointmentMessageType: string
{
    case CONFIRMATION = 'confirmation';
    case RESCHEDULE = 'reschedule';
    case CANCELLATION = 'cancellation';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
