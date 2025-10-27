<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftEdgeChannel - Enum
 * The enum to specify the channels for Microsoft Edge apps.
 */
enum MicrosoftEdgeChannel: string
{
    case DEV = 'dev';
    case BETA = 'beta';
    case STABLE = 'stable';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
