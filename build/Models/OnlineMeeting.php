<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnlineMeeting
 */
class OnlineMeeting
{
    public function __construct(
        /** The content stream of the attendee report of a Microsoft Teams live event. Read-only. */
        public ?string $attendeeReport = null,
        /** Settings related to a live event. */
        public ?string $broadcastSettings = null,
        /** The meeting creation time in UTC. Read-only. */
        public ?\DateTimeInterface $creationDateTime = null,
        /** The meeting end time in UTC. Required when you create an online meeting. */
        public ?\DateTimeInterface $endDateTime = null,
        /** The external ID that is a custom identifier. Optional. */
        public ?string $externalId = null,
        /** Indicates whether this meeting is a Teams live event. */
        public ?bool $isBroadcast = null,
        /** The ID of the meeting template. */
        public ?string $meetingTemplateId = null,
        /** The participants associated with the online meeting, including the organizer and the attendees. */
        public ?string $participants = null,
        /** The meeting start time in UTC. */
        public ?\DateTimeInterface $startDateTime = null,
        /** The recordings of an online meeting. Read-only. */
        public array $recordings = [],
        /** @var string[] The transcripts of an online meeting. Read-only. */
        public array $transcripts = []
    ) {}
}
