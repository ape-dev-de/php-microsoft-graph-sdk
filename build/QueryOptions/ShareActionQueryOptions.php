<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ShareAction resources
 *
 * Available select fields:
 * - recipients
 */
class ShareActionQueryOptions extends QueryOptions
{
    public const FIELD_RECIPIENTS = 'recipients';

    /**
     * Select specific ShareAction properties
     * 
     * @param array<string> $select Use ShareActionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
