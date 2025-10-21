<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosVppEBook resources
 *
 * Available select fields:
 * - appleId
 * - genres
 * - language
 * - seller
 * - totalLicenseCount
 * - usedLicenseCount
 * - vppOrganizationName
 * - vppTokenId
 */
class IosVppEBookQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosVppEBook
     */
    public const FIELD_APPLE_ID = 'appleId';
    public const FIELD_GENRES = 'genres';
    public const FIELD_LANGUAGE = 'language';
    public const FIELD_SELLER = 'seller';
    public const FIELD_TOTAL_LICENSE_COUNT = 'totalLicenseCount';
    public const FIELD_USED_LICENSE_COUNT = 'usedLicenseCount';
    public const FIELD_VPP_ORGANIZATION_NAME = 'vppOrganizationName';
    public const FIELD_VPP_TOKEN_ID = 'vppTokenId';

    /**
     * Select specific IosVppEBook properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
