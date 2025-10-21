<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Recipient resources
 *
 * Available select fields:
 * - emailAddress
 */
class RecipientQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Recipient
     */
    public const FIELD_EMAIL_ADDRESS = 'emailAddress';

    /**
     * Select specific Recipient properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
