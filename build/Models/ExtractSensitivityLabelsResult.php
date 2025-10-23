<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExtractSensitivityLabelsResult
 */
class ExtractSensitivityLabelsResult
{
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
        if (isset($data['labels'])) {
            $this->labels = $data['labels'];
        }
    }
}
