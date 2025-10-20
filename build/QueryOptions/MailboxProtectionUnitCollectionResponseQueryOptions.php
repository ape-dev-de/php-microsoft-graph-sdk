<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MailboxProtectionUnitCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MailboxProtectionUnitCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MailboxProtectionUnitCollectionResponse properties
     * 
     * @param array<string> $select Use MailboxProtectionUnitCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
