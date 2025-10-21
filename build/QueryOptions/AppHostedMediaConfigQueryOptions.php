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
    /**
     * Available select fields for AppHostedMediaConfig
     */
    public const FIELD_BLOB = 'blob';

    /**
     * Select specific AppHostedMediaConfig properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
