<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SigningCertificateUpdateStatus
 */
class SigningCertificateUpdateStatus
{
    /**
     * Status of the last certificate update. Read-only. For a list of statuses, see certificateUpdateResult status.
     */
    private ?string $certificateUpdateResult;

    /**
     * Date and time in ISO 8601 format and in UTC time when the certificate was last updated. Read-only.
     */
    private ?\DateTimeInterface $lastRunDateTime;


    public function getCertificateUpdateResult(): ?string
    {
        return $this->certificateUpdateResult;
    }

    public function setCertificateUpdateResult(?string $certificateUpdateResult): self
    {
        $this->certificateUpdateResult = $certificateUpdateResult;
        return $this;
    }

    public function getLastRunDateTime(): ?\DateTimeInterface
    {
        return $this->lastRunDateTime;
    }

    public function setLastRunDateTime(?\DateTimeInterface $lastRunDateTime): self
    {
        $this->lastRunDateTime = $lastRunDateTime;
        return $this;
    }

}
