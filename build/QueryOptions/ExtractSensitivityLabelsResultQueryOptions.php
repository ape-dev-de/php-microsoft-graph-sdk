<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExtractSensitivityLabelsResult resources
 *
 * Available select fields:
 * - labels
 */
class ExtractSensitivityLabelsResultQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExtractSensitivityLabelsResult
     */
    public const FIELD_LABELS = 'labels';

    /**
     * Select specific ExtractSensitivityLabelsResult properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
