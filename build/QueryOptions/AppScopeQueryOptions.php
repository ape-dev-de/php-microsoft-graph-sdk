<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppScope resources
 *
 * Available select fields:
 * - displayName
 * - type
 */
class AppScopeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AppScope
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific AppScope properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
