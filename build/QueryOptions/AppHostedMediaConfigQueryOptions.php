<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppHostedMediaConfig resources
 *
 * Available select fields:
 * - blob
 */
class AppHostedMediaConfigQueryOptions extends QueryOptions
{
    public const FIELD_BLOB = 'blob';

    /**
     * Select specific AppHostedMediaConfig properties
     * 
     * @param array<string> $select Use AppHostedMediaConfigQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
