<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SignInActivity
 */
class SignInActivity
{
    /**
     * The last non-interactive sign-in date for a specific user. You can use this field to calculate the last time a client attempted (either successfully or unsuccessfully) to sign in to the directory on behalf of a user. Because some users may use clients to access tenant resources rather than signing into your tenant directly, you can use the non-interactive sign-in date to along with lastSignInDateTime to identify inactive users. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Microsoft Entra ID maintains non-interactive sign-ins going back to May 2020. For more information about using the value of this property, see Manage inactive user accounts in Microsoft Entra ID.
     */
    private ?\DateTimeInterface $lastNonInteractiveSignInDateTime;

    /**
     * Request identifier of the last non-interactive sign-in performed by this user.
     */
    private ?string $lastNonInteractiveSignInRequestId;

    /**
     * The last interactive sign-in date and time for a specific user. This property records the last time a user attempted an interactive sign-in to the directory—whether the attempt was successful or not. Note: Since unsuccessful attempts are also logged, this value might not accurately reflect actual system usage. For tracking actual account access, please use the lastSuccessfulSignInDateTime property. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastSignInDateTime;

    /**
     * Request identifier of the last interactive sign-in performed by this user.
     */
    private ?string $lastSignInRequestId;

    /**
     * The date and time of the user''s most recent successful interactive or non-interactive sign-in. Use this property if you need to determine when the account was truly accessed. This field can be used to build reports, such as inactive users. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Microsoft Entra ID maintains interactive sign-ins going back to April 2020. For more information about using the value of this property, see Manage inactive user accounts in Microsoft Entra ID.
     */
    private ?\DateTimeInterface $lastSuccessfulSignInDateTime;

    /**
     * The request ID of the last successful sign-in.
     */
    private ?string $lastSuccessfulSignInRequestId;


    public function getLastNonInteractiveSignInDateTime(): ?\DateTimeInterface
    {
        return $this->lastNonInteractiveSignInDateTime;
    }

    public function setLastNonInteractiveSignInDateTime(?\DateTimeInterface $lastNonInteractiveSignInDateTime): self
    {
        $this->lastNonInteractiveSignInDateTime = $lastNonInteractiveSignInDateTime;
        return $this;
    }

    public function getLastNonInteractiveSignInRequestId(): ?string
    {
        return $this->lastNonInteractiveSignInRequestId;
    }

    public function setLastNonInteractiveSignInRequestId(?string $lastNonInteractiveSignInRequestId): self
    {
        $this->lastNonInteractiveSignInRequestId = $lastNonInteractiveSignInRequestId;
        return $this;
    }

    public function getLastSignInDateTime(): ?\DateTimeInterface
    {
        return $this->lastSignInDateTime;
    }

    public function setLastSignInDateTime(?\DateTimeInterface $lastSignInDateTime): self
    {
        $this->lastSignInDateTime = $lastSignInDateTime;
        return $this;
    }

    public function getLastSignInRequestId(): ?string
    {
        return $this->lastSignInRequestId;
    }

    public function setLastSignInRequestId(?string $lastSignInRequestId): self
    {
        $this->lastSignInRequestId = $lastSignInRequestId;
        return $this;
    }

    public function getLastSuccessfulSignInDateTime(): ?\DateTimeInterface
    {
        return $this->lastSuccessfulSignInDateTime;
    }

    public function setLastSuccessfulSignInDateTime(?\DateTimeInterface $lastSuccessfulSignInDateTime): self
    {
        $this->lastSuccessfulSignInDateTime = $lastSuccessfulSignInDateTime;
        return $this;
    }

    public function getLastSuccessfulSignInRequestId(): ?string
    {
        return $this->lastSuccessfulSignInRequestId;
    }

    public function setLastSuccessfulSignInRequestId(?string $lastSuccessfulSignInRequestId): self
    {
        $this->lastSuccessfulSignInRequestId = $lastSuccessfulSignInRequestId;
        return $this;
    }

}
