<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EditionUpgradeConfiguration resources
 *
 * Available select fields:
 * - license
 * - licenseType
 * - productKey
 * - targetEdition
 */
class EditionUpgradeConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EditionUpgradeConfiguration
     */
    public const FIELD_LICENSE = 'license';
    public const FIELD_LICENSE_TYPE = 'licenseType';
    public const FIELD_PRODUCT_KEY = 'productKey';
    public const FIELD_TARGET_EDITION = 'targetEdition';

    /**
     * Select specific EditionUpgradeConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
