<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthorizationInfo
 */
class AuthorizationInfo
{
    /**
     */
    private ?string $certificateUserIds;

    public function getCertificateUserIds(): ?string
    {
        return $this->certificateUserIds;
    }

    public function setCertificateUserIds(?string $certificateUserIds): self
    {
        $this->certificateUserIds = $certificateUserIds;
        return $this;
    }

}
