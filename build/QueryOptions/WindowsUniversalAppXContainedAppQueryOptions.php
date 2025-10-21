<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsUniversalAppXContainedApp resources
 *
 * Available select fields:
 * - appUserModelId
 */
class WindowsUniversalAppXContainedAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsUniversalAppXContainedApp
     */
    public const FIELD_APP_USER_MODEL_ID = 'appUserModelId';

    /**
     * Select specific WindowsUniversalAppXContainedApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
