<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Privacy
 */
class Privacy
{
    /** 
     * 
     * @var SubjectRightsRequest[]
     */
    public array $subjectRightsRequests = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['subjectRightsRequests'])) {
            $this->subjectRightsRequests = $data['subjectRightsRequests'];
        }
    }
}
