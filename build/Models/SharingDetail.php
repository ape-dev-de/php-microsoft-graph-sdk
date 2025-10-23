<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharingDetail
 */
class SharingDetail
{
    /** 
     * The user who shared the document.
     * @var InsightIdentity|\stdClass|null
     */
    public mixed $sharedBy = null;

    /** The date and time the file was last shared. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $sharedDateTime = null;

    /** 
     * Reference properties of the document, such as the URL and type of the document. Read-only
     * @var ResourceReference|\stdClass|null
     */
    public mixed $sharingReference = null;

    /** The subject with which the document was shared. */
    public ?string $sharingSubject = null;

    /** Determines the way the document was shared. Can be by a 1Link1, 1Attachment1, 1Group1, 1Site1. */
    public ?string $sharingType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['sharedBy'])) {
            $this->sharedBy = is_array($data['sharedBy']) ? new InsightIdentity($data['sharedBy']) : $data['sharedBy'];
        }
        if (isset($data['sharedDateTime'])) {
            $this->sharedDateTime = is_string($data['sharedDateTime']) ? new \DateTimeImmutable($data['sharedDateTime']) : $data['sharedDateTime'];
        }
        if (isset($data['sharingReference'])) {
            $this->sharingReference = is_array($data['sharingReference']) ? new ResourceReference($data['sharingReference']) : $data['sharingReference'];
        }
        if (isset($data['sharingSubject'])) {
            $this->sharingSubject = $data['sharingSubject'];
        }
        if (isset($data['sharingType'])) {
            $this->sharingType = $data['sharingType'];
        }
    }
}
