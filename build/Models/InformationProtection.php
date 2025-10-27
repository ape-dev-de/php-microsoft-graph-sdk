<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InformationProtection
 */
class InformationProtection
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * 
     * @var Bitlocker|\stdClass|null
     */
    public mixed $bitlocker = null;

    /** 
     * 
     * @var ThreatAssessmentRequest[]
     */
    public array $threatAssessmentRequests = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['bitlocker'])) {
            $this->bitlocker = is_array($data['bitlocker']) ? new Bitlocker($data['bitlocker']) : $data['bitlocker'];
        }
        if (isset($data['threatAssessmentRequests'])) {
            $this->threatAssessmentRequests = $data['threatAssessmentRequests'];
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
