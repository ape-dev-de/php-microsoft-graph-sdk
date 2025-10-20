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
    public const FIELD_APP_USER_MODEL_ID = 'appUserModelId';

    /**
     * Select specific WindowsUniversalAppXContainedApp properties
     * 
     * @param array<string> $select Use WindowsUniversalAppXContainedAppQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
