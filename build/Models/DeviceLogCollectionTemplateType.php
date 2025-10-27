<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceLogCollectionTemplateType - Enum
 * Enum for the template type used for collecting logs
 */
enum DeviceLogCollectionTemplateType: string
{
    case PREDEFINED = 'predefined';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
