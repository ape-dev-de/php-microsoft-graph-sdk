<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PresenceStatusMessage
 */
class PresenceStatusMessage
{
    public function __construct(
        /** Time in which the status message expires.If not provided, the status message doesn''t expire.expiryDateTime.dateTime shouldn''t include time zone.expiryDateTime isn''t available when you request the presence of another user. */
        public ?string $expiryDateTime = null,
        /** Status message item. The only supported format currently is message.contentType = 'text'. */
        public ?string $message = null,
        /** Time in which the status message was published.Read-only.publishedDateTime isn't available when you request the presence of another user. */
        public ?\DateTimeInterface $publishedDateTime = null
    ) {}
}
