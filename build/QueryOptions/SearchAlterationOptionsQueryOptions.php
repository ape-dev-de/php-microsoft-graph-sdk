<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchAlterationOptions resources
 *
 * Available select fields:
 * - enableModification
 * - enableSuggestion
 */
class SearchAlterationOptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SearchAlterationOptions
     */
    public const FIELD_ENABLE_MODIFICATION = 'enableModification';
    public const FIELD_ENABLE_SUGGESTION = 'enableSuggestion';

    /**
     * Select specific SearchAlterationOptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
