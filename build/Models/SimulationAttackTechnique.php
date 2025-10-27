<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationAttackTechnique - Enum
 */
enum SimulationAttackTechnique: string
{
    case UNKNOWN = 'unknown';
    case CREDENTIALHARVESTING = 'credentialHarvesting';
    case ATTACHMENTMALWARE = 'attachmentMalware';
    case DRIVEBYURL = 'driveByUrl';
    case LINKINATTACHMENT = 'linkInAttachment';
    case LINKTOMALWAREFILE = 'linkToMalwareFile';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
