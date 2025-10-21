<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftManagedDesktop resources
 *
 * Available select fields:
 * - managedType
 * - profile
 */
class MicrosoftManagedDesktopQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MicrosoftManagedDesktop
     */
    public const FIELD_MANAGED_TYPE = 'managedType';
    public const FIELD_PROFILE = 'profile';

    /**
     * Select specific MicrosoftManagedDesktop properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
