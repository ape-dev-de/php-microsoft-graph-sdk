<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityAlertComment
 */
class SecurityAlertComment
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['comment'])) {
            $this->comment = $data['comment'];
        }
        if (isset($data['createdByDisplayName'])) {
            $this->createdByDisplayName = $data['createdByDisplayName'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
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
