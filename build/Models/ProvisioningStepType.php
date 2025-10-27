<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisioningStepType - Enum
 */
enum ProvisioningStepType: string
{
    case IMPORT = 'import';
    case SCOPING = 'scoping';
    case MATCHING = 'matching';
    case PROCESSING = 'processing';
    case REFERENCERESOLUTION = 'referenceResolution';
    case EXPORT = 'export';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
