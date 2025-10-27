<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PresenceStatusMessage
 */
class PresenceStatusMessage
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Time in which the status message expires.If not provided, the status message doesn't expire.expiryDateTime.dateTime shouldn't include time zone.expiryDateTime isn't available when you request the presence of another user.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public DateTimeTimeZone|\stdClass|null $expiryDateTime = null;

    /** 
     * Status message item. The only supported format currently is message.contentType = 'text'.
     * @var ItemBody|\stdClass|null
     */
    public ItemBody|\stdClass|null $message = null;

    /** Time in which the status message was published.Read-only.publishedDateTime isn't available when you request the presence of another user. */
    public ?\DateTimeInterface $publishedDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['expiryDateTime'])) {
            $this->expiryDateTime = is_array($data['expiryDateTime']) ? new DateTimeTimeZone($data['expiryDateTime']) : $data['expiryDateTime'];
        }
        if (isset($data['message'])) {
            $this->message = is_array($data['message']) ? new ItemBody($data['message']) : $data['message'];
        }
        if (isset($data['publishedDateTime'])) {
            $this->publishedDateTime = is_string($data['publishedDateTime']) ? new \DateTimeImmutable($data['publishedDateTime']) : $data['publishedDateTime'];
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
