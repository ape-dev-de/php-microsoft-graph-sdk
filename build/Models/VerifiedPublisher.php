<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VerifiedPublisher
 */
class VerifiedPublisher
{
    /** The timestamp when the verified publisher was first added or most recently updated. */
    public ?\DateTimeInterface $addedDateTime = null;

    /** The verified publisher name from the app publisher's Partner Center account. */
    public ?string $displayName = null;

    /** The ID of the verified publisher from the app publisher's Partner Center account. */
    public ?string $verifiedPublisherId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['addedDateTime'])) {
            $this->addedDateTime = is_string($data['addedDateTime']) ? new \DateTimeImmutable($data['addedDateTime']) : $data['addedDateTime'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['verifiedPublisherId'])) {
            $this->verifiedPublisherId = $data['verifiedPublisherId'];
        }
    }
}
