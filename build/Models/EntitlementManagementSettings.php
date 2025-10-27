<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EntitlementManagementSettings
 */
class EntitlementManagementSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** If externalUserLifecycleAction is blockSignInAndDelete, the duration, typically many days, after an external user is blocked from sign in before their account is deleted. */
    public ?string $durationUntilExternalUserDeletedAfterBlocked = null;

    /** 
     * Automatic action that the service should take when an external user's last access package assignment is removed. The possible values are: none, blockSignIn, blockSignInAndDelete, unknownFutureValue.
     * @var AccessPackageExternalUserLifecycleAction|\stdClass|null
     */
    public AccessPackageExternalUserLifecycleAction|\stdClass|null $externalUserLifecycleAction = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['durationUntilExternalUserDeletedAfterBlocked'])) {
            $this->durationUntilExternalUserDeletedAfterBlocked = $data['durationUntilExternalUserDeletedAfterBlocked'];
        }
        if (isset($data['externalUserLifecycleAction'])) {
            $this->externalUserLifecycleAction = is_array($data['externalUserLifecycleAction']) ? new AccessPackageExternalUserLifecycleAction($data['externalUserLifecycleAction']) : $data['externalUserLifecycleAction'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
