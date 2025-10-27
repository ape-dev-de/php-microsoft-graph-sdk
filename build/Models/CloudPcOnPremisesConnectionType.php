<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcOnPremisesConnectionType - Enum
 */
enum CloudPcOnPremisesConnectionType: string
{
    case HYBRIDAZUREADJOIN = 'hybridAzureADJoin';
    case AZUREADJOIN = 'azureADJoin';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
