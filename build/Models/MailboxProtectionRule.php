<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailboxProtectionRule
 */
class MailboxProtectionRule
{
    /**
     * Contains a mailbox expression. For examples, see mailboxExpression examples.
     */
    private ?string $mailboxExpression;


    public function getMailboxExpression(): ?string
    {
        return $this->mailboxExpression;
    }

    public function setMailboxExpression(?string $mailboxExpression): self
    {
        $this->mailboxExpression = $mailboxExpression;
        return $this;
    }

}
