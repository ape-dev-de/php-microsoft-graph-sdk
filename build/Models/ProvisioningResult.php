<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisioningResult - Enum
 */
enum ProvisioningResult: string
{
    case SUCCESS = 'success';
    case FAILURE = 'failure';
    case SKIPPED = 'skipped';
    case WARNING = 'warning';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
