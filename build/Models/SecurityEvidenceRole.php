<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEvidenceRole - Enum
 */
enum SecurityEvidenceRole: string
{
    case UNKNOWN = 'unknown';
    case CONTEXTUAL = 'contextual';
    case SCANNED = 'scanned';
    case SOURCE = 'source';
    case DESTINATION = 'destination';
    case CREATED = 'created';
    case ADDED = 'added';
    case COMPROMISED = 'compromised';
    case EDITED = 'edited';
    case ATTACKED = 'attacked';
    case ATTACKER = 'attacker';
    case COMMANDANDCONTROL = 'commandAndControl';
    case LOADED = 'loaded';
    case SUSPICIOUS = 'suspicious';
    case POLICYVIOLATOR = 'policyViolator';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
