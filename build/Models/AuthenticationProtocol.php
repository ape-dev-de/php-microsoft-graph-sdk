<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationProtocol - Enum
 */
enum AuthenticationProtocol: string
{
    case WSFED = 'wsFed';
    case SAML = 'saml';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
