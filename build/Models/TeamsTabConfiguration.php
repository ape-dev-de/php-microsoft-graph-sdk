<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsTabConfiguration
 */
class TeamsTabConfiguration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Url used for rendering tab contents in Teams. Required. */
    public ?string $contentUrl = null;

    /** Identifier for the entity hosted by the tab provider. */
    public ?string $entityId = null;

    /** Url called by Teams client when a Tab is removed using the Teams Client. */
    public ?string $removeUrl = null;

    /** Url for showing tab contents outside of Teams. */
    public ?string $websiteUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['contentUrl'])) {
            $this->contentUrl = $data['contentUrl'];
        }
        if (isset($data['entityId'])) {
            $this->entityId = $data['entityId'];
        }
        if (isset($data['removeUrl'])) {
            $this->removeUrl = $data['removeUrl'];
        }
        if (isset($data['websiteUrl'])) {
            $this->websiteUrl = $data['websiteUrl'];
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
