<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TemplateScenarios - Enum
 */
enum TemplateScenarios: string
{
    case NEW = 'new';
    case SECUREFOUNDATION = 'secureFoundation';
    case ZEROTRUST = 'zeroTrust';
    case REMOTEWORK = 'remoteWork';
    case PROTECTADMINS = 'protectAdmins';
    case EMERGINGTHREATS = 'emergingThreats';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
