<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdleSessionSignOut resources
 *
 * Available select fields:
 * - isEnabled
 * - signOutAfterInSeconds
 * - warnAfterInSeconds
 */
class IdleSessionSignOutQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdleSessionSignOut
     */
    public const FIELD_IS_ENABLED = 'isEnabled';
    public const FIELD_SIGN_OUT_AFTER_IN_SECONDS = 'signOutAfterInSeconds';
    public const FIELD_WARN_AFTER_IN_SECONDS = 'warnAfterInSeconds';

    /**
     * Select specific IdleSessionSignOut properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
