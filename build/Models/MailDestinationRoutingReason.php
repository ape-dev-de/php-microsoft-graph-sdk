<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailDestinationRoutingReason - Enum
 */
enum MailDestinationRoutingReason: string
{
    case NONE = 'none';
    case MAILFLOWRULE = 'mailFlowRule';
    case SAFESENDER = 'safeSender';
    case BLOCKEDSENDER = 'blockedSender';
    case ADVANCEDSPAMFILTERING = 'advancedSpamFiltering';
    case DOMAINALLOWLIST = 'domainAllowList';
    case DOMAINBLOCKLIST = 'domainBlockList';
    case NOTINADDRESSBOOK = 'notInAddressBook';
    case FIRSTTIMESENDER = 'firstTimeSender';
    case AUTOPURGETOINBOX = 'autoPurgeToInbox';
    case AUTOPURGETOJUNK = 'autoPurgeToJunk';
    case AUTOPURGETODELETED = 'autoPurgeToDeleted';
    case OUTBOUND = 'outbound';
    case NOTJUNK = 'notJunk';
    case JUNK = 'junk';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
