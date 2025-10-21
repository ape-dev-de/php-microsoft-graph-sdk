<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosVppApp resources
 *
 * Available select fields:
 * - applicableDeviceType
 * - appStoreUrl
 * - bundleId
 * - licensingType
 * - releaseDateTime
 * - totalLicenseCount
 * - usedLicenseCount
 * - vppTokenAccountType
 * - vppTokenAppleId
 * - vppTokenOrganizationName
 */
class IosVppAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosVppApp
     */
    public const FIELD_APPLICABLE_DEVICE_TYPE = 'applicableDeviceType';
    public const FIELD_APP_STORE_URL = 'appStoreUrl';
    public const FIELD_BUNDLE_ID = 'bundleId';
    public const FIELD_LICENSING_TYPE = 'licensingType';
    public const FIELD_RELEASE_DATE_TIME = 'releaseDateTime';
    public const FIELD_TOTAL_LICENSE_COUNT = 'totalLicenseCount';
    public const FIELD_USED_LICENSE_COUNT = 'usedLicenseCount';
    public const FIELD_VPP_TOKEN_ACCOUNT_TYPE = 'vppTokenAccountType';
    public const FIELD_VPP_TOKEN_APPLE_ID = 'vppTokenAppleId';
    public const FIELD_VPP_TOKEN_ORGANIZATION_NAME = 'vppTokenOrganizationName';

    /**
     * Select specific IosVppApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
