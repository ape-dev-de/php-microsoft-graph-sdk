<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerTaskDetails resources
 *
 * Available select fields:
 * - checklist
 * - description
 * - previewType
 * - references
 */
class PlannerTaskDetailsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlannerTaskDetails
     */
    public const FIELD_CHECKLIST = 'checklist';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_PREVIEW_TYPE = 'previewType';
    public const FIELD_REFERENCES = 'references';

    /**
     * Select specific PlannerTaskDetails properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
