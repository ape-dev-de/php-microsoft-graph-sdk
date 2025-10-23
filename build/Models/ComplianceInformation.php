<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ComplianceInformation
 */
class ComplianceInformation
{
    /** 
     * Collection of the certification controls associated with the certification.
     * @var CertificationControl[]
     */
    public array $certificationControls = [];

    /** The name of the compliance certification, for example, ISO 27018:2014, GDPR, FedRAMP, and NIST 800-171. */
    public ?string $certificationName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['certificationControls'])) {
            $this->certificationControls = $data['certificationControls'];
        }
        if (isset($data['certificationName'])) {
            $this->certificationName = $data['certificationName'];
        }
    }
}
