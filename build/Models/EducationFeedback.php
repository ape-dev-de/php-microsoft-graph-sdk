<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationFeedback
 */
class EducationFeedback
{
    /** 
     * User who created the feedback.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $feedbackBy = null;

    /** Moment in time when the feedback was given. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $feedbackDateTime = null;

    /** 
     * Feedback.
     * @var EducationItemBody|\stdClass|null
     */
    public mixed $text = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['feedbackBy'])) {
            $this->feedbackBy = is_array($data['feedbackBy']) ? new IdentitySet($data['feedbackBy']) : $data['feedbackBy'];
        }
        if (isset($data['feedbackDateTime'])) {
            $this->feedbackDateTime = is_string($data['feedbackDateTime']) ? new \DateTimeImmutable($data['feedbackDateTime']) : $data['feedbackDateTime'];
        }
        if (isset($data['text'])) {
            $this->text = is_array($data['text']) ? new EducationItemBody($data['text']) : $data['text'];
        }
    }
}
