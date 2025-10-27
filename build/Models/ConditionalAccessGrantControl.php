<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessGrantControl - Enum
 */
enum ConditionalAccessGrantControl: string
{
    case BLOCK = 'block';
    case MFA = 'mfa';
    case COMPLIANTDEVICE = 'compliantDevice';
    case DOMAINJOINEDDEVICE = 'domainJoinedDevice';
    case APPROVEDAPPLICATION = 'approvedApplication';
    case COMPLIANTAPPLICATION = 'compliantApplication';
    case PASSWORDCHANGE = 'passwordChange';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
