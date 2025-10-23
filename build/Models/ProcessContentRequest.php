<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProcessContentRequest
 */
class ProcessContentRequest
{
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
    public mixed $protectedAppMetadata = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['activityMetadata'])) {
            $this->activityMetadata = $data['activityMetadata'];
        }
        if (isset($data['contentEntries'])) {
            $this->contentEntries = $data['contentEntries'];
        }
        if (isset($data['deviceMetadata'])) {
            $this->deviceMetadata = $data['deviceMetadata'];
        }
        if (isset($data['integratedAppMetadata'])) {
            $this->integratedAppMetadata = $data['integratedAppMetadata'];
        }
        if (isset($data['protectedAppMetadata'])) {
            $this->protectedAppMetadata = $data['protectedAppMetadata'];
        }
    }
}
