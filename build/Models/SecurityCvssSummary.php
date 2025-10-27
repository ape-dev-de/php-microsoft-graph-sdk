<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCvssSummary
 */
class SecurityCvssSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The CVSS score about this vulnerability. */
    public ?string $score = null;

    /** 
     * The CVSS severity rating for this vulnerability. The possible values are: none, low, medium, high, critical, unknownFutureValue.
     * @var SecurityVulnerabilitySeverity|\stdClass|null
     */
    public mixed $severity = null;

    /** The CVSS vector string for this vulnerability. */
    public ?string $vectorString = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['score'])) {
            $this->score = $data['score'];
        }
        if (isset($data['severity'])) {
            $this->severity = is_array($data['severity']) ? new SecurityVulnerabilitySeverity($data['severity']) : $data['severity'];
        }
        if (isset($data['vectorString'])) {
            $this->vectorString = $data['vectorString'];
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
