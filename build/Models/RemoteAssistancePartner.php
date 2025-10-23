<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RemoteAssistancePartner
 */
class RemoteAssistancePartner
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Display name of the partner. */
    public ?string $displayName = null;

    /** Timestamp of the last request sent to Intune by the TEM partner. */
    public ?\DateTimeInterface $lastConnectionDateTime = null;

    /**  */
    public ?RemoteAssistanceOnboardingStatus $onboardingStatus = null;

    /** URL of the partner's onboarding portal, where an administrator can configure their Remote Assistance service. */
    public ?string $onboardingUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastConnectionDateTime'])) {
            $this->lastConnectionDateTime = is_string($data['lastConnectionDateTime']) ? new \DateTimeImmutable($data['lastConnectionDateTime']) : $data['lastConnectionDateTime'];
        }
        if (isset($data['onboardingStatus'])) {
            $this->onboardingStatus = $data['onboardingStatus'];
        }
        if (isset($data['onboardingUrl'])) {
            $this->onboardingUrl = $data['onboardingUrl'];
        }
    }
}
