<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MailboxProtectionRule resources
 *
 * Available select fields:
 * - mailboxExpression
 */
class MailboxProtectionRuleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MailboxProtectionRule
     */
    public const FIELD_MAILBOX_EXPRESSION = 'mailboxExpression';

    /**
     * Select specific MailboxProtectionRule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
