<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEvidenceRemediationStatus - Enum
 */
enum SecurityEvidenceRemediationStatus: string
{
    case NONE = 'none';
    case REMEDIATED = 'remediated';
    case PREVENTED = 'prevented';
    case BLOCKED = 'blocked';
    case NOTFOUND = 'notFound';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case ACTIVE = 'active';
    case PENDINGAPPROVAL = 'pendingApproval';
    case DECLINED = 'declined';
    case UNREMEDIATED = 'unremediated';
    case RUNNING = 'running';
    case PARTIALLYREMEDIATED = 'partiallyRemediated';
}
