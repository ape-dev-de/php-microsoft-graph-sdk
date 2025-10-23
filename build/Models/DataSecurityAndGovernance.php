<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DataSecurityAndGovernance
 */
class DataSecurityAndGovernance
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

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
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['sensitivityLabels'])) {
            $this->sensitivityLabels = $data['sensitivityLabels'];
        }
    }
}
