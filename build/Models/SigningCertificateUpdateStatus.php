<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SigningCertificateUpdateStatus
 */
class SigningCertificateUpdateStatus
{
    /** Status of the last certificate update. Read-only. For a list of statuses, see certificateUpdateResult status. */
    public ?string $certificateUpdateResult = null;

    /** Date and time in ISO 8601 format and in UTC time when the certificate was last updated. Read-only. */
    public ?\DateTimeInterface $lastRunDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['certificateUpdateResult'])) {
            $this->certificateUpdateResult = $data['certificateUpdateResult'];
        }
        if (isset($data['lastRunDateTime'])) {
            $this->lastRunDateTime = $data['lastRunDateTime'];
        }
    }
}
