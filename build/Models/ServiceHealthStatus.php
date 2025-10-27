<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceHealthStatus - Enum
 */
enum ServiceHealthStatus: string
{
    case SERVICEOPERATIONAL = 'serviceOperational';
    case INVESTIGATING = 'investigating';
    case RESTORINGSERVICE = 'restoringService';
    case VERIFYINGSERVICE = 'verifyingService';
    case SERVICERESTORED = 'serviceRestored';
    case POSTINCIDENTREVIEWPUBLISHED = 'postIncidentReviewPublished';
    case SERVICEDEGRADATION = 'serviceDegradation';
    case SERVICEINTERRUPTION = 'serviceInterruption';
    case EXTENDEDRECOVERY = 'extendedRecovery';
    case FALSEPOSITIVE = 'falsePositive';
    case INVESTIGATIONSUSPENDED = 'investigationSuspended';
    case RESOLVED = 'resolved';
    case MITIGATEDEXTERNAL = 'mitigatedExternal';
    case MITIGATED = 'mitigated';
    case RESOLVEDEXTERNAL = 'resolvedExternal';
    case CONFIRMED = 'confirmed';
    case REPORTED = 'reported';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
