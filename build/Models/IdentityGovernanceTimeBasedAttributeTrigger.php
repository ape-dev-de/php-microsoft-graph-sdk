<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTimeBasedAttributeTrigger
 */
class IdentityGovernanceTimeBasedAttributeTrigger
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** How many days before or after the time-based attribute specified the workflow should trigger. For example, if the attribute is employeeHireDate and offsetInDays is -1, then the workflow should trigger one day before the employee hire date. The value can range between -180 and 180 days. */
    public ?float $offsetInDays = null;

    /**  */
    public ?IdentityGovernanceWorkflowTriggerTimeBasedAttribute $timeBasedAttribute = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['offsetInDays'])) {
            $this->offsetInDays = is_numeric($data['offsetInDays']) ? (float)$data['offsetInDays'] : $data['offsetInDays'];
        }
        if (isset($data['timeBasedAttribute'])) {
            $this->timeBasedAttribute = is_array($data['timeBasedAttribute']) ? new IdentityGovernanceWorkflowTriggerTimeBasedAttribute($data['timeBasedAttribute']) : $data['timeBasedAttribute'];
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
