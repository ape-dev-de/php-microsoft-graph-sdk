<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AssignedLabel resources
 *
 * Available select fields:
 * - displayName
 * - labelId
 */
class AssignedLabelQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LABEL_ID = 'labelId';

    /**
     * Select specific AssignedLabel properties
     * 
     * @param array<string> $select Use AssignedLabelQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
