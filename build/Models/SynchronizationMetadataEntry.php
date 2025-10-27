<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationMetadataEntry
 */
class SynchronizationMetadataEntry
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Possible values are: GalleryApplicationIdentifier, GalleryApplicationKey, IsOAuthEnabled, IsSynchronizationAgentAssignmentRequired, IsSynchronizationAgentRequired, IsSynchronizationInPreview, OAuthSettings, SynchronizationLearnMoreIbizaFwLink, ConfigurationFields.
     * @var SynchronizationMetadata|\stdClass|null
     */
    public SynchronizationMetadata|\stdClass|null $key = null;

    /** Value of the metadata property. */
    public ?string $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['key'])) {
            $this->key = is_string($data['key']) ? SynchronizationMetadata::tryFrom($data['key']) : $data['key'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
