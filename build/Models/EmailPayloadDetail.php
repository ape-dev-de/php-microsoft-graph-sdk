<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmailPayloadDetail
 */
class EmailPayloadDetail
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

    /** Email address of the user. */
    public ?string $fromEmail = null;

    /** Display name of the user. */
    public ?string $fromName = null;

    /** Indicates whether the sender isn't from the user's organization. */
    public ?bool $isExternalSender = null;

    /** The subject of the email address sent to the user. */
    public ?string $subject = null;


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
        if (isset($data['fromEmail'])) {
            $this->fromEmail = $data['fromEmail'];
        }
        if (isset($data['fromName'])) {
            $this->fromName = $data['fromName'];
        }
        if (isset($data['isExternalSender'])) {
            $this->isExternalSender = $data['isExternalSender'];
        }
        if (isset($data['subject'])) {
            $this->subject = $data['subject'];
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
