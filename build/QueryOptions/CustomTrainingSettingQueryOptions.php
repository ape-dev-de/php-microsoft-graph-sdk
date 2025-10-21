<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomTrainingSetting resources
 *
 * Available select fields:
 * - assignedTo
 * - description
 * - displayName
 * - durationInMinutes
 * - url
 */
class CustomTrainingSettingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CustomTrainingSetting
     */
    public const FIELD_ASSIGNED_TO = 'assignedTo';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_DURATION_IN_MINUTES = 'durationInMinutes';
    public const FIELD_URL = 'url';

    /**
     * Select specific CustomTrainingSetting properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
