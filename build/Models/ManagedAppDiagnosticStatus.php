<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppDiagnosticStatus
 */
class ManagedAppDiagnosticStatus
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Instruction on how to mitigate a failed validation */
    public ?string $mitigationInstruction = null;

    /** The state of the operation */
    public ?string $state = null;

    /** The validation friendly name */
    public ?string $validationName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['mitigationInstruction'])) {
            $this->mitigationInstruction = $data['mitigationInstruction'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
        if (isset($data['validationName'])) {
            $this->validationName = $data['validationName'];
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
