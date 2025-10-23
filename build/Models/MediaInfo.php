<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaInfo
 */
class MediaInfo
{
    /** Optional. Used to uniquely identity the resource. If passed in, the prompt uri is against this resourceId as a key. */
    public ?string $resourceId = null;

    /** Path to the prompt that will be played. Currently supports only Wave file (.wav) format, single-channel, 16-bit samples with a 16,000 (16 KHz) sampling rate. */
    public ?string $uri = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['resourceId'])) {
            $this->resourceId = $data['resourceId'];
        }
        if (isset($data['uri'])) {
            $this->uri = $data['uri'];
        }
    }
}
