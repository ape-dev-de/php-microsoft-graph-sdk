<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PayloadDetail
 */
class PayloadDetail
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * 
     * @var PayloadCoachmark[]
     */
    public array $coachmarks = [];

    /** Payload content details. */
    public ?string $content = null;

    /** The phishing URL used to target a user. */
    public ?string $phishingUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['coachmarks'])) {
            $this->coachmarks = $data['coachmarks'];
        }
        if (isset($data['content'])) {
            $this->content = $data['content'];
        }
        if (isset($data['phishingUrl'])) {
            $this->phishingUrl = $data['phishingUrl'];
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
