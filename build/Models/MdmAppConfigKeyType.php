<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MdmAppConfigKeyType - Enum
 * App configuration key types.
 */
enum MdmAppConfigKeyType: string
{
    case STRINGTYPE = 'stringType';
    case INTEGERTYPE = 'integerType';
    case REALTYPE = 'realType';
    case BOOLEANTYPE = 'booleanType';
    case TOKENTYPE = 'tokenType';
}
