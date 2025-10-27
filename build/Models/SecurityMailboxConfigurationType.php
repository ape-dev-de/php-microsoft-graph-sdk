<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityMailboxConfigurationType - Enum
 */
enum SecurityMailboxConfigurationType: string
{
    case MAILFORWARDINGRULE = 'mailForwardingRule';
    case OWASETTINGS = 'owaSettings';
    case EWSSETTINGS = 'ewsSettings';
    case MAILDELEGATION = 'mailDelegation';
    case USERINBOXRULE = 'userInboxRule';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
