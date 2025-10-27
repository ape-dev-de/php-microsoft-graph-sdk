<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SensitivityLabelAssignment
 */
class SensitivityLabelAssignment
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?SensitivityLabelAssignmentMethod $assignmentMethod = null;

    /** The unique identifier for the sensitivity label assigned to the file. */
    public ?string $sensitivityLabelId = null;

    /** The unique identifier for the tenant that hosts the file when this label is applied. */
    public ?string $tenantId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['assignmentMethod'])) {
            $this->assignmentMethod = is_array($data['assignmentMethod']) ? new SensitivityLabelAssignmentMethod($data['assignmentMethod']) : $data['assignmentMethod'];
        }
        if (isset($data['sensitivityLabelId'])) {
            $this->sensitivityLabelId = $data['sensitivityLabelId'];
        }
        if (isset($data['tenantId'])) {
            $this->tenantId = $data['tenantId'];
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
