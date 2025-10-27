<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcDomainJoinType - Enum
 */
enum CloudPcDomainJoinType: string
{
    case AZUREADJOIN = 'azureADJoin';
    case HYBRIDAZUREADJOIN = 'hybridAzureADJoin';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
