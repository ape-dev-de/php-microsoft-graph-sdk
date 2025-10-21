<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationMetadataEntry
 */
class SynchronizationMetadataEntry
{
    public function __construct(
        /** Possible values are: GalleryApplicationIdentifier, GalleryApplicationKey, IsOAuthEnabled, IsSynchronizationAgentAssignmentRequired, IsSynchronizationAgentRequired, IsSynchronizationInPreview, OAuthSettings, SynchronizationLearnMoreIbizaFwLink, ConfigurationFields. */
        public ?string $key = null,
        /** Value of the metadata property. */
        public ?string $value = null
    ) {}
}
