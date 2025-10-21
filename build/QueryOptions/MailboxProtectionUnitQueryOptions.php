<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MailboxProtectionUnit resources
 *
 * Available select fields:
 */
class MailboxProtectionUnitQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MailboxProtectionUnit
     */

    /**
     * Select specific MailboxProtectionUnit properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
