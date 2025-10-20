<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MimeContent resources
 *
 * Available select fields:
 * - type
 * - value
 */
class MimeContentQueryOptions extends QueryOptions
{
    public const FIELD_TYPE = 'type';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MimeContent properties
     * 
     * @param array<string> $select Use MimeContentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
