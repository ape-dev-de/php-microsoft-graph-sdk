<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftStoreForBusinessApp resources
 *
 * Available select fields:
 * - licenseType
 * - packageIdentityName
 * - productKey
 * - totalLicenseCount
 * - usedLicenseCount
 */
class MicrosoftStoreForBusinessAppQueryOptions extends QueryOptions
{
    public const FIELD_LICENSE_TYPE = 'licenseType';
    public const FIELD_PACKAGE_IDENTITY_NAME = 'packageIdentityName';
    public const FIELD_PRODUCT_KEY = 'productKey';
    public const FIELD_TOTAL_LICENSE_COUNT = 'totalLicenseCount';
    public const FIELD_USED_LICENSE_COUNT = 'usedLicenseCount';

    /**
     * Select specific MicrosoftStoreForBusinessApp properties
     * 
     * @param array<string> $select Use MicrosoftStoreForBusinessAppQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
