<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ContentActivity
 */
class ContentActivity
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?ProcessContentRequest $contentMetadata = null;

    /** The scope identified from computed protection scopes. */
    public ?string $scopeIdentifier = null;

    /** ID of the user. */
    public ?string $userId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['contentMetadata'])) {
            $this->contentMetadata = is_array($data['contentMetadata']) ? new ProcessContentRequest($data['contentMetadata']) : $data['contentMetadata'];
        }
        if (isset($data['scopeIdentifier'])) {
            $this->scopeIdentifier = $data['scopeIdentifier'];
        }
        if (isset($data['userId'])) {
            $this->userId = $data['userId'];
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
