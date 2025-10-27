<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRedundancyDetectionSettings
 */
class SecurityRedundancyDetectionSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Indicates whether email threading and near duplicate detection are enabled. */
    public ?bool $isEnabled = null;

    /** Specifies the maximum number of words used for email threading and near duplicate detection. To learn more, see Minimum/maximum number of words. */
    public ?float $maxWords = null;

    /** Specifies the minimum number of words used for email threading and near duplicate detection. To learn more, see Minimum/maximum number of words. */
    public ?float $minWords = null;

    /** Specifies the similarity level for documents to be put in the same near duplicate set. To learn more, see Document and email similarity threshold. */
    public ?float $similarityThreshold = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isEnabled'])) {
            $this->isEnabled = $data['isEnabled'];
        }
        if (isset($data['maxWords'])) {
            $this->maxWords = $data['maxWords'];
        }
        if (isset($data['minWords'])) {
            $this->minWords = $data['minWords'];
        }
        if (isset($data['similarityThreshold'])) {
            $this->similarityThreshold = $data['similarityThreshold'];
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
