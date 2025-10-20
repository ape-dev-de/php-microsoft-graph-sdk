<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageAutomaticRequestSettings resources
 *
 * Available select fields:
 * - gracePeriodBeforeAccessRemoval
 * - removeAccessWhenTargetLeavesAllowedTargets
 * - requestAccessForAllowedTargets
 */
class AccessPackageAutomaticRequestSettingsQueryOptions extends QueryOptions
{
    public const FIELD_GRACE_PERIOD_BEFORE_ACCESS_REMOVAL = 'gracePeriodBeforeAccessRemoval';
    public const FIELD_REMOVE_ACCESS_WHEN_TARGET_LEAVES_ALLOWED_TARGETS = 'removeAccessWhenTargetLeavesAllowedTargets';
    public const FIELD_REQUEST_ACCESS_FOR_ALLOWED_TARGETS = 'requestAccessForAllowedTargets';

    /**
     * Select specific AccessPackageAutomaticRequestSettings properties
     * 
     * @param array<string> $select Use AccessPackageAutomaticRequestSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
