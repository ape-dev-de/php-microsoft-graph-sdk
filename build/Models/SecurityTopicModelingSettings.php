<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityTopicModelingSettings
 */
class SecurityTopicModelingSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Indicates whether the themes model should dynamically optimize the number of generated topics. To learn more, see Adjust maximum number of themes dynamically. */
    public ?bool $dynamicallyAdjustTopicCount = null;

    /** Indicates whether the themes model should exclude numbers while parsing document texts. To learn more, see Include numbers in themes. */
    public ?bool $ignoreNumbers = null;

    /** Indicates whether themes model is enabled for the case. */
    public ?bool $isEnabled = null;

    /** The total number of topics that the themes model will generate for a review set. To learn more, see Maximum number of themes. */
    public ?float $topicCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['dynamicallyAdjustTopicCount'])) {
            $this->dynamicallyAdjustTopicCount = is_bool($data['dynamicallyAdjustTopicCount']) ? $data['dynamicallyAdjustTopicCount'] : (bool)$data['dynamicallyAdjustTopicCount'];
        }
        if (isset($data['ignoreNumbers'])) {
            $this->ignoreNumbers = is_bool($data['ignoreNumbers']) ? $data['ignoreNumbers'] : (bool)$data['ignoreNumbers'];
        }
        if (isset($data['isEnabled'])) {
            $this->isEnabled = is_bool($data['isEnabled']) ? $data['isEnabled'] : (bool)$data['isEnabled'];
        }
        if (isset($data['topicCount'])) {
            $this->topicCount = is_numeric($data['topicCount']) ? (float)$data['topicCount'] : $data['topicCount'];
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
