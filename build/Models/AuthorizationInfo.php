<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthorizationInfo
 */
class AuthorizationInfo
{
    /**
     * @var string[]
     */
    private array $certificateUserIds = [];


    /**
     * @return string[]
     */
    public function getCertificateUserIds(): array
    {
        return $this->certificateUserIds;
    }

    /**
     * @param string[] $certificateUserIds
     */
    public function setCertificateUserIds(array $certificateUserIds): self
    {
        $this->certificateUserIds = $certificateUserIds;
        return $this;
    }

}
