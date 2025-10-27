<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExtractSensitivityLabelsResult
 */
class ExtractSensitivityLabelsResult
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * List of sensitivity labels assigned to a file.
     * @var SensitivityLabelAssignment[]
     */
    public array $labels = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['labels'])) {
            $this->labels = $data['labels'];
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
