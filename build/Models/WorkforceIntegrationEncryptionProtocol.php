<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkforceIntegrationEncryptionProtocol - Enum
 */
enum WorkforceIntegrationEncryptionProtocol: string
{
    case SHAREDSECRET = 'sharedSecret';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
