<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationTerm
 */
class EducationTerm
{
    /** Display name of the term. */
    public ?string $displayName = null;

    /** End of the term. */
    public ?\DateTimeInterface $endDate = null;

    /** ID of term in the syncing system. */
    public ?string $externalId = null;

    /** Start of the term. */
    public ?\DateTimeInterface $startDate = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['endDate'])) {
            $this->endDate = $data['endDate'];
        }
        if (isset($data['externalId'])) {
            $this->externalId = $data['externalId'];
        }
        if (isset($data['startDate'])) {
            $this->startDate = $data['startDate'];
        }
    }
}
