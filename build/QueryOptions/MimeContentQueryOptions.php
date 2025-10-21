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
    /**
     * Available select fields for MimeContent
     */
    public const FIELD_TYPE = 'type';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MimeContent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
