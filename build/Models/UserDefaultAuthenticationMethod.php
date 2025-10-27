<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserDefaultAuthenticationMethod - Enum
 */
enum UserDefaultAuthenticationMethod: string
{
    case PUSH = 'push';
    case OATH = 'oath';
    case VOICEMOBILE = 'voiceMobile';
    case VOICEALTERNATEMOBILE = 'voiceAlternateMobile';
    case VOICEOFFICE = 'voiceOffice';
    case SMS = 'sms';
    case NONE = 'none';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
