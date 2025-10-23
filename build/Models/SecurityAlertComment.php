<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityAlertComment
 */
class SecurityAlertComment
{
    /** The comment text. */
    public ?string $comment = null;

    /** The person or app name that submitted the comment. */
    public ?string $createdByDisplayName = null;

    /** The time when the comment was submitted. */
    public ?\DateTimeInterface $createdDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['comment'])) {
            $this->comment = $data['comment'];
        }
        if (isset($data['createdByDisplayName'])) {
            $this->createdByDisplayName = $data['createdByDisplayName'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
    }
}
