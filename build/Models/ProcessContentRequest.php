<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProcessContentRequest
 */
class ProcessContentRequest
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?ActivityMetadata $activityMetadata = null;

    /** 
     * A collection of content entries to be processed. Each entry contains the content itself and its metadata. Use conversation metadata for content like prompts and responses and file metadata for files. Required.
     * @var ProcessContentMetadataBase[]
     */
    public array $contentEntries = [];

    /**  */
    public ?DeviceMetadata $deviceMetadata = null;

    /**  */
    public ?IntegratedApplicationMetadata $integratedAppMetadata = null;

    /** 
     * Metadata about the protected application making the request. Required.
     * @var ProtectedApplicationMetadata|\stdClass|null
     */
    public ProtectedApplicationMetadata|\stdClass|null $protectedAppMetadata = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['activityMetadata'])) {
            $this->activityMetadata = is_array($data['activityMetadata']) ? new ActivityMetadata($data['activityMetadata']) : $data['activityMetadata'];
        }
        if (isset($data['contentEntries'])) {
            $this->contentEntries = $data['contentEntries'];
        }
        if (isset($data['deviceMetadata'])) {
            $this->deviceMetadata = is_array($data['deviceMetadata']) ? new DeviceMetadata($data['deviceMetadata']) : $data['deviceMetadata'];
        }
        if (isset($data['integratedAppMetadata'])) {
            $this->integratedAppMetadata = is_array($data['integratedAppMetadata']) ? new IntegratedApplicationMetadata($data['integratedAppMetadata']) : $data['integratedAppMetadata'];
        }
        if (isset($data['protectedAppMetadata'])) {
            $this->protectedAppMetadata = is_array($data['protectedAppMetadata']) ? new ProtectedApplicationMetadata($data['protectedAppMetadata']) : $data['protectedAppMetadata'];
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
