<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessTemplate resources
 *
 * Available select fields:
 * - description
 * - details
 * - name
 * - scenarios
 */
class ConditionalAccessTemplateQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DETAILS = 'details';
    public const FIELD_NAME = 'name';
    public const FIELD_SCENARIOS = 'scenarios';

    /**
     * Select specific ConditionalAccessTemplate properties
     * 
     * @param array<string> $select Use ConditionalAccessTemplateQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
