<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AdminReportSettings resources
 *
 * Available select fields:
 * - displayConcealedNames
 */
class AdminReportSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AdminReportSettings
     */
    public const FIELD_DISPLAY_CONCEALED_NAMES = 'displayConcealedNames';

    /**
     * Select specific AdminReportSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
