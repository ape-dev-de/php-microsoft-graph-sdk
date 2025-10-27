<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WatermarkProtectionValues
 */
class WatermarkProtectionValues
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Indicates whether to apply a watermark to any shared content. */
    public ?bool $isEnabledForContentSharing = null;

    /** Indicates whether to apply a watermark to everyone's video feed. */
    public ?bool $isEnabledForVideo = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isEnabledForContentSharing'])) {
            $this->isEnabledForContentSharing = is_bool($data['isEnabledForContentSharing']) ? $data['isEnabledForContentSharing'] : (bool)$data['isEnabledForContentSharing'];
        }
        if (isset($data['isEnabledForVideo'])) {
            $this->isEnabledForVideo = is_bool($data['isEnabledForVideo']) ? $data['isEnabledForVideo'] : (bool)$data['isEnabledForVideo'];
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
