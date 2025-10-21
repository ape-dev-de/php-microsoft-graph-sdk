<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AdminReportSettings
 */
class AdminReportSettings
{
    /**
     * If set to true, all reports conceal user information such as usernames, groups, and sites. If false, all reports show identifiable information. This property represents a setting in the Microsoft 365 admin center. Required.
     */
    private ?string $displayConcealedNames;


    public function getDisplayConcealedNames(): ?string
    {
        return $this->displayConcealedNames;
    }

    public function setDisplayConcealedNames(?string $displayConcealedNames): self
    {
        $this->displayConcealedNames = $displayConcealedNames;
        return $this;
    }

}
