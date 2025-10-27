<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityAlertDetermination - Enum
 */
enum SecurityAlertDetermination: string
{
    case UNKNOWN = 'unknown';
    case APT = 'apt';
    case MALWARE = 'malware';
    case SECURITYPERSONNEL = 'securityPersonnel';
    case SECURITYTESTING = 'securityTesting';
    case UNWANTEDSOFTWARE = 'unwantedSoftware';
    case OTHER = 'other';
    case MULTISTAGEDATTACK = 'multiStagedAttack';
    case COMPROMISEDACCOUNT = 'compromisedAccount';
    case PHISHING = 'phishing';
    case MALICIOUSUSERACTIVITY = 'maliciousUserActivity';
    case NOTMALICIOUS = 'notMalicious';
    case NOTENOUGHDATATOVALIDATE = 'notEnoughDataToValidate';
    case CONFIRMEDACTIVITY = 'confirmedActivity';
    case LINEOFBUSINESSAPPLICATION = 'lineOfBusinessApplication';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
