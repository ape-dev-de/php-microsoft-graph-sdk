<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailTipsType - Enum
 */
enum MailTipsType: string
{
    case AUTOMATICREPLIES = 'automaticReplies';
    case MAILBOXFULLSTATUS = 'mailboxFullStatus';
    case CUSTOMMAILTIP = 'customMailTip';
    case EXTERNALMEMBERCOUNT = 'externalMemberCount';
    case TOTALMEMBERCOUNT = 'totalMemberCount';
    case MAXMESSAGESIZE = 'maxMessageSize';
    case DELIVERYRESTRICTION = 'deliveryRestriction';
    case MODERATIONSTATUS = 'moderationStatus';
    case RECIPIENTSCOPE = 'recipientScope';
    case RECIPIENTSUGGESTIONS = 'recipientSuggestions';
}
