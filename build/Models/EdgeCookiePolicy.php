<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EdgeCookiePolicy - Enum
 * Possible values to specify which cookies are allowed in Microsoft Edge.
 */
enum EdgeCookiePolicy: string
{
    case USERDEFINED = 'userDefined';
    case ALLOW = 'allow';
    case BLOCKTHIRDPARTY = 'blockThirdParty';
    case BLOCKALL = 'blockAll';
}
