<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LicenseAssignmentState
 */
class LicenseAssignmentState
{
    /**  */
    public ?string $assignedByGroup = null;

    /** 
     * 
     * @var string[]
     */
    public array $disabledPlans = [];

    /**  */
    public ?string $error = null;

    /**  */
    public ?\DateTimeInterface $lastUpdatedDateTime = null;

    /**  */
    public ?string $skuId = null;

    /**  */
    public ?string $state = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['assignedByGroup'])) {
            $this->assignedByGroup = $data['assignedByGroup'];
        }
        if (isset($data['disabledPlans'])) {
            $this->disabledPlans = $data['disabledPlans'];
        }
        if (isset($data['error'])) {
            $this->error = $data['error'];
        }
        if (isset($data['lastUpdatedDateTime'])) {
            $this->lastUpdatedDateTime = $data['lastUpdatedDateTime'];
        }
        if (isset($data['skuId'])) {
            $this->skuId = $data['skuId'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
    }
}
