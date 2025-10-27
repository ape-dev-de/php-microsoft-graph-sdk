<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityUserFlow
 */
class IdentityUserFlow
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?UserFlowType $userFlowType = null;

    /** 
     * 
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $userFlowTypeVersion = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['userFlowType'])) {
            $this->userFlowType = is_string($data['userFlowType']) ? UserFlowType::tryFrom($data['userFlowType']) : $data['userFlowType'];
        }
        if (isset($data['userFlowTypeVersion'])) {
            $this->userFlowTypeVersion = is_numeric($data['userFlowTypeVersion']) ? (float)$data['userFlowTypeVersion'] : $data['userFlowTypeVersion'];
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
