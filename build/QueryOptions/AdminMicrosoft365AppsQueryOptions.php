<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AdminMicrosoft365Apps resources
 *
 * Available select fields:
 * - installationOptions
 */
class AdminMicrosoft365AppsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AdminMicrosoft365Apps
     */
    public const FIELD_INSTALLATION_OPTIONS = 'installationOptions';

    /**
     * Select specific AdminMicrosoft365Apps properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
