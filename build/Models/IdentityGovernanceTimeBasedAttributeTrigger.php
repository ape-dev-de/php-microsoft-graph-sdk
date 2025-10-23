<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTimeBasedAttributeTrigger
 */
class IdentityGovernanceTimeBasedAttributeTrigger
{
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
        if (isset($data['offsetInDays'])) {
            $this->offsetInDays = $data['offsetInDays'];
        }
        if (isset($data['timeBasedAttribute'])) {
            $this->timeBasedAttribute = is_array($data['timeBasedAttribute']) ? new IdentityGovernanceWorkflowTriggerTimeBasedAttribute($data['timeBasedAttribute']) : $data['timeBasedAttribute'];
        }
    }
}
