<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceEnrollmentLimitConfiguration
 */
class DeviceEnrollmentLimitConfiguration
{
    /**
     * Device Enrollment Configuration that restricts the number of devices a user can enroll
     */
    private ?string $limit;

    public function getLimit(): ?string
    {
        return $this->limit;
    }

    public function setLimit(?string $limit): self
    {
        $this->limit = $limit;
        return $this;
    }

}
