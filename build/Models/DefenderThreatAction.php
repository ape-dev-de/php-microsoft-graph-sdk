<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DefenderThreatAction - Enum
 * Defender’s default action to take on detected Malware threats.
 */
enum DefenderThreatAction: string
{
    case DEVICEDEFAULT = 'deviceDefault';
    case CLEAN = 'clean';
    case QUARANTINE = 'quarantine';
    case REMOVE = 'remove';
    case ALLOW = 'allow';
    case USERDEFINED = 'userDefined';
    case BLOCK = 'block';
}
