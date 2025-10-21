<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSLobApp resources
 *
 * Available select fields:
 * - buildNumber
 * - bundleId
 * - childApps
 * - ignoreVersionDetection
 * - installAsManaged
 * - md5Hash
 * - md5HashChunkSize
 * - minimumSupportedOperatingSystem
 * - versionNumber
 */
class MacOSLobAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MacOSLobApp
     */
    public const FIELD_BUILD_NUMBER = 'buildNumber';
    public const FIELD_BUNDLE_ID = 'bundleId';
    public const FIELD_CHILD_APPS = 'childApps';
    public const FIELD_IGNORE_VERSION_DETECTION = 'ignoreVersionDetection';
    public const FIELD_INSTALL_AS_MANAGED = 'installAsManaged';
    public const FIELD_MD5HASH = 'md5Hash';
    public const FIELD_MD5HASH_CHUNK_SIZE = 'md5HashChunkSize';
    public const FIELD_MINIMUM_SUPPORTED_OPERATING_SYSTEM = 'minimumSupportedOperatingSystem';
    public const FIELD_VERSION_NUMBER = 'versionNumber';

    /**
     * Select specific MacOSLobApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
