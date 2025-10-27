<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFilePlanCitation
 */
class SecurityFilePlanCitation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Unique string that defines the name for the file plan descriptor associated with a particular retention label. */
    public ?string $displayName = null;

    /** Represents the jurisdiction or agency that published the filePlanCitation. */
    public ?string $citationJurisdiction = null;

    /** Represents the URL to the published filePlanCitation. */
    public ?string $citationUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['citationJurisdiction'])) {
            $this->citationJurisdiction = $data['citationJurisdiction'];
        }
        if (isset($data['citationUrl'])) {
            $this->citationUrl = $data['citationUrl'];
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
