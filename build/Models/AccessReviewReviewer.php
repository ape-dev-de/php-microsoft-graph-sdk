<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewReviewer
 */
class AccessReviewReviewer
{
    /**
     * The date when the reviewer was added for the access review.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Name of reviewer.
     */
    private ?string $displayName;

    /**
     * User principal name of the reviewer.
     */
    private ?string $userPrincipalName;


    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getUserPrincipalName(): ?string
    {
        return $this->userPrincipalName;
    }

    public function setUserPrincipalName(?string $userPrincipalName): self
    {
        $this->userPrincipalName = $userPrincipalName;
        return $this;
    }

}
