<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ComputeRightsAndInheritanceResult
 */
class ComputeRightsAndInheritanceResult
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * 
     * @var LabelContentRight[]
     */
    public array $contentRights = [];

    /** 
     * 
     * @var SensitivityLabel|\stdClass|null
     */
    public SensitivityLabel|\stdClass|null $inheritedLabel = null;

    /** 
     * 
     * @var SensitivityLabel[]
     */
    public array $sensitivityLabels = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['contentRights'])) {
            $this->contentRights = $data['contentRights'];
        }
        if (isset($data['inheritedLabel'])) {
            $this->inheritedLabel = is_array($data['inheritedLabel']) ? new SensitivityLabel($data['inheritedLabel']) : $data['inheritedLabel'];
        }
        if (isset($data['sensitivityLabels'])) {
            $this->sensitivityLabels = $data['sensitivityLabels'];
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
