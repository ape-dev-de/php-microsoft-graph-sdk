<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSDmgApp resources
 *
 * Available select fields:
 * - ignoreVersionDetection
 * - includedApps
 * - minimumSupportedOperatingSystem
 * - primaryBundleId
 * - primaryBundleVersion
 */
class MacOSDmgAppQueryOptions extends QueryOptions
{
    public const FIELD_IGNORE_VERSION_DETECTION = 'ignoreVersionDetection';
    public const FIELD_INCLUDED_APPS = 'includedApps';
    public const FIELD_MINIMUM_SUPPORTED_OPERATING_SYSTEM = 'minimumSupportedOperatingSystem';
    public const FIELD_PRIMARY_BUNDLE_ID = 'primaryBundleId';
    public const FIELD_PRIMARY_BUNDLE_VERSION = 'primaryBundleVersion';

    /**
     * Select specific MacOSDmgApp properties
     * 
     * @param array<string> $select Use MacOSDmgAppQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
