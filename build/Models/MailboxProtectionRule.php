<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailboxProtectionRule
 */
class MailboxProtectionRule
{
    public function __construct(
        /** Contains a mailbox expression. For examples, see mailboxExpression examples. */
        public ?string $mailboxExpression = null
    ) {}
}
