<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FederatedIdpMfaBehavior - Enum
 */
enum FederatedIdpMfaBehavior: string
{
    case ACCEPTIFMFADONEBYFEDERATEDIDP = 'acceptIfMfaDoneByFederatedIdp';
    case ENFORCEMFABYFEDERATEDIDP = 'enforceMfaByFederatedIdp';
    case REJECTMFABYFEDERATEDIDP = 'rejectMfaByFederatedIdp';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
