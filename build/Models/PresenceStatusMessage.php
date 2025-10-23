<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PresenceStatusMessage
 */
class PresenceStatusMessage
{
    /** 
     * Time in which the status message expires.If not provided, the status message doesn't expire.expiryDateTime.dateTime shouldn't include time zone.expiryDateTime isn't available when you request the presence of another user.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $expiryDateTime = null;

    /** 
     * Status message item. The only supported format currently is message.contentType = 'text'.
     * @var ItemBody|\stdClass|null
     */
    public mixed $message = null;

    /** Time in which the status message was published.Read-only.publishedDateTime isn't available when you request the presence of another user. */
    public ?\DateTimeInterface $publishedDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['expiryDateTime'])) {
            $this->expiryDateTime = $data['expiryDateTime'];
        }
        if (isset($data['message'])) {
            $this->message = $data['message'];
        }
        if (isset($data['publishedDateTime'])) {
            $this->publishedDateTime = $data['publishedDateTime'];
        }
    }
}
