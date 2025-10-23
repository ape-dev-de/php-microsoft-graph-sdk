<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomExtensionCalloutResponse
 */
class CustomExtensionCalloutResponse
{
    /** 
     * Contains the data the external system provides to the custom extension endpoint.
     * @var CustomExtensionData|\stdClass|null
     */
    public mixed $data = null;

    /** Identifies the external system or event context related to the response. */
    public ?string $source = null;

    /** Describes the type of event related to the response. */
    public ?string $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['data'])) {
            $this->data = is_array($data['data']) ? new CustomExtensionData($data['data']) : $data['data'];
        }
        if (isset($data['source'])) {
            $this->source = $data['source'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
    }
}
