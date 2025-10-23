<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermsAndConditionsAcceptanceStatus
 */
class TermsAndConditionsAcceptanceStatus
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** DateTime when the terms were last accepted by the user. */
    public ?\DateTimeInterface $acceptedDateTime = null;

    /** Most recent version number of the T&C accepted by the user. */
    public ?float $acceptedVersion = null;

    /** Display name of the user whose acceptance the entity represents. */
    public ?string $userDisplayName = null;

    /** The userPrincipalName of the User that accepted the term. */
    public ?string $userPrincipalName = null;

    /** 
     * Navigation link to the terms and conditions that are assigned.
     * @var TermsAndConditions|\stdClass|null
     */
    public mixed $termsAndConditions = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['acceptedDateTime'])) {
            $this->acceptedDateTime = is_string($data['acceptedDateTime']) ? new \DateTimeImmutable($data['acceptedDateTime']) : $data['acceptedDateTime'];
        }
        if (isset($data['acceptedVersion'])) {
            $this->acceptedVersion = $data['acceptedVersion'];
        }
        if (isset($data['userDisplayName'])) {
            $this->userDisplayName = $data['userDisplayName'];
        }
        if (isset($data['userPrincipalName'])) {
            $this->userPrincipalName = $data['userPrincipalName'];
        }
        if (isset($data['termsAndConditions'])) {
            $this->termsAndConditions = is_array($data['termsAndConditions']) ? new TermsAndConditions($data['termsAndConditions']) : $data['termsAndConditions'];
        }
    }
}
