<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InformationProtection
 */
class InformationProtection
{
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
        if (isset($data['bitlocker'])) {
            $this->bitlocker = is_array($data['bitlocker']) ? new Bitlocker($data['bitlocker']) : $data['bitlocker'];
        }
        if (isset($data['threatAssessmentRequests'])) {
            $this->threatAssessmentRequests = $data['threatAssessmentRequests'];
        }
    }
}
