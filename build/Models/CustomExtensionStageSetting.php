<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomExtensionStageSetting
 */
class CustomExtensionStageSetting
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?AccessPackageCustomExtensionStage $stage = null;

    /** 
     * Indicates the custom workflow extension that will be executed at this stage. Nullable. Supports $expand.
     * @var CustomCalloutExtension|\stdClass|null
     */
    public CustomCalloutExtension|\stdClass|null $customExtension = null;


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
        if (isset($data['stage'])) {
            $this->stage = is_array($data['stage']) ? new AccessPackageCustomExtensionStage($data['stage']) : $data['stage'];
        }
        if (isset($data['customExtension'])) {
            $this->customExtension = is_array($data['customExtension']) ? new CustomCalloutExtension($data['customExtension']) : $data['customExtension'];
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
